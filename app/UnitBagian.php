<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnitBagian extends Model
{
    // identifikkasi nama table
    protected $table = 'unit_bagian';

    // nama field yang boleh di isi
    protected $fillable = ['nama_unitbagian'];
}
