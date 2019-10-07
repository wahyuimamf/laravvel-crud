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
        return redirect('/mahasiswa');
    }
}
