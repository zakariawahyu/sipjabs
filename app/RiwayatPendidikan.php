<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiwayatPendidikan extends Model
{
    protected $table = 'riwayat_pendidikan';

    protected $fillable = ['id_pegawai', 'id_pendidikan'];
}
