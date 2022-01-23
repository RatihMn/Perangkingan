<?php

namespace App\Http\Controllers;

use App\Pengambilanmatkul;
use App\Matakuliah;
use App\Models\Matakuliah as ModelsMatakuliah;
use App\Models\Pengambilanmatkul as ModelsPengambilanmatkul;
use CreatePengambilanmatkulsTable;
use Illuminate\Http\Request;

class PengambilanmatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtPengambilan = ModelsPengambilanmatkul::with('matakuliah')->simplePaginate(5);
        return view('pengambilanmatkul',compact('dtPengambilan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peng = ModelsMatakuliah::all();
        return view('create-pengambilanmatkul',compact('peng'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     */
    public function store(Request $request)
    {
         //dd($request->all());
         ModelsPengambilanmatkul::create([

            'mk_id' => $request->mk_id,
            'thn_ajaran' => $request->thn_ajaran,
            'semester' => $request->semester,
            'nilai_huruf' => $request->nilai_huruf,
            'nilai_angka' => $request->nilai_angka,
            'sks' => $request->sks,
            'nilai' => $request->nilai,

        ]);
        return redirect('pengambilanmatkul')->with('toast_success', 'Data Berhasil Tersimpan');
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
        //
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
        //
    }
}
