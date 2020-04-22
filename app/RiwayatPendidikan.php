<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiwayatPendidikan extends Model
{

    //  one to one menghubungkan table riwayat_pendidikan dengan table pendidikan
    public function pendidikan()
    {
      return $this->belongsTo(Pendidikan::class, 'id_pendidikan');
    }

    // identifikasi nama table 
    protected $table = 'riwayat_pendidikan';

    // nama field yang boleh di isi
    protected $fillable = ['id_pegawai', 'id_pendidikan'];
}
