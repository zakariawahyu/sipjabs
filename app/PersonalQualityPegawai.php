<?php

namespace App;
use App\PersonalQuality;

use Illuminate\Database\Eloquent\Model;

class PersonalQualityPegawai extends Model
{
    // one to one menghubungkan table personal_quality_pegawai dengan table personal_quality
    public function personalquality()
    {
      return $this->belongsTo(PersonalQuality::class, 'id_personalquality');
    }

    // identifikasi nama table
    protected $table = 'personal_quality_pegawai';

    // nama field yang boleh di isi
    protected $fillable = ['id_pegawai', 'id_personalquality'];
}
