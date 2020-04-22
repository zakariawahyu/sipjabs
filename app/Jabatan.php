<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    // identifikasi nama table
    protected $table = 'jabatan';

    // nama field yang boleh di isi
    protected $fillable = ['nama_jabatan', 'level_jabatan'];
}
