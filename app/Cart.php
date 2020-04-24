<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    // nama field yang boleh di isi
    protected $fillable = ['id_user', 'id_pegawai'];
}
