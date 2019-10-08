<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswacontroller extends Controller
{
    public function index()
    {
        $data_mahasiswa = \App\mahasiswa::all();
        return view('mahasiswa.index',['data_mahasiswa' => $data_mahasiswa]);
    }

    public function create(request $request)
    {
        \App\mahasiswa::create($request->all());
        return redirect('/mahasiswa')->with('Sukses','Data Berhasil disimpan');
    }

    public function edit($id)
    {
        $mahasiswa = \App\mahasiswa::find($id);
        return view('mahasiswa/edit',['mahasiswa'=> $mahasiswa]);
    }

    public function update(request $request,$id)
    {
        $mahasiswa = \App\mahasiswa::find($id);
        $mahasiswa->update($request->all());
        return redirect('/mahasiswa')->with('Sukses','Data Berhasil Di-Update');
    }
}
