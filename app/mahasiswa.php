<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['nama_lengkap','nim','alamat','email'];
}
