<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    //  many to many menghubungkan table pegawai dengan table riwayat_pendidikan
    public function riwayatpendidikan()
    {
      return $this->hasMany(RiwayatPendidikan::class, 'id_pegawai');
    }

    //  many to many menghubungkan table pegawai dengan skill_pegawai
    public function skillpegawai()
    {
      return $this->hasMany(SkillPegawai::class, 'id_pegawai');
    }

    //  many to many menghubungkan table pegawai dengan personal_quality_pegawai
    public function personalquality()
    {
      return $this->hasMany(PersonalQualityPegawai::class, 'id_pegawai');
    }

    //  one to one menghubungkan table pegawai dengan jabatan_struktural
    public function jabatanstruktural()
    {
      return $this->belongsTo(JabatanStruktural::class, 'id_jabatanstruktural');
    }

    // identifikasi nama table
    protected $table = 'pegawai';

    // nama field yang boleh di isi
    protected $fillable = ['nama_lengkap', 'nip', 'status_pegawai', 'id_jabatanstruktural', 'jenis_kelamin', 'ttl', 'gol_darah', 'status_perkawinan', 'agama', 'tinggi_badan', 'berat_badan', 'alamat'];

}
