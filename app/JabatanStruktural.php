<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JabatanStruktural extends Model
{
    protected $table = 'jabatan_struktural';

    protected $fillable = ['id_unitkerja', 'id_jabatan', 'id_unitbagian', 'formasi_jabatan'];
}
