<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\Models\Mahasiswa as ModelsMahasiswa;
use CreateMahasiswasTable;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtMahasiswa = ModelsMahasiswa::simplePaginate(5);
        return view('data-mahasiswa',compact('dtMahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-datamahasiswa');
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
     ModelsMahasiswa::create([
        'nim' => $request->nim,
        'nama' => $request->nama,
        'lahir' => $request->tempat_lahir,
        'tgl_lahir' => $request->tgl_lahir,
        'jenis_kelamin' => $request->jenis_kelamin,
        'no_hp' => $request->no_hp,
        'email' => $request->email,
        'alamat' => $request->alamat,
        'tahun_masuk' => $request->tahun_masuk,

    ]);
    return redirect('data-mahasiswa')->with('toast_success', 'Data Berhasil Tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mah = ModelsMahasiswa::findorfail($id);

        return view('detail-mahasiswa', compact('mah'));
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
        $mah = ModelsMahasiswa::findorfail($id);
        $mah->delete();
        return back()->with('toast_success', 'Data Berhasil Dihapus');
    }
}
