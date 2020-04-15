<?php

use Illuminate\Database\Seeder;
use App\UnitKerja;
use Illuminate\Support\Facades\DB;

class UnitKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unit_kerja')->delete();

        UnitKerja::create([
        'nama_unitkerja' => 'Rektorat',
        ]);

        UnitKerja::create([
        'nama_unitkerja' => 'Direktorat Sekretariat dan Perencanaan Strategis',
        ]);

        UnitKerja::create([
        'nama_unitkerja' => 'Direktorat Akademik',
        ]);

        UnitKerja::create([
        'nama_unitkerja' => 'Direktorat Pasca Sarjana & Advance Learning',
        ]);

        UnitKerja::create([
        'nama_unitkerja' => 'Direktorat Logistik dan Aset',
        ]);

        UnitKerja::create([
        'nama_unitkerja' => 'Direktorat Keuangan',
        ]);

        UnitKerja::create([
        'nama_unitkerja' => 'Direktorat Sumber Daya Manusia',
        ]);

        UnitKerja::create([
        'nama_unitkerja' => 'Direktorat Pusat Teknologi Informasi',
        ]);

        UnitKerja::create([
        'nama_unitkerja' => 'Direktorat Pemasaran dan Admisi',
        ]);

        UnitKerja::create([
        'nama_unitkerja' => 'Direktorat Kemahasiswaan',
        ]);

        UnitKerja::create([
        'nama_unitkerja' => 'Direktorat Pengembangan Karir, Alumni dan Endowment',
        ]);

        UnitKerja::create([
        'nama_unitkerja' => 'Direktorat Penelitian dan Pengabdian Masyarakat',
        ]);

        UnitKerja::create([
        'nama_unitkerja' => 'Direktorat Kerjasama Strategis dan Kantor Urusan Internasional',
        ]);

        UnitKerja::create([
        'nama_unitkerja' => 'Direktorat Bandung Techno  Park',
        ]);

        UnitKerja::create([
        'nama_unitkerja' => 'Pusat Penelitian 1 (Public Policy)',
        ]);

        UnitKerja::create([
        'nama_unitkerja' => 'Pusat Penelitian 2 (Adwitech)',
        ]);

        UnitKerja::create([
        'nama_unitkerja' => 'Pusat Penelitian 3 (Tel-U IoT Center)',
        ]);

        UnitKerja::create([
        'nama_unitkerja' => 'Pusat Penelitian 4 (Center for Digital Business Ecosystem)',
        ]);

        UnitKerja::create([
        'nama_unitkerja' => 'Fakultas Teknik Elektro',
        ]);

        UnitKerja::create([
        'nama_unitkerja' => 'Fakultas Rekayasa Industri',
        ]);

        UnitKerja::create([
        'nama_unitkerja' => 'Fakultas Informatika',
        ]);

        UnitKerja::create([
        'nama_unitkerja' => 'Fakultas Ekonomi dan Bisnis',
        ]);

        UnitKerja::create([
        'nama_unitkerja' => 'Fakultas Komunikasi dan Bisnis',
        ]);

        UnitKerja::create([
        'nama_unitkerja' => 'Fakultas Industri Kreatif',
        ]);

        UnitKerja::create([
        'nama_unitkerja' => 'Fakultas Ilmu Terapan',
        ]);

    }
}
