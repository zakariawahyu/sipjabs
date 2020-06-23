<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tallent extends Model
{
    // identifikasi nama table
    protected $table = 'kandidat';

    // nama field yang boleh di isi
    protected $fillable = ['id_user', 'id_pegawai','nomor_urut', 'nomor_surat', 'id_posisikosong'];

    // one to one menghubungkan table skill_pegawai dengan table skill
    public function pegawai()
    {
      return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }

    // one to one menghubungkan table cart dengan table jabatan struktural
    public function posisikosong()
    {
      return $this->belongsTo(PosisiKosong::class, 'id_posisikosong');
    }
}
