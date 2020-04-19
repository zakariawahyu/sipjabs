<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillPegawai extends Model
{
    protected $table = 'skill_pegawai';

    protected $fillable = ['id_pegawai', 'id_skill'];
}
