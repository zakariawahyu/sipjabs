<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    // identifikasi nama table
    protected $table = 'skill';

    // nama field yang boleh di isi
    protected $fillable = ['nama_skill'];
}
