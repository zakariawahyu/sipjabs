<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PegawaiDB extends Model
{
    public function getPegawai()
    {
        $query_status = DB::table('pegawai')
                            ->join('jabatan_struktural', 'pegawai.id_jabatanstruktural', '=', 'jabatan_struktural.id')
                            ->join('jabatan', 'jabatan_struktural.id_jabatan', '=', 'jabatan.id')
                            ->join('unit_bagian', 'jabatan_struktural.id_unitbagian', '=', 'unit_bagian.id')
                            ->paginate(9);
        if(count($query_status) > 0){
			return $query_status;
		}else{
			$query_status = '';
			return $query_status;
		}
    }

    public function getStatusPegawai(){	
		$query_status = DB::table('pegawai')->select('status_pegawai')->distinct()->get();
		return $query_status;
	}

    public function getFilteredPegawai($request)
    {
        $input = $request->all();

        $leveljabatan = $request->input('level');
        $masakerja = $request->input('masakerja');
        $show = $request->input('show');
        $order_by = $request->input('order_by');
        $statuspegawai = $request->input('status_pegawai');

        if ($order_by == 'asc') {
            $query = DB::table('pegawai')
                            ->join('jabatan_struktural', 'pegawai.id_jabatanstruktural', '=', 'jabatan_struktural.id')
                            ->join('jabatan', 'jabatan_struktural.id_jabatan', '=', 'jabatan.id')
                            ->join('unit_bagian', 'jabatan_struktural.id_unitbagian', '=', 'unit_bagian.id')
                            ->orderBy('pegawai.nama_lengkap', 'asc');
        } elseif ($order_by == 'desc') {
            $query = DB::table('pegawai')
                            ->join('jabatan_struktural', 'pegawai.id_jabatanstruktural', '=', 'jabatan_struktural.id')
                            ->join('jabatan', 'jabatan_struktural.id_jabatan', '=', 'jabatan.id')
                            ->join('unit_bagian', 'jabatan_struktural.id_unitbagian', '=', 'unit_bagian.id')
                            ->orderBy('pegawai.nama_lengkap', 'desc');
        } else{
            $query = DB::table('pegawai')
                            ->join('jabatan_struktural', 'pegawai.id_jabatanstruktural', '=', 'jabatan_struktural.id')
                            ->join('jabatan', 'jabatan_struktural.id_jabatan', '=', 'jabatan.id')
                            ->join('unit_bagian', 'jabatan_struktural.id_unitbagian', '=', 'unit_bagian.id');
        }

        

        if(isset($leveljabatan)) {
            $query->where('jabatan.level_jabatan', '<=', $leveljabatan);
        }

        if(isset($masakerja)) {
            $query->where('pegawai.masa_kerja', '>=', $masakerja);
        }

        if (isset($statuspegawai)) {
			$query->whereIn('pegawai.status_pegawai', $statuspegawai);
		}

        if (isset($show)) {
            $result = $query->paginate($show);
        }else{
            $result = $query->get();
        }

        

        

        if(count($result) > 0){
			return $result;
		}else{
			$result = '';
			return $result;
		}
    }


}
