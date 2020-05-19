<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tallent extends Model
{
    // nama field yang boleh di isi
    protected $fillable = ['id_user', 'id_pegawai','nomor_urut', 'nomor_surat', 'id_jabstruklama'];

    // one to one menghubungkan table skill_pegawai dengan table skill
    public function pegawai()
    {
      return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }

    // one to one menghubungkan table tallent dengan table jabatan struktural
    public function jabatanstruktural()
    {
      return $this->belongsTo(JabatanStruktural::class, 'id_jabstruklama');
    }
}
