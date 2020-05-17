<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    // nama field yang boleh di isi
    protected $fillable = ['id_user', 'id_pegawai', 'id_jabstruklama'];

    // one to one menghubungkan table cart dengan table pegawai
    public function pegawai()
    {
      return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }

    // one to one menghubungkan table cart dengan table jabatan struktural
    public function jabatanstruktural()
    {
      return $this->belongsTo(JabatanStruktural::class, 'id_jabstruklama');
    }

    public function getCart()
    {
        // untuk mengambil semua data pegawai
        $query_status = Cart::where('id_user', session('id'))->get();

        if(count($query_status) > 0){
			    return $query_status;
		    }else{
			    $query_status = '';
			    return $query_status;
		    }
    }
}
