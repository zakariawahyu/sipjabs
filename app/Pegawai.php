<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';

    protected $fillable = ['nama_lengkap', 'nip', 'status_pegawai', 'id_jabatanstruktural', 'jenis_kelamin', 'ttl', 'gol_darah', 'status_perkawinan', 'agama', 'tinggi_badan', 'berat_badan', 'alamat'];

}
