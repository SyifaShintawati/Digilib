<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mockery\Exception;
use Yajra\DataTables\Datatables;
use PDF;
use Excel;

use App\anggota;

class anggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('anggota');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $anggota = new anggota;
        $anggota->no_agt = $request->no_agt;
        $anggota->nm_agt = $request->nm_agt;
        $anggota->alamat = $request->alamat;
        $anggota->kota = $request->kota;
        $anggota->tlp = $request->tlp;
        $anggota->save();
        return redirect('/anggota');

        return response()->json([
            'success' => true,
            'message' => 'Berhasil Ditambahkan!'
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
        // $value=anggota::find($id);
        // return view('edit',compact('value'));

        $anggota = anggota::findOrFail($id);
        return $anggota;
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
        $anggota= anggota::find($request->id);
        $anggota->nm_agt = $request->nm_agt;
        $anggota->alamat = $request->alamat;
        $anggota->kota = $request->kota;
        $anggota->tlp = $request->tlp;
        $anggota->save();
        return redirect('/anggota');

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
        // $anggota = anggota::find($id);
        // $anggota->delete();
        // return redirect('/anggota');

        $anggota = anggota::findOrFail($id);
        anggota::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'Berhasil Dihapus!'
        ]);
    }

    public function apianggota()
    {
        $anggota = anggota::all();
 
        return Datatables::of($anggota)
            ->addColumn('action', function($anggota){
                return '<a onclick="editForm('. $anggota->id .')" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-edit"></i> Edit</a>  ' .
                       '<a onclick="deleteData('. $anggota->id .')" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
            })->addIndexColumn()->make(true);
    }

     public function pdf()
    {
        $anggota = anggota::all();
        $pdf = PDF::loadView('pdfAgt', compact('anggota'));
        $pdf->setPaper('letter', 'potrait');

        return $pdf->stream();
    }

    public function excel()
    {
        $anggota = anggota::all();
        Excel::create('anggota', function($excel) use ($anggota){

            $excel->sheet('anggota', function($sheet) use ($anggota){
                $sheet->loadView('excelAgt', array('anggota' => $anggota));
            });
        })->download('xls');
    }
}