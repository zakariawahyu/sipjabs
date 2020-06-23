<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Pegawai;
use App\Pendidikan;
use App\Skill;
use App\PersonalQuality;
use App\Jabatan;

class PegawaiDB extends Model
{
    public function getPegawai()
    {
        // untuk mengambil semua data pegawai
        $query_status = Pegawai::with(['riwayatpendidikan', 'riwayatpendidikan.pendidikan', 'jabatanstruktural', 
                                'jabatanstruktural.jabatan', 'jabatanstruktural.unitbagian', 'jabatanstruktural.unitkerja',
                                'skillpegawai', 'skillpegawai.skill'])
                                ->paginate(15, ['*'], 'page');

        if(count($query_status) > 0){
			return $query_status;
		}else{
			$query_status = '';
			return $query_status;
		}
    }

    public function getJabatan()
    {	
        // untuk mengambil data status pegawai
		$query_status = Jabatan::select('nama_jabatan')->get();
		return $query_status;
    }

    public function getStatusPegawai()
    {	
        // untuk mengambil data status pegawai
		$query_status = Pegawai::select('status_pegawai')->distinct()->get();
		return $query_status;
    }

    public function getMasakerja()
    {	
        // untuk mengambil data status pegawai
		$query_status = Pegawai::select('masa_kerja')->distinct()->get();
		return $query_status;
    }

    public function getKodeEtik()
    {	
        // untuk mengambil data status pegawai
		$query_status = Pegawai::select('kode_etik')->distinct()->get();
		return $query_status;
    }
    
    public function getDataJenjang()
    {
        // untuk mengambil data jenjang pendidikan
        $query_status = Pendidikan::select('jenjang_pendidikan')->distinct()->get();
        return $query_status;
    }

    public function getDataSkill()
    {
        // untuk mengambil data skill
        $query_status = Skill::select('nama_skill')->distinct()->get();
        return $query_status;
    }

   public function getDataPersonalQuality()
    {
        // untuk mengambil data personal quality
        $query_status = PersonalQuality::select('nama_personalquality')->distinct()->get();
        return $query_status;
    } 

    public function getDataJurusan()
    {
        // untuk mengambil data jenjang pendidikan
        $query_status = Pendidikan::select('jurusan')->distinct()->get();
        return $query_status;
    }

    public function getFilteredPegawai($request)
    {
        // mengambil data yang dikirim dari method GET
        $leveljabatan = $request->level;
        $masakerja = $request->masakerja;
        $show = $request->show;
        $order_by = $request->order_by;
        $statuspegawai = $request->status_pegawai;
        $jabatan = $request->jabatan;
        $jenjang = $request->jenjang;
        $jurusan = $request->jurusan;
        $skill = $request->skill;
        $personalquality = $request->personalquality;
        $kodeetik = $request->kode_etik;

        if ($order_by == 'asc')
        {
            // jika shorting asc
            $query = Pegawai::with(['riwayatpendidikan', 'riwayatpendidikan.pendidikan', 'jabatanstruktural', 
                                'jabatanstruktural.jabatan', 'jabatanstruktural.unitbagian', 'jabatanstruktural.unitkerja',
                                'skillpegawai', 'skillpegawai.skill'])
                                ->orderBy('pegawai.nama_lengkap', 'asc');

        } elseif ($order_by == 'desc')
        {
            // jika shorting desc 
            $query = Pegawai::with(['riwayatpendidikan', 'riwayatpendidikan.pendidikan', 'jabatanstruktural', 
                                'jabatanstruktural.jabatan', 'jabatanstruktural.unitbagian', 'jabatanstruktural.unitkerja',
                                'skillpegawai', 'skillpegawai.skill'])
                                ->orderBy('pegawai.nama_lengkap', 'desc');
        } else 
        {
            // jika tidak shorting
            $query = Pegawai::with(['riwayatpendidikan', 'riwayatpendidikan.pendidikan', 'jabatanstruktural', 
                                'jabatanstruktural.jabatan', 'jabatanstruktural.unitbagian', 'jabatanstruktural.unitkerja',
                                'skillpegawai', 'skillpegawai.skill']);
        }

        
        // query untuk filter level jabatan atau jabatan minimal pegawai
        if(isset($leveljabatan))
        {
            $query->whereHas('jabatanstruktural.jabatan', function($q) use($leveljabatan){
                    $q->where('level_jabatan', '>=', $leveljabatan);
                });
        }

        // query untuk filter jabatan atau jabatan minimal pegawai
        if(isset($jabatan))
        {
            $query->whereHas('jabatanstruktural.jabatan', function($q) use($jabatan){
                    $q->whereIn('nama_jabatan',  $jabatan);
                });
        }

        // query untuk filter minimal masa kerja pegawai
        if(isset($masakerja))
        {
            $query->where('masa_kerja', '>=', $masakerja);
        }

        // query untuk filter status pegawai
        if (isset($statuspegawai))
        {
			$query->whereIn('status_pegawai', $statuspegawai);
        }

        // query untuk filter status pegawai
        if (isset($kodeetik))
        {
			$query->whereIn('kode_etik', $kodeetik);
        }
        
        // query untuk filter jenjang pendidikan pegawai
        if (isset($jenjang))
        {
			$query->whereHas('riwayatpendidikan.pendidikan', function($q) use($jenjang){
                    $q->whereIn('jenjang_pendidikan', $jenjang);
                });
        }
        
        // query untuk filter jurusan pegawai
        if (isset($jurusan))
        {
			$query->whereHas('riwayatpendidikan.pendidikan', function($q) use($jurusan){
                    $q->whereIn('jurusan', $jurusan);
                });
		}

        // query untuk filter skill pegawai
        if (isset($skill))
        {
			$query->whereHas('skillpegawai.skill', function($q) use($skill){
                    $q->whereIn('nama_skill', $skill);
                });
        }

        // query untuk filter personalquality pegawai
        if (isset($personalquality))
        {
			$query->whereHas('personalquality.personalquality', function($q) use($personalquality){
                    $q->whereIn('nama_personalquality', $personalquality);
                });
        }
        
        // query untuk show
        if (isset($show))
        {
            $result = $query->paginate($show, ['*'], 'page');

        }else{

            $result = $query->paginate(14, ['*'], 'page');

        }
        
        // eksekusi semua query
        if(count($result) > 0)
        {
            return $result;
            
		}else{

			$result = '';
			return $result;
		}
    }
}
