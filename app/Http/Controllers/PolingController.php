<?php

namespace App\Http\Controllers;

use App\Poling;
use App\Models\Poling as ModelsPoling;
use CreatePolingsTable;
use Illuminate\Http\Request;

class PolingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtPoling = ModelsPoling::simplePaginate(5);
        return view('poling',compact('dtPoling'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-poling');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        ModelsPoling::create([
            'nama_mhs' => $request->nama_mhs,
            'pemberi_poling' => $request->pemberi_poling,
            'photogenic' => $request->photogenic,
            'tanggung_jawab' => $request->tanggung_jawab,
            'jujur' => $request->jujur,
            'aktif' => $request->aktif,
            'kreatif' => $request->kreatif,
            'nilai' => $request->nilai,

        ]);
        return redirect('poling')->with('toast_success', 'Data Berhasil Tersimpan');
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
