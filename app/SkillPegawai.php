<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillPegawai extends Model
{
  // one to one menghubungkan table skill_pegawai dengan table skill
    public function skill()
    {
      return $this->belongsTo(Skill::class, 'id_skill');
    }

    // identifikasi nama table
    protected $table = 'skill_pegawai';

    // nama field yang boleh di isi
    protected $fillable = ['id_pegawai', 'id_skill'];
}
