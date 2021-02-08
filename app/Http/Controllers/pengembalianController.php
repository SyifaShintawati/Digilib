<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;
use Carbon\Carbon;
use PDF;
use Excel;

use App\peminjaman;
use App\buku;

class pengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $pnb = peminjaman::with('anggota','buku')->get();
        return view ('pengembalian', compact('pnb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengembalian = peminjaman::find($request->id);
        $pengembalian->tgl_kbl = $request->tgl_kbl;
        
        $Htgl =  \Carbon\Carbon::parse($pengembalian->tgl_hsblk)->diffInDays($pengembalian->tgl_kbl, false);
            if($pengembalian->tgl_kbl > $pengembalian->tgl_hsblk){
                $denda = $Htgl*2000;
            }else{
                $denda = $Htgl*0;
            }
        $pengembalian->denda = $denda;
        $pengembalian->save();

        $buku = \App\buku::find($request->id_buku);
        $s = $buku->stok + 1;
        $buku->stok = $s;
        $buku->save();
        
        return redirect('/pengembalian');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pnb = \App\peminjaman::all();
        return view ('pengembalian', compact('pnb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengembalian = peminjaman::findOrFail($id);
        peminjaman::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'Berhasil Dihapus'
        ]);
    }

     public function apipengembalian()
    {
        $pengembalian = peminjaman::with('anggota','buku')->WHERE('tgl_kbl', '!=', 'null')->get();
 
        return Datatables::of($pengembalian)
            ->addColumn('action', function($pengembalian){
                return '<a onclick="hps('. $pengembalian->id .')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Hapus</a>';

            })->addIndexColumn()->make(true);
    }

     public function tglpbm($tgl_pjm)
    {
        return \Carbon\Carbon::parse($tgl_pjm)->addDays(2)->format('Y-m-d');
    }

     public function judul($id)
    {
        $hm = peminjaman::with('anggota','buku')->find($id);
        $data['judul'] = $hm->buku->judul;
        $data['id_buku'] = $hm->buku->id;

        return $data;
    }

     public function pdf()
    {
        $pengembalian = peminjaman::with('anggota','buku')->WHERE('tgl_kbl', '!=', 'null')->get();
        $pdf = PDF::loadView('pdfPbl', compact('pengembalian'));
        $pdf->setPaper('letter', 'potrait');

        return $pdf->stream();
    }

    public function excel()
    {
        $pengembalian = peminjaman::with('anggota','buku')->WHERE('tgl_kbl', '!=', 'null')->get();
        Excel::create('pengembalian', function($excel) use ($pengembalian){

            $excel->sheet('pengembalian', function($sheet) use ($pengembalian){
                $sheet->loadView('excelPbl', array('pengembalian' => $pengembalian));
            });
        })->download('xls');
    }
}