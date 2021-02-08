<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mockery\Exception;
use Yajra\DataTables\Datatables;
use PDF;
use Excel;

use App\buku;

class bukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responses
     */
    public function index()
    {
        $buku = buku::all();
        $jns=\App\jenis::all();
        return view ('buku',compact('jns', 'buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('bah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'judul'  => 'required|max:25',
            'pengarang'  => 'max:10',
            'isbn'  => 'required|max:15',
            'thn'  => 'required|max:10',
            'penerbit'  => 'required|max:10',
            'stok' => 'required',
        ],[
            'judul.required'=>'Judul tidak boleh kosong',
            'judul.max'=>'Anda tidak boleh memasukkan lebih dari 25 Karakter',

            'pengarang.max' =>'Anda tidak boleh memasukkan lebih dari 10 Karakter',

            'isbn.required'=>'No ISBN tidak boleh kosong',
            'isbn.max' =>'Anda tidak boleh memasukkan lebih dari 15 Karakter',

            'thn.required'=>'Tahun Terbit tidak boleh kosong',
            'thn.max' =>'Anda tidak boleh memasukkan lebih dari 10 Karakter',

            'penerbit.required'=>'Penerbit tidak boleh kosong',
            'penerbit.max' =>'Anda tidak boleh memasukkan lebih dari 10 Angka',

            'stok.required'=>'Stok tidak boleh kosong',
        ]
        );

        $buku = new buku;
        $buku->id_jb = $request->id_jb;
        $buku->judul = $request->judul;
        $buku->pengarang = $request->pengarang;
        $buku->isbn = $request->isbn;
        $buku->thn = $request->thn;
        $buku->penerbit = $request->penerbit;
        $buku->stok = $request->stok;
        $buku->save();
        return redirect('/buku');

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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = buku::findOrFail($id);
        $jns=\App\jenis::all();
        return $buku;
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
        $buku = buku::find($request->id);
        $buku->id_jb = $request->id_jb;
        $buku->judul = $request->judul;
        $buku->pengarang = $request->pengarang;
        $buku->isbn = $request->isbn;
        $buku->thn = $request->thn;
        $buku->penerbit = $request->penerbit;
        $buku->stok = $request->stok;
        $buku->save();
        return redirect('/buku');

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
        // $buku = buku::find($id);
        // $buku->delete();
        // return redirect('/buku');

        $buku = buku::findOrFail($id);
        buku::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'Berhasil Dihapus!'
        ]);
        
    }

    public function apibuku()
    {
        $buku = buku::with('jenis')->get();
 
        return Datatables::of($buku)
            ->addColumn('action', function($buku){
                return '<a onclick="dit('. $buku->id .')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a>  ' .
                       '<a onclick="let('. $buku->id .')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
            })->addIndexColumn()->make(true);
    }

     public function pdf()
    {
        $buku = buku::all();
        $pdf = PDF::loadView('pdfBuku', compact('buku'));
        $pdf->setPaper('letter', 'potrait');

        return $pdf->stream();
    }

    public function excel()
    {
        $buku = buku::all();
        Excel::create('buku', function($excel) use ($buku){

            $excel->sheet('buku', function($sheet) use ($buku){
                $sheet->loadView('excelBuku', array('buku' => $buku));
            });
        })->download('xls');
    }
}