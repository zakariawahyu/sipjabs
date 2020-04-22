<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    // identifikasi  nama table
    protected $table = 'pendidikan';

    // nama field yang boleh di isi
    protected $fillable = ['jenjang_pendidikan', 'jurusan'];
}
