<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;
use Carbon\Carbon;
use PDF;
use Excel;

use App\peminjaman;
use App\buku;

class peminjamanController extends Controller
{
    /**
     * Display a listing of the resource.   
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $pm = \App\anggota::all();
         $pn = \App\buku::all();
        return view ('peminjaman', compact('pm', 'pn'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tampem');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peminjaman = new peminjaman;
        $peminjaman->no_pinjam = $request->no_pinjam;
        $peminjaman->id_agt = $request->id_agt;
        $peminjaman->id_buku = $request->id_buku;
        $peminjaman->tgl_pjm = $request->tgl_pjm;
        $peminjaman->tgl_hsblk = $request->tgl_hsblk;

        $buku = \App\buku::find($request->id_buku);
        if($buku->stok <= 0 ){
            return response()->json([
                'stok' => ['stok' => "Maaf Stok Buku sedang Kosong Coba pilih kembali"]
            ],422);
        }else{
            $peminjaman->save();
        }
        $s = $buku->stok - 1;
        $buku->stok = $s;
        $buku->save();
        return redirect('/peminjaman');

        return response()->json([
            'success' => true,
            'message' => 'Berhasil Dibuat!'
        ]);
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
        $peminjaman = peminjaman::findOrFail($id);
        $value=peminjaman::find($id);
        $ang=\App\anggota::all();
        $buk=\App\buku::all();
        return $peminjaman;
        return view('update',compact('value', 'ang', 'buk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $peminjaman = peminjaman::find($request->id);
        $peminjaman->no_pinjam = $request->no_pinjam;
        $peminjaman->id_agt = $request->id_agt;
        $peminjaman->id_buku = $request->id_buku;
        $peminjaman->tgl_pjm = $request->tgl_pjm;
        $peminjaman->tgl_hsblk = $request->tgl_hsblk;
        $peminjaman->save();
        return redirect('/peminjaman');

        return response()->json([
            'success' => true,
            'message' => 'Berhasil Diubah!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $peminjaman = peminjaman::findOrFail($id);
        peminjaman::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'Berhasil Dihapus'
        ]);
    }

    public function apipeminjaman()
    {
        $peminjaman = peminjaman::with('anggota','buku')->WHERE('tgl_kbl')->get();
 
        return Datatables::of($peminjaman)
            ->addColumn('action', function($peminjaman){
                return '<a onclick="editt('. $peminjaman->id .')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a>  ' .
                       '<a onclick="hapus('. $peminjaman->id .')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Delete</a>  ' ;
            })->addIndexColumn()->make(true);
    }


    public function tglpbm($tgl_pjm)
    {
        return \Carbon\Carbon::parse($tgl_pjm)->addDays(2)->format('Y-m-d');
    }

    
     public function pdf()
    {
        $peminjaman = peminjaman::with('anggota','buku')->WHERE('tgl_kbl')->get();
        $pdf = PDF::loadView('pdfPjm', compact('peminjaman'));
        $pdf->setPaper('letter', 'potrait');

        return $pdf->stream();
    }

    public function excel()
    {
        $peminjaman = peminjaman::with('anggota','buku')->WHERE('tgl_kbl')->get();
        Excel::create('peminjaman', function($excel) use ($peminjaman){

            $excel->sheet('peminjaman', function($sheet) use ($peminjaman){
                $sheet->loadView('excelPjm', array('peminjaman' => $peminjaman));
            });
        })->download('xls');
    }
}

