<?php

use Illuminate\Database\Seeder;
use App\UnitBagian;
use Illuminate\Support\Facades\DB;

class UnitBagianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unit_bagian')->delete();

        UnitBagian::create([
        'nama_unitbagian' => 'Universitas Telkom',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Sekretariat dan Perencanaan Strategis',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Perencanaan, Pengembangan dan Pengendalian Institusi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Perencanaan dan Pengembangan Institusi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pengendalian dan Pelaporan Performansi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Satuan Penjamin Mutu',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Layanan dan Pengendalian Dokumen Mutu',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pengembangan Sistem Mutu',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Analis Mutu',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Sekretariat Pimpinan dan Hubungan Masyarakat (Secretariat & Public Relation)',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Hubungan Masyarakat (Public Relation)',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Sekretariat Pimpinan',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Legal',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Perikatan',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Settlement',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Satuan Audit Internal',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Audit dan Feedback',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Survey dan Analisis Data (Survey & Analytics)',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Monitoring dan Pelaporan',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Bidang Akademik',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Akademik',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Standar dan Layanan Akademik',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Administrasi Akademik',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Layanan dan Fasilitas',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pengembangan Mode, Standar dan Teknologi Pembelajaran',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pengembangan Pembelajaran, Kurikulum dan Student Internship',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pengembangan Kurikulum',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pengelolaan Mata Kuliah Universitas',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Magang dan Gladi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Open Library',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Administrasi dan Layanan Pustaka',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Database dan Pengembangan Pustaka',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pasca Sarjana & Advance Learning',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Layanan Center of E-Learning and Open Education',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Layanan Blended Learning & PJJ',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Layanan Open Education & Modular Learning',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pengembangan Content Center of E-Learning and Open Education',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pengembangan Produksi Content',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pengelolaan Fasilitas Produksi Content',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pasca Sarjana dan Kelas Internasional',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pasca Sarjana',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Kelas Internasional',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pusat Bahasa',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Administrasi dan Layanan Bahasa',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Database dan Pengembangan Bahasa',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Bidang Sumber Daya',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Logistik dan Aset',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pengadaan Logistik',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Rumah Tangga',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Logistik Fakultas',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pengendalian Pemanfaatan Aset',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pengelolaan Aset',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pemanfaatan Aset dan Ventura',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Keuangan',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Anggaran',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Anggaran Pendapatan',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Anggaran Beban',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Perbendaharaan',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Verifikasi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pengelolaan Kas',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Perpajakan dan Analisa',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Akutansi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pembukuan dan Pelaporan',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Layanan Keuangan Mahasiswa',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Sumber Daya Manusia (Human Capital Management)',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pengembangan',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Data, Perencanaan dan Performansi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pengembangan Karir',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pengembangan Kompetensi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pelayanan',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Rekruitasi dan Seleksi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Kompensasi dan Benefit',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Budaya dan Administrasi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pengembangan Budaya dan Spiritualitas Karyawan',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pusat Teknologi Informasi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Riset dan Layanan TI',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Manajemen Mutu TI (Quality Management)',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pengelolaan Konten dan Sumber Daya TI (Content & Resources Management)',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pengelolaan Konten',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pengelolaan dan Sumber Daya TI',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Layanan Pengguna',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Service Desk',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Riset TI',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Infrastruktur TI',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Infrastruktur Jaringan TI',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Network Engineer',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pusat Data',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'System Administrator',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Keamanan TI',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pengembangan Produk TI',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Analisa Sistem',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'System Analyst',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pengembangan Produk',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Front-End Programmer',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Thechnical Writer',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Back-End Programmer',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Quality Assurance',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pengelolaan Basis Data',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Data Management',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Bidang Admisi, Kemahasiswaan dan Alumni',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pemasaran dan Admisi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Admisi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Admisi Nasional',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Admisi Internasional, Pasca dan PJJ',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Marketing dan Pelaporan',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Marketing & Analyst',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pengelolaan Data dan Pelaporan',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Kemahasiswaan ',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pengelolaan Kegiatan dan Kesejahteraan Mahasiswa',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Kegiatan Mahasiswa',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Beasiswa dan Kesejahteraan Mahasiswa',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pengembangan Karakter',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pengembangan Karakter dan Kegiatan Asrama',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pembinaan Karakter, Softskill dan Attitude Mahasiswa',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Bimbingan dan Konseling Mahasiswa',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pengembangan Karir, Alumni dan Endowment',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pengembangan Karir',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pengembangan Karir dan Penyaluran Lulusan',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Hubungan Lembaga dan Tracer Study',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Alumni dan Endowment',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Urusan Alumni',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Urusan Endowment',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Bidang Riset, Inovasi dan Kerja Sama',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Penelitian dan Pengabdian Masyarakat',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Penelitian',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Data dan Keuangan',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Jurnal, Publikasi dan Pengabdian Masyarakat',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pengabdian Masyarakat',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Jurnal dan Publikasi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Kerja Sama Strategis dan Kantor Urusan Internasional',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Kerja Sama Strategis (Strategic Partnership)',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Kerja Sama Bisnis (Business Partnership)',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Kerja Sama Akademik (Academic Partnership)',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Kantor Urusan Internasional (International Office)',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'International Mobility',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Layanan Internasional (International Services)',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Bandung Techno Park',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Inovasi dan Inkubasi Bisnis',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Inkubasi Bisnis dan Entrepreneurship',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Inovasi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Layanan Tenant Support',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Finance & Support',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Logistic & Tenant Service',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pemasaran',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Account Manager',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Marketing Support',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Solusi Teknologi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Kekayaan Intelektual dan Transfer Teknologi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pusat Riset Kebijakan Publik dan Bisnis Telematika Informasi Komunikasi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pusat Riset Teknologi Nirkabel',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pusat Riset Telkom University of Things Center',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pusat Riset Center for Digital Business Ecosystem',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Fakultas Teknik Elektro',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Sekretariat',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Academic Reputation and Employer Reputation',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Bidang Akademik dan Dukungan Penelitian',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Akademik',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Laboratorium / Bengkel / Studio',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Bidang Keuangan, Sumber Daya dan Kemahasiswaan',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Keuangan dan Sumber Daya',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Kemahasiswaan ',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pembinaan Karakter, Softskill dan Attitude Mahasiswa',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S1 Teknik Telekomunikasi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S1 Teknik Telekomunikasi Internasional',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S1 Teknik Elektro',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S1 Teknik Komputer',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S1 Teknik Fisika',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S1 Teknik Biomedik',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S2 Teknik Elektro',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S2 PJJ Teknik Elektro',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Transmisi Telekomunikasi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Jaringan Multimedia',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Rekayasa Komputer',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Pengelolahan Sinyal Informasi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Sistem Elektronika',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Rekayasa Instrumentasi dan Energi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Fakultas Rekayasa Industri',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S1 Teknik Industri',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S1 Teknik Industri Internasional',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S1 Sistem Informasi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S1 Teknik Logistik',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S1 PJJ Sistem Informasi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S2 Teknik Industri',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S2 Sistem Informasi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'E-Process and Work System Optimization',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'E-Engineering Management',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'E-System Development',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'E-Solution and Assurance',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Fakultas Informatika',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S1 Informatika',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S1 Informatika Internasional',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S1 Rekayasa Perangkat Lunak',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S1 Teknologi Informasi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S1 PJJ Informatika',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S1 Data Science',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S2 Informatika',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S3 Informatika',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Intellegent, Computing and Multimedia',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Telematics',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Software Engineering,  Information System and Data Engineering',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Modeling and Computational Experiment',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Fakultas Ekonomi dan Bisnis',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S1 Manajemen Bisnis Telekomunikasi dan Informatika',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S1 Manajemen Bisnis Telekomunikasi dan Informatika Internasional',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S1 Akutansi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S2 Manajemen Bisnis Telekomunikasi dan Informatika',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S2 PJJ Manajemen Bisnis Telekomunikasi dan Informatika',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Strategy, Entrepreneurship and Economics',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'ICT Based Management',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Finance and Accounting Studies',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Fakultas Komunikasi dan Bisnis',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S1 Ilmu Komunikasi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S1 Administrasi Bisnis',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S1 Hubungan Masyarakat',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S1 Digital Broadcasting',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Entrepreneurship',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Business Policy and Strategy',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Communication Science and Broadcasting',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Public Relation and Marketing Communication',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Fakultas Industri Kreatif',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S1 Desain Komunikasi Visual',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S1 Desain Interior',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S1 Desain Produk',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S1 Kriya Tekstil dan Mode',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S1 Seni Rupa',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'S2 Desain',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Art Aesthetic and Practies',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Graphics dan Media Kreatif',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Visual Marketing and Design Management',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Lifestyle and Design Environment',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Fakultas Ilmu Terapan',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'D3 Sistem Informasi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'D3 Teknologi Komputer',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'D3 Sistem Informasi Akutansi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'D3 Teknologi Telekomunikasi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'D3 Rekayasa Perangkat Lunak Aplikasi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'D3 Manajemen Pemasaran',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'D3 Perhotelan',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'D4 Teknologi Rekayasa Multimedia',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Installation, Operation and Maintance of Telecomunication',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Interactive System',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'IT Governance and Enterprise System',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Sistem Informasi Akutansi',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Programming and Interactive Multimedia',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Commerce Management',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Embedded and Network System',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Kemahasiswaan dan Magang',
        ]);

        UnitBagian::create([
        'nama_unitbagian' => 'Magang',
        ]);
    }
}
