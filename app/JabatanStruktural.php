<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JabatanStruktural extends Model
{
    // one to one menghubungkan dari table jabatan_struktural dengan table jabatan
    public function jabatan()
    {
      return $this->belongsTo(Jabatan::class, 'id_jabatan');
    }

    // one to one menghubungkan dari table jabatan_struktural dengan table unit_kerja
    public function unitkerja()
    {
      return $this->belongsTo(UnitKerja::class, 'id_unitkerja');
    }

    // one to one menghubungkan dari table jabatan_struktural dengan table unit_bagian
    public function unitbagian()
    {
      return $this->belongsTo(UnitBagian::class, 'id_unitbagian');
    }

    // identifikasi nama table
    protected $table = 'jabatan_struktural';

    // nama field yang boleh di isi
    protected $fillable = ['id_unitkerja', 'id_jabatan', 'id_unitbagian', 'formasi_jabatan'];
}
