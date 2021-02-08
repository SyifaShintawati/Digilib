<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mockery\Exception;
use Yajra\DataTables\Datatables;
use PDF;
use Excel;

use App\jenis;


class jenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('jenis');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jenis');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jenis = new jenis;
        $jenis->jenis = $request->jenis;
        $jenis->save();
        return redirect('/jenis');

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
        // $value=jenis::find($id);
        // return view('ed',compact('value'));

        $jenis = jenis::findOrFail($id);
        return $jenis;
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
        $jenis= jenis::find($request->id);
        $jenis->jenis = $request->jenis;
        $jenis->save();
        return redirect('/jenis');

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
        // $jenis = jenis::find($id);
        // $jenis->delete();
        // return redirect('/jenis');

        $jenis = jenis::findOrFail($id);
        jenis::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'Berhasil Dihapus!'
        ]);
    }

    public function apijenis()
    {
        $jenis = jenis::all();
 
        return Datatables::of($jenis)
            ->addColumn('action', function($jenis){
                return '<a onclick="ed('. $jenis->id .')" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-edit"></i> Edit</a>  ' .
                       '<a onclick="del('. $jenis->id .')" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
            })->addIndexColumn()->make(true);
    }

     public function pdf()
    {
        $jenis = jenis::all();
        $pdf = PDF::loadView('pdfJns', compact('jenis'));
        $pdf->setPaper('letter', 'potrait');

        return $pdf->stream();
    }

    public function excel()
    {
        $jenis = jenis::all();
        Excel::create('jenis', function($excel) use ($jenis){

            $excel->sheet('jenis', function($sheet) use ($jenis){
                $sheet->loadView('excelJenis', array('jenis' => $jenis));
            });
        })->download('xls');
    }
}
