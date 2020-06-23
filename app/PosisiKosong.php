<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PosisiKosong extends Model
{
    // identifikasi nama table
    protected $table = 'posisi_kosong';

    // nama field yang boleh di isi
    protected $fillable = ['id_jabatanstruktural', 'status_posisi'];

    // one to one menghubungkan table PosisiKosong dengan table jabatan struktural
    public function jabatanstruktural()
    {
      return $this->belongsTo(JabatanStruktural::class, 'id_jabatanstruktural');
    }

}
