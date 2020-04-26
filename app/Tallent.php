<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tallent extends Model
{
    // nama field yang boleh di isi
    protected $fillable = ['id_user', 'id_pegawai','nomor_urut', 'nomor_surat'];

    // one to one menghubungkan table skill_pegawai dengan table skill
    public function pegawai()
    {
      return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
}
