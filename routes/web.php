<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
route::get('/mahasiswa', 'mahasiswacontroller@index');
route::post('/mahasiswa/create', 'mahasiswacontroller@create');
route::get('/mahasiswa/{id}/edit','mahasiswacontroller@edit');
route::post('/mahasiswa/{id}/update','mahasiswacontroller@update');
route::get('/mahasiswa/{id}/delete','mahasiswacontroller@delete');