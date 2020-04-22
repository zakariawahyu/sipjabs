<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnitKerja extends Model
{
    // identifikasi nama table
    protected $table = 'unit_kerja';

    // nama field yang boleh di isi
    protected $fillable = ['nama_unitkerja'];
}
