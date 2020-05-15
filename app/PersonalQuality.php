<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalQuality extends Model
{
    // identifikasi nama table
    protected $table = 'personal_quality';

    // nama field yang boleh di isi
    protected $fillable = ['nama_personalquality'];
}
