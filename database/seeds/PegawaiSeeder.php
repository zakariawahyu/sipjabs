<?php

use Illuminate\Database\Seeder;
use App\Pegawai;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawai')->delete();

        Pegawai::create([
        'nama_lengkap' => 'ADIWIJAYA',
        'nip' => '00740046',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '1',
        'jenis_kelamin' => 'L',
        'ttl' => 'Depok, 22/08/19/1974',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DADAN RAHADIAN',
        'nip' => '00680024',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '32',
        'jenis_kelamin' => 'L',
        'ttl' => 'Subang, 16/01/1977',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RINA DJUNITA PASARIBU',
        'nip' => '19650003',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '75',
        'jenis_kelamin' => 'P',
        'ttl' => 'Surakarta, 02/11/1976',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DIDA DIAH DAMAJANTI',
        'nip' => '94700007',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '150',
        'jenis_kelamin' => 'P',
        'ttl' => 'Jakarta, 19/05/1976',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RINA PUDJI ASTUTI',
        'nip' => '93630028',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '185',
        'jenis_kelamin' => 'P',
        'ttl' => 'Pekalongan, 11/03/1979',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ANISAH FIRLI',
        'nip' => '99750047',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '2',
        'jenis_kelamin' => 'P',
        'ttl' => 'Sukabumi, 13/07/1974',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RIO AURACHMAN',
        'nip' => '14890041',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '3',
        'jenis_kelamin' => 'L',
        'ttl' => 'Jember, 17/02/1980',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DEDE TARWIDI',
        'nip' => '14840039',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '4',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bayumas, 25/12/1992',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ROPIATU JALIAH',
        'nip' => '08860002',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '5',
        'jenis_kelamin' => 'L',
        'ttl' => 'Sukoharjo, 30/07/1994',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DENNY DARMAWAN PRIA UTAMA',
        'nip' => '14810048',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '6',
        'jenis_kelamin' => 'L',
        'ttl' => 'Garut, 21/03/1976',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ESTRI YANIARTI WIDYA',
        'nip' => '15880001',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '7',
        'jenis_kelamin' => 'P',
        'ttl' => 'Palembang, 04/05/1990',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NAZIAH AMALIA',
        'nip' => '18910023',
        'status_pegawai' => 'TPA PROFESIONAL FULL TIME',
        'id_jabatanstruktural' => '7',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bengkulu, 17/04/1995',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SAID AL FARABY',
        'nip' => '15890019',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '8',
        'jenis_kelamin' => 'L',
        'ttl' => 'Banjarmasir, 19/01/1982',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DARIS ROHMANSYAH MAULANA',
        'nip' => '15870090',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '9',
        'jenis_kelamin' => 'L',
        'ttl' => 'Lampung, 31/12/1987',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '166',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ADRIAN WIRANATA',
        'nip' => '15890007',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '10',
        'jenis_kelamin' => 'L',
        'ttl' => 'Asahan, 21/06/1993',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ABDULLAH ADNAN',
        'nip' => '18930088',
        'status_pegawai' => 'TPA PROFESIONAL FULL TIME',
        'id_jabatanstruktural' => '10',
        'jenis_kelamin' => 'L',
        'ttl' => 'Semarang, 03/08/1991',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ROOSDIANA NOOR ROCHMAH',
        'nip' => '12800063',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '11',
        'jenis_kelamin' => 'P',
        'ttl' => 'Demak, 14/04/1992',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DESSY INDAH NUR APIANI',
        'nip' => '19920010',
        'status_pegawai' => 'TPA PROFESIONAL FULL TIME',
        'id_jabatanstruktural' => '12',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bogor, 16/02/1994',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'MAHENDRA DWIFEBRI PURBOLAKSONO',
        'nip' => '18940072',
        'status_pegawai' => 'TPA PROFESIONAL FULL TIME',
        'id_jabatanstruktural' => '12',
        'jenis_kelamin' => 'L',
        'ttl' => 'Yogyakarta, 29/10/1997',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'KUS INDARWATI',
        'nip' => '92710018',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '12',
        'jenis_kelamin' => 'P',
        'ttl' => 'Jepara, 07/05/1996',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RETNO AYU RAMADHAYANTI',
        'nip' => '14880027',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '13',
        'jenis_kelamin' => 'P',
        'ttl' => 'Pasuruan, 15/05/1989',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '166',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'MEFTY SEPTIANI',
        'nip' => '15880063',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '14',
        'jenis_kelamin' => 'P',
        'ttl' => 'Sleman, 31/10/1990',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KATOLIK',
        'tinggi_badan' => '160',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DANIS KURNIAWAN',
        'nip' => '15850074',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '15',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bandung, 01/03/1991',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'KURNIAWAN EFFENDI',
        'nip' => '91700023',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '16',
        'jenis_kelamin' => 'L',
        'ttl' => 'Kediri, 29/07/1988',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'VITASARI SURANTI',
        'nip' => '14720005',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '17',
        'jenis_kelamin' => 'L',
        'ttl' => 'Semarang, 31/05/1990',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '166',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DJAKARIA',
        'nip' => '97720008',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '18',
        'jenis_kelamin' => 'L',
        'ttl' => 'Boyolali, 28/09/1993',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'IRNI YUNITA',
        'nip' => '14870053',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '20',
        'jenis_kelamin' => 'P',
        'ttl' => 'Jakarta, 03/01/1987',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '166',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'FARIDA SYAMSU',
        'nip' => '97700045',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '21',
        'jenis_kelamin' => 'P',
        'ttl' => 'Depok, 19/02/1988',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RADIFAN AHMAD HASBI',
        'nip' => '24581154',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '22',
        'jenis_kelamin' => 'L',
        'ttl' => 'Banten, 01/10/1995',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'GERAHADIAN REDHA',
        'nip' => '15830023',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '23',
        'jenis_kelamin' => 'L',
        'ttl' => 'Yogyakarta, 31/01/1889',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RINA PURWANTI',
        'nip' => '90690041',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '24',
        'jenis_kelamin' => 'P',
        'ttl' => 'Ciamis, 02/08/1992',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'WERIHISFENLI SARAGIH',
        'nip' => '18920113',
        'status_pegawai' => 'TPA PROFESIONAL FULL TIME',
        'id_jabatanstruktural' => '24',
        'jenis_kelamin' => 'L',
        'ttl' => 'Tasikmalaya, 24/03/1994',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'MOHAMAD SYAHRIAR SUGANDI',
        'nip' => '14800043',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '25',
        'jenis_kelamin' => 'L',
        'ttl' => 'Karanganyar, 30/09/1985',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '160',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RIAN FEBRIAN UMBARA',
        'nip' => '08820009',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '26',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bandung, 21/11/1987',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'IKA JULIYANTI',
        'nip' => '15920032',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '27',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bekasi, 05/12/1994',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'MUHAMMAD ADHAN ZULHADI',
        'nip' => '23152145',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '27',
        'jenis_kelamin' => 'L',
        'ttl' => 'Jakarta, 10/01/1993',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ROSWAN LATUCONSINA',
        'nip' => '14780013',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '28',
        'jenis_kelamin' => 'L',
        'ttl' => 'Klaten, 20/09/1986',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '166',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'MUSRIADI',
        'nip' => '23584125',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '29',
        'jenis_kelamin' => 'L',
        'ttl' => 'Pasuruan, 15/06/1988',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '165',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'IROD',
        'nip' => '90650028',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '29',
        'jenis_kelamin' => 'L',
        'ttl' => 'Cianjur, 07/09/1991',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NOOR AINI ANGGOROWATI',
        'nip' => '97690034',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '30',
        'jenis_kelamin' => 'P',
        'ttl' => 'Garut, 17/02/1987',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ISTY DELA LUTHFIA',
        'nip' => '15870064',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '31',
        'jenis_kelamin' => 'P',
        'ttl' => 'Kebumen, 01/06/1994',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ARFIANTO FAHMI',
        'nip' => '99750021',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '33',
        'jenis_kelamin' => 'L',
        'ttl' => 'Cirebon, 02/05/1974',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NURUL FITRIA',
        'nip' => '02810033',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '34',
        'jenis_kelamin' => 'P',
        'ttl' => 'Semarang, 19/09/1979',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'FITRI SUMIELVIA DEWI',
        'nip' => '01770049',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '35',
        'jenis_kelamin' => 'P',
        'ttl' => 'Garut, 09/04/1988',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '166',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ANDI TRI CHRISMA',
        'nip' => '95690052',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '36',
        'jenis_kelamin' => 'L',
        'ttl' => 'Yogyakarta, 01/01/1990',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'CEPI AFFANDI',
        'nip' => '15740034',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '36',
        'jenis_kelamin' => 'L',
        'ttl' => 'Karawang, 07/12/1989',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '160',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'OKTARIYANI UTAMI PUTRI',
        'nip' => '15920048',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '36',
        'jenis_kelamin' => 'P',
        'ttl' => 'Kudus, 17/03/1993',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RIZKI AFIF FINATA',
        'nip' => '11870052',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '37',
        'jenis_kelamin' => 'L',
        'ttl' => 'Indramayu, 21/11/1983',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '166',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RUHIAT',
        'nip' => '97660009',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '38',
        'jenis_kelamin' => 'L',
        'ttl' => 'Majalengka, 15/08/1994',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AGUS MULYANA',
        'nip' => '20105153',
        'status_pegawai' => 'TENAGA OUTSOURCE',
        'id_jabatanstruktural' => '38',
        'jenis_kelamin' => 'L',
        'ttl' => 'Banten, 11/01/1989',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AGUS ROHIMAT',
        'nip' => '20101621',
        'status_pegawai' => 'TENAGA OUTSOURCE',
        'id_jabatanstruktural' => '38',
        'jenis_kelamin' => 'L',
        'ttl' => 'Majalengka, 19/09/1990',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DODY PRIHATNA',
        'nip' => '20107720',
        'status_pegawai' => 'TENAGA OUTSOURCE',
        'id_jabatanstruktural' => '38',
        'jenis_kelamin' => 'L',
        'ttl' => 'Pati, 27/05/1990',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SRIYANTANI',
        'nip' => '14940305',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '39',
        'jenis_kelamin' => 'P',
        'ttl' => 'Lumajang, 16/09/1985',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ADAM MAZAR',
        'nip' => '25215678',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '40',
        'jenis_kelamin' => 'L',
        'ttl' => 'Purwakarta, 19/10/1990',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ENDANG BUDIASIH',
        'nip' => '93660019',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '41',
        'jenis_kelamin' => 'P',
        'ttl' => 'Klaten, 07/02/1977',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '166',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'FITRI SUSANTI',
        'nip' => '09840040',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '42',
        'jenis_kelamin' => 'P',
        'ttl' => 'Purbolinggo, 22/05/1982',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DELIS PERMATA SARI',
        'nip' => '15920004',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '43',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bandung, 27/05/1992',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'GAGAN SUKMARA',
        'nip' => '91680028',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '43',
        'jenis_kelamin' => 'L',
        'ttl' => 'Cimahi, 01/02/1990',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AGUS DWI PRASETYO',
        'nip' => '14850066',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '44',
        'jenis_kelamin' => 'L',
        'ttl' => 'Cirebon, 11/06/1983',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ENJANG SUPRIATNA',
        'nip' => '20278212',
        'status_pegawai' => 'TENAGA OUTSOURCE',
        'id_jabatanstruktural' => '45',
        'jenis_kelamin' => 'L',
        'ttl' => 'Purwakarta, 19/12/1992',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'BUDI HASNO',
        'nip' => '14923570',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '46',
        'jenis_kelamin' => 'L',
        'ttl' => 'Sukabumi, 25/11/1989',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '166',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ZULFI HASAN',
        'nip' => '25443678',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '47',
        'jenis_kelamin' => 'L',
        'ttl' => 'Purworejo, 30/08/1991',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DADI ISMANTO',
        'nip' => '97720018',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '48',
        'jenis_kelamin' => 'L',
        'ttl' => 'Sukoharjo, 31/03/1980',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '166',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SITI MINTARSIH OKTRIANTI',
        'nip' => '93660036',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '49',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bandung, 17/10/1985',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'LUSI SATIA RAHMAWATI',
        'nip' => '15870036',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '50',
        'jenis_kelamin' => 'P',
        'ttl' => 'Sukabumi, 03/06/1995',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '166',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'IRMA SARI RAHAYU',
        'nip' => '12810074',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '50',
        'jenis_kelamin' => 'P',
        'ttl' => 'Depok, 10/03/1990',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DIDIN NURYANUDDIN',
        'nip' => '93740047',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '50',
        'jenis_kelamin' => 'L',
        'ttl' => 'Jakarta, 22/01/1993',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '166',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'FAJAR HARDIANA',
        'nip' => '15880015',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '50',
        'jenis_kelamin' => 'L',
        'ttl' => 'Banten, 17/10/1994',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'WULANDARI',
        'nip' => '15900041',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '50',
        'jenis_kelamin' => 'P',
        'ttl' => 'Rembang, 16/07/1992',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RIKA YULIANT',
        'nip' => '69545236',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '51',
        'jenis_kelamin' => 'P',
        'ttl' => 'Cilacap, 22/06/1983',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KATOLIK',
        'tinggi_badan' => '162',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'JENG AYU NING TYAS',
        'nip' => '15880067',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '52',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bengkulu, 17/07/1990',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '166',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'OBI ZAKARIA',
        'nip' => '12840014',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '52',
        'jenis_kelamin' => 'L',
        'ttl' => 'Lampung, 01/11/1992',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '166',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DEDI SUPRIADI',
        'nip' => '91670029',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '52',
        'jenis_kelamin' => 'L',
        'ttl' => 'Surakarta, 07/04/1994',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'YUDHI NUGROHO ADI',
        'nip' => '15890070',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '52',
        'jenis_kelamin' => 'L',
        'ttl' => 'Sragen, 13/12/1993',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'FETTY POERWITA SARY',
        'nip' => '08780003',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '53',
        'jenis_kelamin' => 'P',
        'ttl' => 'Klaten, 04/05/1972',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '165',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'HERIYONO LALU',
        'nip' => '07800069',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '54',
        'jenis_kelamin' => 'L',
        'ttl' => 'Sleman, 01/02/1975',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'GEDE AGUNG ARY WISUDIAWAN',
        'nip' => '14870024',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '55',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bengkulu, 22/09/1979',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ANI LISYANI',
        'nip' => '11770030',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '56',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bekasi, 19/01/1982',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'MUHAMAD BAMBANG HIDAYANTO',
        'nip' => '15900033',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '56',
        'jenis_kelamin' => 'L',
        'ttl' => 'Tegal, 02/05/1984',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RINI HANDAYANI',
        'nip' => '14860088',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '57',
        'jenis_kelamin' => 'P',
        'ttl' => 'Kediri, 26/11/1981',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KATOLIK',
        'tinggi_badan' => '160',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'CACA SUKMA SAEFUL HIDAYAT',
        'nip' => '19840006',
        'status_pegawai' => 'TPA CALON PEGAWAI TETAP',
        'id_jabatanstruktural' => '58',
        'jenis_kelamin' => 'P',
        'ttl' => 'Ciamis, 11/07/1984',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RETNO HENDRIYANTI',
        'nip' => '99740041',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '59',
        'jenis_kelamin' => 'P',
        'ttl' => 'Tasikmalaya, 17/09/1977',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'PUTRI APRIANI ISKANDAR',
        'nip' => '12880026',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '60',
        'jenis_kelamin' => 'P',
        'ttl' => 'Yogyakarta, 13/12/1980',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '166',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'YANTO NUGRAHA',
        'nip' => '15870078',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '61',
        'jenis_kelamin' => 'L',
        'ttl' => 'Karangasem, 18/10/1985',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'YELLY ANDRIANI BARLIAN',
        'nip' => '17770082',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '62',
        'jenis_kelamin' => 'P',
        'ttl' => 'Wonosobo, 08/01/1982',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'MOCHAMAD FAJAR AKBAR',
        'nip' => '15890071',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '63',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bekasi, 27/06/1984 ',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'MUHAMMAD AZANI HASIBUAN',
        'nip' => '14850055',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '64',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bandung, 20/10/1976',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'CUT IRNA SETIAWATI',
        'nip' => '14900030',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '65',
        'jenis_kelamin' => 'P',
        'ttl' => 'Depok, 29/04/1979',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RINA NASTANI',
        'nip' => '25455678',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '66',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bekasi, 07/02/1985',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'FATHAH NOOR PRAWITA',
        'nip' => '14840024',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '67',
        'jenis_kelamin' => 'L',
        'ttl' => 'Magelang, 01/06/1978',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'GUMILANG ANGGUN',
        'nip' => '18920114',
        'status_pegawai' => 'TPA PROFESIONAL FULL TIME',
        'id_jabatanstruktural' => '68',
        'jenis_kelamin' => 'L',
        'ttl' => 'Jakarta, 11/07/1983',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RITA DESTIWATI',
        'nip' => '14720063',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '69',
        'jenis_kelamin' => 'P',
        'ttl' => 'Asahan, 17/11/1976',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ABDULLAH GANDI',
        'nip' => '21314597',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '70',
        'jenis_kelamin' => 'L',
        'ttl' => 'Rembang, 02/08/1979',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AKBAR GINTING',
        'nip' => '65854234',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '71',
        'jenis_kelamin' => 'L',
        'ttl' => 'Jembrana, 28/04/1983',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '166',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'JOKO SISWONO',
        'nip' => '45467757',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '72',
        'jenis_kelamin' => 'L',
        'ttl' => 'Kediri, 21/08/1980',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ANISTYA RACHMAWATI',
        'nip' => '15880062',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '73',
        'jenis_kelamin' => 'P',
        'ttl' => 'Salatiga, 02/03/1985',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AAM FIRDAUS RIDWAN',
        'nip' => '19860012',
        'status_pegawai' => 'TPA CALON PEGAWAI TETAP',
        'id_jabatanstruktural' => '73',
        'jenis_kelamin' => 'L',
        'ttl' => 'Tabanan, 18/12/1988',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'MUCHAMAD RAMDANI',
        'nip' => '15860044',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '74',
        'jenis_kelamin' => 'L',
        'ttl' => 'Garut, 23/03/1987',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '166',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'QISTI TRIANI',
        'nip' => '17880111',
        'status_pegawai' => 'TPA PROFESIONAL FULL TIME',
        'id_jabatanstruktural' => '74',
        'jenis_kelamin' => 'P',
        'ttl' => 'Pekalongan, 11/06/1987',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '160',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NURWIDJAJADI',
        'nip' => '16730066',
        'status_pegawai' => 'TPA PERBANTUAN TELKOM',
        'id_jabatanstruktural' => '76',
        'jenis_kelamin' => 'P',
        'ttl' => 'Semarang, 07/12/1974',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AGUS GOUSUR ALAM',
        'nip' => '17730077',
        'status_pegawai' => 'TPA PERBANTUAN TELKOM',
        'id_jabatanstruktural' => '77',
        'jenis_kelamin' => 'L',
        'ttl' => 'Sukoharjo, 10/04/1976',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '166',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DANI KURWENDI',
        'nip' => '90640036',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '78',
        'jenis_kelamin' => 'L',
        'ttl' => 'Tasikmalaya, 11/07/1979',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DENI SUPRATMAN',
        'nip' => '01760031',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '79',
        'jenis_kelamin' => 'L',
        'ttl' => 'Asahan, 30/11/1982',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ENANG SUMINTA',
        'nip' => '01700025',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '79',
        'jenis_kelamin' => 'L',
        'ttl' => 'Pekalongan, 15/03/1987',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'HILMAN ROSYIDI',
        'nip' => '15890052',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '79',
        'jenis_kelamin' => 'L',
        'ttl' => 'Sragen, 02/11/1992',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'REZA PRAMITA',
        'nip' => '11800030',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '80',
        'jenis_kelamin' => 'L',
        'ttl' => 'Jombang, 12/05/1978',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'BAMBANG HERYAWAN',
        'nip' => '92690009',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '81',
        'jenis_kelamin' => 'L',
        'ttl' => 'Karangasem, 09/08/1992',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SALIM SANTOSA',
        'nip' => '91720031',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '81',
        'jenis_kelamin' => 'L',
        'ttl' => 'Jakarta, 01/06/1991',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DEDE RAHMAT',
        'nip' => '91640001',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '82',
        'jenis_kelamin' => 'L',
        'ttl' => 'Subang, 04/08/1990',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SOLEH HIDAYAT',
        'nip' => '01740040',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '82',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bandung, 17/11/1983',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '166',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RUSLI',
        'nip' => '03710034',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '82',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bandung, 19/06/1987',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SAPTO PAMUNGKAS',
        'nip' => '01680035',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '82',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bekasi, 02/03/1990',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ANIM',
        'nip' => '01750048',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '82',
        'jenis_kelamin' => 'L',
        'ttl' => 'Sukoharjo, 19/04/1987',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AANG SAEFUL ANWAR',
        'nip' => '01730036',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '82',
        'jenis_kelamin' => 'L',
        'ttl' => 'Demak, 27/01/1988',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '166',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AJI SUHENDAR',
        'nip' => '03710046',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '82',
        'jenis_kelamin' => 'L',
        'ttl' => 'Sumedang, 31/12/1994',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ARIS HARTAMAN',
        'nip' => '27700045',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '83',
        'jenis_kelamin' => 'L',
        'ttl' => 'Cimahi, 03/09/1978',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'IRMAN NOORMANSYAH',
        'nip' => '96720060',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '84',
        'jenis_kelamin' => 'L',
        'ttl' => 'Blitar, 18/02/1978',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RANGGA SOMAWINATA',
        'nip' => '15830042',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '85',
        'jenis_kelamin' => 'L',
        'ttl' => 'Karangasem, 11/05/1992',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '166',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DARANSYAH',
        'nip' => '01710033',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '85',
        'jenis_kelamin' => 'L',
        'ttl' => 'Depok, 21/02/1990',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ELIN NISA ISTIQOMAH',
        'nip' => '20119209',
        'status_pegawai' => 'TENAGA OUTSOURCE',
        'id_jabatanstruktural' => '85',
        'jenis_kelamin' => 'P',
        'ttl' => 'Asahan, 08/05/1995',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'HARTONO',
        'nip' => '17200506',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '85',
        'jenis_kelamin' => 'L',
        'ttl' => 'Depok, 04/09/1990',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NENDI YULIANDI HENDIAWAN',
        'nip' => '01750026',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '85',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bojonegoro, 24/12/1993',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'GINA GONIAH',
        'nip' => '15890069',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '86',
        'jenis_kelamin' => 'P',
        'ttl' => 'Pekalongan, 18/10/1979',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SYUKRON MAMUN',
        'nip' => '03770067',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '87',
        'jenis_kelamin' => 'L',
        'ttl' => 'Banjarmasir, 08/07/1992',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'JUANDA',
        'nip' => '03760008',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '87',
        'jenis_kelamin' => 'L',
        'ttl' => 'Garut, 19/04/1993',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SETIYONO',
        'nip' => '20373061',
        'status_pegawai' => 'TENAGA OUTSOURCE',
        'id_jabatanstruktural' => '87',
        'jenis_kelamin' => 'L',
        'ttl' => 'Blitar, 07/01/1994',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'JEFFRY HASIBUAN',
        'nip' => '17670050',
        'status_pegawai' => 'TPA PERBANTUAN TELKOM',
        'id_jabatanstruktural' => '88',
        'jenis_kelamin' => 'L',
        'ttl' => 'Magelang, 29/04/1973',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SAPUTRO',
        'nip' => '92660026',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '89',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bengkulu, 02/01/1976',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RASWYSHNOE BOING KOTJOPRAYUDI',
        'nip' => '10790005',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '90',
        'jenis_kelamin' => 'L',
        'ttl' => 'Jember, 22/10/1980',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NURAISYAH DIAN SARI',
        'nip' => '17930056',
        'status_pegawai' => 'TPA CALON PEGAWAI TETAP',
        'id_jabatanstruktural' => '91',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bondowoso, 08/07/1984',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'BUWANA PUTRI',
        'nip' => '23654184',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '92',
        'jenis_kelamin' => 'P',
        'ttl' => 'Trenggalek, 11/03/1984',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ABDIAWIPA ROFADALINY',
        'nip' => '19930029',
        'status_pegawai' => 'TPA CALON PEGAWAI TETAP',
        'id_jabatanstruktural' => '93',
        'jenis_kelamin' => 'L',
        'ttl' => 'Karangasem, 07/12/1987',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'APRIANI MUSFIROH',
        'nip' => '96740014',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '94',
        'jenis_kelamin' => 'L',
        'ttl' => 'Gresik, 30/10/1976',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'TIENE YANIWATI',
        'nip' => '90710002',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '95',
        'jenis_kelamin' => 'P',
        'ttl' => 'Garut, 24/04/1985',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'BADRUDIN',
        'nip' => '03680009',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '96',
        'jenis_kelamin' => 'L',
        'ttl' => 'Asahan, 02/07/1988',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AI KARLINA',
        'nip' => '17930054',
        'status_pegawai' => 'TPA PROFESIONAL FULL TIME',
        'id_jabatanstruktural' => '96',
        'jenis_kelamin' => 'P',
        'ttl' => 'Klaten, 03/02/1986',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'MEITHANITA DENANDA',
        'nip' => '19910016',
        'status_pegawai' => 'TPA CALON PEGAWAI TETAP',
        'id_jabatanstruktural' => '96',
        'jenis_kelamin' => 'P',
        'ttl' => 'Lampung, 19/08/1988',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NURLAELA',
        'nip' => '14740029',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '97',
        'jenis_kelamin' => 'P',
        'ttl' => 'Sukoharjo, 17/06/1983',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ENI ROHAENI',
        'nip' => '93720011',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '98',
        'jenis_kelamin' => 'P',
        'ttl' => 'Banyuwangi, 27/11/1985',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'TITA OKTORA',
        'nip' => '15870081',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '98',
        'jenis_kelamin' => 'P',
        'ttl' => 'Jakarta, 04/01/1985',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KATOLIK',
        'tinggi_badan' => '165',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'PURI INDAH JAYA',
        'nip' => '20314685',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '99',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bandung, 18/08/1981',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AJAT SUDRAJAT',
        'nip' => '02712048',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '100',
        'jenis_kelamin' => 'L',
        'ttl' => 'Lampung, 02/05/1985',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'PUTRI CITRA PERTIWI',
        'nip' => '02770048',
        'status_pegawai' => 'TPA PROFESIONAL FULL TIME',
        'id_jabatanstruktural' => '100',
        'jenis_kelamin' => 'P',
        'ttl' => 'Sumedang, 07/03/1987',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'MUHAMMAD MUHAEMIN',
        'nip' => '11830008',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '101',
        'jenis_kelamin' => 'L',
        'ttl' => 'Asahan, 26/06/1977',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NURBAYA SURLI',
        'nip' => '20214523',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '102',
        'jenis_kelamin' => 'P',
        'ttl' => 'Majalengka, 07/09/1982',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AHMAD FAUZAN',
        'nip' => '15890017',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '103',
        'jenis_kelamin' => 'L',
        'ttl' => 'Karangasem, 30/05/1988',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ANDINA PUSPITA',
        'nip' => '15870086',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '103',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bangkalan, 10/09/1986',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'TRISYE RATNASARI OCTAVIANY',
        'nip' => '07810042',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '104',
        'jenis_kelamin' => 'P',
        'ttl' => 'Malang, 19/02/1986',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'KATOLIK',
        'tinggi_badan' => '160',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AGUNG ABDIRAHMAN',
        'nip' => '15900023',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '105',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bengkulu, 01/12/1987',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'KIKI SUDIANA',
        'nip' => '12720026',
        'status_pegawai' => 'DOSEN PERBANTUAN TELKOM',
        'id_jabatanstruktural' => '106',
        'jenis_kelamin' => 'L',
        'ttl' => 'Tasikmalaya, 18/01/1974',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RIDWAN PURWANADITA',
        'nip' => '12850036',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '107',
        'jenis_kelamin' => 'L',
        'ttl' => 'Yogyakarta, 31/07/1976',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NATHALEO MICHEL APON',
        'nip' => '12830063',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '108',
        'jenis_kelamin' => 'L',
        'ttl' => 'Jember, 31/05/1975',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AYU CENDRAKASIH',
        'nip' => '15930012',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '109',
        'jenis_kelamin' => 'P',
        'ttl' => 'Kediri, 30/11/1978',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'MANGGARA CAHAYA YUDHA',
        'nip' => '07840070',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '110',
        'jenis_kelamin' => 'L',
        'ttl' => 'Karangasem, 19/02/1976',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'EUGENIUS TEJO SUKMOJATI',
        'nip' => '15880034',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '111',
        'jenis_kelamin' => 'L',
        'ttl' => 'Asahan, 30/05/1979',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '168',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'FIERA WARDHANI GLADISA',
        'nip' => '14880060',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '112',
        'jenis_kelamin' => 'P',
        'ttl' => 'Depok, 22/06/1977',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ASEP TARYANA',
        'nip' => '93710030',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '113',
        'jenis_kelamin' => 'L',
        'ttl' => 'Banten, 14/04/1979',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AULIA FITRAH FAJRIANI',
        'nip' => '19910014',
        'status_pegawai' => 'TPA CALON PEGAWAI TETAP',
        'id_jabatanstruktural' => '113',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bekasi, 02/09/1980',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'HETTI HIDAYATI',
        'nip' => '06750056',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '114',
        'jenis_kelamin' => 'P',
        'ttl' => 'Jombang, 20/02/1977',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SITI SAADAH',
        'nip' => '13860014',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '115',
        'jenis_kelamin' => 'P',
        'ttl' => 'Jakarta, 17/12/1975',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'EVA NURHAZIZAH',
        'nip' => '15890044',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '116',
        'jenis_kelamin' => 'P',
        'ttl' => 'Klaten, 11/01/1978',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'WAWAN HERMAWAN',
        'nip' => '93740013',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '116',
        'jenis_kelamin' => 'L',
        'ttl' => 'Asahan, 03/03/1977',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RAHMA WIDIYANTI',
        'nip' => '91650019',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '117',
        'jenis_kelamin' => 'P',
        'ttl' => 'Yogyakarta, 14/05/1979',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NURHASANAH',
        'nip' => '02780002',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '118',
        'jenis_kelamin' => 'P',
        'ttl' => 'Kediri, 29/08/1980',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'GUSTMA  PUTRA',
        'nip' => '25413258',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '119',
        'jenis_kelamin' => 'L',
        'ttl' => 'Banten, 10/10/1976',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AZHAR KHARISMA MUHAMMAD',
        'nip' => '18910122',
        'status_pegawai' => 'TPA PROFESIONAL FULL TIME',
        'id_jabatanstruktural' => '120',
        'jenis_kelamin' => 'L',
        'ttl' => 'Banyuwangi, 21/06/',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DELLANI WULANDARI',
        'nip' => '19940018',
        'status_pegawai' => 'TPA CALON PEGAWAI TETAP',
        'id_jabatanstruktural' => '121',
        'jenis_kelamin' => 'P',
        'ttl' => 'Karangasem, 11/03/',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DADANG SETIAWAN',
        'nip' => '16730068',
        'status_pegawai' => 'TPA PERBANTUAN TELKOM',
        'id_jabatanstruktural' => '122',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bandung, 30/01/1973',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'MAYA SETYAWATI',
        'nip' => '93710016',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '123',
        'jenis_kelamin' => 'P',
        'ttl' => 'Garut, 31/05/1975',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ZAKARYA ',
        'nip' => '23154875',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '124',
        'jenis_kelamin' => 'L',
        'ttl' => 'Lamongan, 14/09/1977',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'FADHLULLOH BAGAS SAMUDRA',
        'nip' => '19930026',
        'status_pegawai' => 'TPA CALON PEGAWAI TETAP',
        'id_jabatanstruktural' => '125',
        'jenis_kelamin' => 'L',
        'ttl' => 'Cimahi, 24/11/1980',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'LUKMAN ARIFIN',
        'nip' => '15910002',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '125',
        'jenis_kelamin' => 'L',
        'ttl' => 'Tasikmalaya, 11/02/1982',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NUR ANGGOROWATI',
        'nip' => '01800001',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '126',
        'jenis_kelamin' => 'P',
        'ttl' => 'Madiun, 19/04/1978',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ANDARTYA SETYAWAN DARNA',
        'nip' => '15900034',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '127',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bogor, 11/10/1980',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ARIO HARRY PRAYOGO',
        'nip' => '19920026',
        'status_pegawai' => 'TPA CALON PEGAWAI TETAP',
        'id_jabatanstruktural' => '128',
        'jenis_kelamin' => 'L',
        'ttl' => 'Depok, 29/05/1981',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ASIH MARGIYATI',
        'nip' => '93730056',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '129',
        'jenis_kelamin' => 'P',
        'ttl' => 'Lumajang, 10/07/1978',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NURUL HIDAYATI',
        'nip' => '14910041',
        'status_pegawai' => 'TPA PROFESIONAL FULL TIME',
        'id_jabatanstruktural' => '130',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bandung, 18/08/1981',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'INDRI DWI RETNO',
        'nip' => '54213484',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '130',
        'jenis_kelamin' => 'P',
        'ttl' => 'Sumedang, 23/01/1981',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NURJAYANTI',
        'nip' => '19920020',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '131',
        'jenis_kelamin' => 'P',
        'ttl' => 'Asahan, 20/03/1976',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DZINIJAWAHIR LABIB',
        'nip' => '54378142',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '132',
        'jenis_kelamin' => 'L',
        'ttl' => 'Karangasem, 27/05/1978',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'WIDI TRI YUWONO',
        'nip' => '08850046',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '133',
        'jenis_kelamin' => 'L',
        'ttl' => 'Sumedang, 01/04/1974',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'MOCHAMMAD FAHRU RIZAL',
        'nip' => '14830053',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '134',
        'jenis_kelamin' => 'L',
        'ttl' => 'Subang, 14/02/1975',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'CAESAREANO LAFADO YESA',
        'nip' => '15890076',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '135',
        'jenis_kelamin' => 'L',
        'ttl' => 'Karangasem, 30/06/1978',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'HANANG PRIAMBODO',
        'nip' => '15910026',
        'status_pegawai' => 'TPA PROFESIONAL FULL TIME',
        'id_jabatanstruktural' => '135',
        'jenis_kelamin' => 'L',
        'ttl' => 'Malang, 09/10/1978',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RYAN LINGGA WICAKSONO',
        'nip' => '15930004',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '135',
        'jenis_kelamin' => 'L',
        'ttl' => 'Jakarta, 01/06/1980',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'TUNTUN ADITARA MAHARTA',
        'nip' => '16920043',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '135',
        'jenis_kelamin' => 'L',
        'ttl' => 'Jakarta, 29/03/1983',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ABID TOMMY WASITO',
        'nip' => '15900047',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '135',
        'jenis_kelamin' => 'L',
        'ttl' => 'Asahan, 25/10/1980',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ANNIS WAZIROH',
        'nip' => '15920001',
        'status_pegawai' => 'TPA PROFESIONAL FULL TIME',
        'id_jabatanstruktural' => '135',
        'jenis_kelamin' => 'P',
        'ttl' => 'Cilacap, 16/02/1981',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ARI ARJUNALDI',
        'nip' => '15860050',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '135',
        'jenis_kelamin' => 'L',
        'ttl' => 'Cimahi, 17/06/1982',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'PAHALAWANTI',
        'nip' => '02780058',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '136',
        'jenis_kelamin' => 'P',
        'ttl' => 'Kediri, 01/11/1977',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'BQ DESY HARDIANTI',
        'nip' => '15900048',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '137',
        'jenis_kelamin' => 'P',
        'ttl' => 'Mojokerto, 30/09/1980',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'FEDDY DEA RESKYADITA',
        'nip' => '15860071',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '137',
        'jenis_kelamin' => 'P',
        'ttl' => 'Magetan, 23/02/1983',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '168',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'HERDIAN WAHID',
        'nip' => '75797246',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '138',
        'jenis_kelamin' => 'L',
        'ttl' => 'Brebes, 03/08/1978',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DIAN HERYANA',
        'nip' => '76755453',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '139',
        'jenis_kelamin' => 'P',
        'ttl' => 'Jombang, 29/01/1981',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DAHLIAR ANANDA',
        'nip' => '09820030',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '140',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bengkulu, 26/03/1975',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'HILFAN SOELTANSYAH',
        'nip' => '11790032',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '141',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bengkulu, 19/11/1977',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ALIFAH DESTIANASARI',
        'nip' => '19861513',
        'status_pegawai' => 'TPA CALON PEGAWAI TETAP',
        'id_jabatanstruktural' => '142',
        'jenis_kelamin' => 'P',
        'ttl' => 'Nganjuk, 11/07/1979',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ZAID MUSTOFA',
        'nip' => '26449136',
        'status_pegawai' => 'TENAGA OUTSOURCE',
        'id_jabatanstruktural' => '142',
        'jenis_kelamin' => 'L',
        'ttl' => 'Garut, 08/12/1980',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AMINATUS SADIYAH',
        'nip' => '15910039',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '142',
        'jenis_kelamin' => 'L',
        'ttl' => 'Karangasem, 22/10/1982',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'YOGA DANA',
        'nip' => '65231479',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '143',
        'jenis_kelamin' => 'L',
        'ttl' => 'Purwodadi, 19/03/1978',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'LELY NOOR FATIMAH',
        'nip' => '76797543',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '144',
        'jenis_kelamin' => 'P',
        'ttl' => 'Depok, 03/11/1984',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SAKTI PUTRO WISETYO',
        'nip' => '15870019',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '144',
        'jenis_kelamin' => 'L',
        'ttl' => 'Pacitan, 18/07/1984',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ZEHAN TRIARTONO',
        'nip' => '19930024',
        'status_pegawai' => 'TPA CALON PEGAWAI TETAP',
        'id_jabatanstruktural' => '145',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bekasi, 13/12/1985',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AMIRA NUR KHALIPAH',
        'nip' => '19940020',
        'status_pegawai' => 'TPA CALON PEGAWAI TETAP',
        'id_jabatanstruktural' => '146',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bekasi, 01/09/1983',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RANITA WINDRIANI',
        'nip' => '19950018',
        'status_pegawai' => 'TPA CALON PEGAWAI TETAP',
        'id_jabatanstruktural' => '146',
        'jenis_kelamin' => 'P',
        'ttl' => 'Ngawi, 12/10/1984',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'UTAMI KUSUMA DEWI',
        'nip' => '19950016',
        'status_pegawai' => 'TPA CALON PEGAWAI TETAP',
        'id_jabatanstruktural' => '147',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bandung, 14/04/1983',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RIKY FAZA',
        'nip' => '16830030',
        'status_pegawai' => 'TPA PROFESIONAL FULL TIME',
        'id_jabatanstruktural' => '147',
        'jenis_kelamin' => 'L',
        'ttl' => 'Cimahi, 19/01/1984',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'VILLY SATRIA PRADITHA',
        'nip' => '19920025',
        'status_pegawai' => 'TPA CALON PEGAWAI TETAP',
        'id_jabatanstruktural' => '147',
        'jenis_kelamin' => 'P',
        'ttl' => 'Ngawi, 01/08/1986',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ASEP DEFFY CIFTADY',
        'nip' => '15860073',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '148',
        'jenis_kelamin' => 'L',
        'ttl' => 'Karangasem, 30/12/1979',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ADITYA ZULKARNAIN',
        'nip' => '18930078',
        'status_pegawai' => 'TPA PROFESIONAL FULL TIME',
        'id_jabatanstruktural' => '149',
        'jenis_kelamin' => 'L',
        'ttl' => 'Surakarta, 11/07/1984',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'HANIF KHAIRUDDIN',
        'nip' => '15860036',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '149',
        'jenis_kelamin' => 'L',
        'ttl' => 'Pasuruan, 17/04/1984',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RINNA FRIDIANA',
        'nip' => '91710055',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '151',
        'jenis_kelamin' => 'P',
        'ttl' => 'Garut, 10/02/1975',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SRI WIDANINGSIH',
        'nip' => '09840071',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '152',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bandung, 06/10/1980',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RANY ASIH APSARI',
        'nip' => '08850033',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '153',
        'jenis_kelamin' => 'P',
        'ttl' => 'Ponorogo, 28/07/1982',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'KIKI HERY SANDY',
        'nip' => '15880078',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '154',
        'jenis_kelamin' => 'P',
        'ttl' => 'Depok, 17/05/1985',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ENY WIDARYANTI',
        'nip' => '11860069',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '154',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bogor, 05/01/1986',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'USMAN NURDIN',
        'nip' => '91700020',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '154',
        'jenis_kelamin' => 'L',
        'ttl' => 'Karangasem, 29/09/1985',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'YUNIA RIZKI RAMDHANI',
        'nip' => '15860040',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '154',
        'jenis_kelamin' => 'P',
        'ttl' => 'Yogyakarta, 31/12/1985',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'GUGUM GUMILAR',
        'nip' => '00800064',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '154',
        'jenis_kelamin' => 'L',
        'ttl' => 'Purbolinggo, 19/04/1984',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '165',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NANDA TRI MAHAR',
        'nip' => '18930089',
        'status_pegawai' => 'TPA PROFESIONAL FULL TIME',
        'id_jabatanstruktural' => '154',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bekasi, 02/12/1988',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NURJANAH LENGKONG PUTRI',
        'nip' => '18940066',
        'status_pegawai' => 'TPA PROFESIONAL FULL TIME',
        'id_jabatanstruktural' => '154',
        'jenis_kelamin' => 'P',
        'ttl' => 'Garut, 07/03/1992',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RULLY FIRMANSYAH',
        'nip' => '12810011',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '155',
        'jenis_kelamin' => 'L',
        'ttl' => 'Klaten, 01/06/1983',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ENDAH PUSPITA',
        'nip' => '15910030',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '156',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bandung, 09/08/1986',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '160',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'HENDRI GUSTAMAN',
        'nip' => '15850048',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '156',
        'jenis_kelamin' => 'L',
        'ttl' => 'Sidoarjo, 02/08/1988',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NOVIA RULI KURNIAWATI',
        'nip' => '18940059',
        'status_pegawai' => 'TPA PROFESIONAL FULL TIME',
        'id_jabatanstruktural' => '156',
        'jenis_kelamin' => 'P',
        'ttl' => 'Purbolinggo, 01/11/1990',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'FAZARIKA NABILA CHOIRIA',
        'nip' => '18920130',
        'status_pegawai' => 'TPA PROFESIONAL FULL TIME',
        'id_jabatanstruktural' => '156',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bandung, 01/03/1992',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'INDAH FAJARWATI',
        'nip' => '07830035',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '157',
        'jenis_kelamin' => 'P',
        'ttl' => 'Cimahi, 13/06/1979',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'MOCHAMAD YUDHA FEBRIANTA',
        'nip' => '15830007',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '158',
        'jenis_kelamin' => 'L',
        'ttl' => 'Cirebon, 10/10/1983',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'FIFINELLA RAHMA',
        'nip' => '18950016',
        'status_pegawai' => 'TPA PROFESIONAL FULL TIME',
        'id_jabatanstruktural' => '159',
        'jenis_kelamin' => 'P',
        'ttl' => 'Purwakarta, 28/07/1989',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'KATOLIK',
        'tinggi_badan' => '160',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RAHMAT HIDAYAT',
        'nip' => '45421664',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '159',
        'jenis_kelamin' => 'L',
        'ttl' => 'Sukabumi, 19/07/1989',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'YAYUK SHANTY NOVIANTY. S',
        'nip' => '15840081',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '159',
        'jenis_kelamin' => 'P',
        'ttl' => 'Purworejo, 07/02/1991',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'LIA MARLIA',
        'nip' => '14810075',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '160',
        'jenis_kelamin' => 'P',
        'ttl' => 'Sukoharjo, 14/04/1982',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SENNA TEDJAPURNAMA',
        'nip' => '15930023',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '161',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bandung, 21/11/1988',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NOVIE SUSANTIE',
        'nip' => '15880073',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '161',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bogor, 20/05/1989',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DIAH PUTRI DAMAYANTI',
        'nip' => '15900028',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '161',
        'jenis_kelamin' => 'P',
        'ttl' => 'Tuban, 18/01/1989',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ANDIJOKO TJAHJONO',
        'nip' => '16670040',
        'status_pegawai' => 'TPA PERBANTUAN TELKOM',
        'id_jabatanstruktural' => '162',
        'jenis_kelamin' => 'L',
        'ttl' => 'Karangasem, 17/01/1975',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ACHMAD SYUKUR MUHARAM',
        'nip' => '91680018',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '163',
        'jenis_kelamin' => 'L',
        'ttl' => 'Cimahi, 20/05/1979',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'CUCU LASMANA',
        'nip' => '91710010',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '164',
        'jenis_kelamin' => 'L',
        'ttl' => 'Jakarta, 11/11/1980',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '168',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AJENG PARAMITA',
        'nip' => '15820061',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '165',
        'jenis_kelamin' => 'P',
        'ttl' => 'Sukabumi, 11/03/1984',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DEDE ROHMAN',
        'nip' => '03750040',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '165',
        'jenis_kelamin' => 'L',
        'ttl' => 'Asahan, 01/08/1988',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AGUNG WIBISANA',
        'nip' => '19860013',
        'status_pegawai' => 'TPA CALON PEGAWAI TETAP',
        'id_jabatanstruktural' => '165',
        'jenis_kelamin' => 'L',
        'ttl' => 'Sleman, 10/03/1989',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SITI NURHAYATI KHASANAH',
        'nip' => '96740024',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '166',
        'jenis_kelamin' => 'P',
        'ttl' => 'Sukoharjo, 02/10/1981',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'UMI ATIYAH',
        'nip' => '95730032',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '167',
        'jenis_kelamin' => 'P',
        'ttl' => 'Agam, 05/11/1985',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'GEDE SUKRAYASA',
        'nip' => '00770034',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '167',
        'jenis_kelamin' => 'L',
        'ttl' => 'Cimahi, 02/04/1987',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '168',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'PRIADI DARMONO',
        'nip' => '91640019',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '168',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bogor, 19/17/1979',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'YOGA',
        'nip' => '00770029',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '169',
        'jenis_kelamin' => 'L',
        'ttl' => 'Asahan, 01/01/1981',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'KATOLIK',
        'tinggi_badan' => '162',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'Nofia Farida',
        'nip' => '21246547',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '170',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bandung, 27/12/1984',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NOVA GUSTANTO',
        'nip' => '03750060',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '171',
        'jenis_kelamin' => 'P',
        'ttl' => 'Pasaman, 31/07/1986',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'KURNIAWATI',
        'nip' => '91710029',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '172',
        'jenis_kelamin' => 'P',
        'ttl' => 'Klaten, 22/02/1981',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'TEGAR RAZZAAQ WINARSO',
        'nip' => '15920003',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '173',
        'jenis_kelamin' => 'L',
        'ttl' => 'Karangasem, 03/09/1985',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'YAYAN',
        'nip' => '01740015',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '173',
        'jenis_kelamin' => 'L',
        'ttl' => 'Solok, 17/03/1986',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DESY DWI NURHANDAYANI',
        'nip' => '07800067',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '174',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bandung, 15/10/1974',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ANDRIETA SHINTIA DEWI',
        'nip' => '08860064',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '175',
        'jenis_kelamin' => 'P',
        'ttl' => 'Jakarta, 05/06/1978',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AHMAD TRI HANURANTO',
        'nip' => '93660031',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '176',
        'jenis_kelamin' => 'L',
        'ttl' => 'Darmasraya, 02/08/1984',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'FIDELIA FELISIA KERMITE',
        'nip' => '14840007',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '177',
        'jenis_kelamin' => 'P',
        'ttl' => 'Banten, 19/02/1990',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'PUTRA FAJAR ALAM',
        'nip' => '15900004',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '178',
        'jenis_kelamin' => 'L',
        'ttl' => 'Sukabumi, 19/04/1988',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'PUSPA PUJIYANTI',
        'nip' => '15870061',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '179',
        'jenis_kelamin' => 'P',
        'ttl' => 'Asahan, 02/03/1990',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SARI NURLATIFAH',
        'nip' => '18950029',
        'status_pegawai' => 'TPA PROFESIONAL FULL TIME',
        'id_jabatanstruktural' => '179',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bandung, 20/10/1992',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'YANI NURAENI',
        'nip' => '91670014',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '180',
        'jenis_kelamin' => 'P',
        'ttl' => 'Banyuasih, 09/05/1980',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ISTI KHASANAH',
        'nip' => '11830056',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '181',
        'jenis_kelamin' => 'P',
        'ttl' => 'Karangasem, 07/01/1983',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'TONI GUSTIANA',
        'nip' => '01730045',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '182',
        'jenis_kelamin' => 'L',
        'ttl' => 'Surakarta, 01/06/1993',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'WIKE PRATIWI',
        'nip' => '15850059',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '182',
        'jenis_kelamin' => 'P',
        'ttl' => 'Malang, 18/07/1991',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ANDY KURNIA HANDOKO',
        'nip' => '00750025',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '183',
        'jenis_kelamin' => 'L',
        'ttl' => 'Lahat, 26/04/1983',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'LATIFAH SUBARKAH',
        'nip' => '15920039',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '184',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bandung, 22/08/1991',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ABD. RAHMAN N',
        'nip' => '19930025',
        'status_pegawai' => 'TPA CALON PEGAWAI TETAP',
        'id_jabatanstruktural' => '184',
        'jenis_kelamin' => 'L',
        'ttl' => 'Jember, 01/11/1992',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ANGGA RUSDINAR',
        'nip' => '07740390',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '186',
        'jenis_kelamin' => 'L',
        'ttl' => 'Jakarta, 31/12/1977',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RUNIK MACHFIROH',
        'nip' => '13870042',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '187',
        'jenis_kelamin' => 'P',
        'ttl' => 'Karangasem, 19/02/1980',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RIDWAN SUKMA AL-BUSYAERI',
        'nip' => '12860023',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '188',
        'jenis_kelamin' => 'L',
        'ttl' => 'Badung, 11/09/1983',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'TIKA RAHMAWATI',
        'nip' => '15920005',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '189',
        'jenis_kelamin' => 'P',
        'ttl' => 'Depok, 16/04/1990',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'JULI CATUR PRASETIAWAN',
        'nip' => '02760024',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '190',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bekasi, 20/11/1984',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'GERALDI GUNAWAN',
        'nip' => '15840073',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '191',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bekasi, 01/06/1990',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'LIA YULIANTI',
        'nip' => '15810029',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '191',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bangli, 08/08/1990',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AGUS PRATONDO',
        'nip' => '09770043',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '192',
        'jenis_kelamin' => 'L',
        'ttl' => 'Jombang, 02/11/1981',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'MIFTA RAHMA SUFIANA',
        'nip' => '96720021',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '193',
        'jenis_kelamin' => 'P',
        'ttl' => 'Cilacap, 02/02/1984',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'EGI GINANJAR',
        'nip' => '15880056',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '194',
        'jenis_kelamin' => 'L',
        'ttl' => 'Karangasem, 27/04/1989',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'TUMIAR SIMANJUNTAK',
        'nip' => '92670012',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '194',
        'jenis_kelamin' => 'L',
        'ttl' => 'Semarang, 20/12/1992',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'KATOLIK',
        'tinggi_badan' => '162',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'MOHAMAD RIDWAN NOOR',
        'nip' => '13850008',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '195',
        'jenis_kelamin' => 'L',
        'ttl' => 'Buleleng, 03/01/1990',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'IMAN SUPARDAN',
        'nip' => '01750004',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '196',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bandung, 13/03/1994',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DADAN DRAJAT ',
        'nip' => '25375342',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '197',
        'jenis_kelamin' => 'L',
        'ttl' => 'Gianyar, 08/11/1975',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'IRFANSYAH BOEDIMAN',
        'nip' => '17542014',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '198',
        'jenis_kelamin' => 'L',
        'ttl' => 'Asahan, 03/07/1978',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NUR SAPAR',
        'nip' => '25344547',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '199',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bekasi, 25/05/1980',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'HENDI HARYADI',
        'nip' => '75787452',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '200',
        'jenis_kelamin' => 'L',
        'ttl' => 'Mojokerto, 05/10/1983',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'WINDI PIRTASARI',
        'nip' => '42575879',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '200',
        'jenis_kelamin' => 'P',
        'ttl' => 'Jembrana, 30/08/1983',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SARIP HIDAYAT',
        'nip' => '75724763',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '201',
        'jenis_kelamin' => 'L',
        'ttl' => 'Demak, 18/04/1979',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ZAINUDIN',
        'nip' => '38532457',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '202',
        'jenis_kelamin' => 'L',
        'ttl' => 'Karangasem, 07/01/1982',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ISKANDAR FUADI',
        'nip' => '78768352',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '202',
        'jenis_kelamin' => 'L',
        'ttl' => 'Depok, 02/07/1982',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'TUTY SURYANA',
        'nip' => '86857851',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '202',
        'jenis_kelamin' => 'P',
        'ttl' => 'Karangasem, 29/09/1985',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'YAHYA MULQIYA HAYA',
        'nip' => '25234578',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '203',
        'jenis_kelamin' => 'L',
        'ttl' => 'Jakarta, 04/01/1977',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DANI MUSLIANDANI',
        'nip' => '54545727',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '204',
        'jenis_kelamin' => 'L',
        'ttl' => 'Jember, 18/11/1979',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DEDEN MURTADO',
        'nip' => '42352275',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '205',
        'jenis_kelamin' => 'L',
        'ttl' => 'Boyolali, 22/01/1982',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ACHMAD SUROSO',
        'nip' => '24572143',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '205',
        'jenis_kelamin' => 'L',
        'ttl' => 'Asahan, 13/04/1985',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'GILANG KHARISMA NIRWANA',
        'nip' => '42757895',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '205',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bekasi, 10/05/1988',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AGUS KURNIAWAN',
        'nip' => '24645789',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '206',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bekasi, 07/09/1979',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'HERIYANA EFENDI',
        'nip' => '35375717',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '207',
        'jenis_kelamin' => 'L',
        'ttl' => 'Klungkung, 19/01/1982',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DANIA ELFITRIA',
        'nip' => '76787574',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '207',
        'jenis_kelamin' => 'P',
        'ttl' => 'Jembrana, 21/12/1987',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AHMAD MUJAHIDIN',
        'nip' => '57876332',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '207',
        'jenis_kelamin' => 'L',
        'ttl' => 'Cilacap, 09/08/1989',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DANA SULISTYO KUSUMO',
        'nip' => '27800110',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '208',
        'jenis_kelamin' => 'L',
        'ttl' => 'Semarang, 02/04/1973',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SISCA EKA FITRIA',
        'nip' => '14810038',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '209',
        'jenis_kelamin' => 'P',
        'ttl' => 'Surakarta, 08/09/1975',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'EKO RAHAYU',
        'nip' => '15890045',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '210',
        'jenis_kelamin' => 'P',
        'ttl' => 'Tabana, 31/03/1978',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AHMAD SYAIFUDIN',
        'nip' => '15900042',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '211',
        'jenis_kelamin' => 'L',
        'ttl' => 'Sukabumi, 27/07/1988',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'REZA RESTINDA',
        'nip' => '43643456',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '211',
        'jenis_kelamin' => 'L',
        'ttl' => 'Cimahi, 23/01/1990',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'KEMAS MUSLIM LHAKSMANA',
        'nip' => '13820075',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '212',
        'jenis_kelamin' => 'L',
        'ttl' => 'Jombang, 03/11/1977',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'HENDRIANI',
        'nip' => '93690051',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '213',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bandung, 08/02/1988',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'WARSINO',
        'nip' => '96700036',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '214',
        'jenis_kelamin' => 'L',
        'ttl' => 'Karangasem, 01/10/1978',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'LILIES SOENARYATI',
        'nip' => '91650031',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '215',
        'jenis_kelamin' => 'P',
        'ttl' => 'Tabana, 16/06/1978',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SARI WIDYASTUTI',
        'nip' => '42452134',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '216',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bengkulu, 10/09/1989',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'FIKA DENINGTYAS',
        'nip' => '14900001',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '217',
        'jenis_kelamin' => 'P',
        'ttl' => 'Malang, 01/03/1980',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AMIR HAMZAH',
        'nip' => '14850020',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '218',
        'jenis_kelamin' => 'L',
        'ttl' => 'Lumajang, 14/08/1987',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'INDAH PURNOMOWATI',
        'nip' => '12770013',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '219',
        'jenis_kelamin' => 'P',
        'ttl' => 'Jakarta, 29/12/1978',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ASEP GUPRON',
        'nip' => '12454312',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '220',
        'jenis_kelamin' => 'L',
        'ttl' => 'Asahan, 25/11/1980',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RESHA AKBAR',
        'nip' => '14890064',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '221',
        'jenis_kelamin' => 'L',
        'ttl' => 'Banten, 03/11/1985',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'MUHAMMAD GALUH YUDHISTIRA',
        'nip' => '19920024',
        'status_pegawai' => 'TPA CALON PEGAWAI TETAP',
        'id_jabatanstruktural' => '221',
        'jenis_kelamin' => 'L',
        'ttl' => 'Karangasem, 30/09/1990',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DIDI NURWAHYUDI',
        'nip' => '45421322',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '222',
        'jenis_kelamin' => 'L',
        'ttl' => 'Sukoharj, 30/01/1989',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AJI ROHIM',
        'nip' => '77857524',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '223',
        'jenis_kelamin' => 'L',
        'ttl' => 'Klaten, 09/03/1993',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SONI FAJAR SURYA GUMILANG',
        'nip' => '17750069',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '224',
        'jenis_kelamin' => 'L',
        'ttl' => 'Lumajang, 19/08/1979',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'FADEL JIKRI',
        'nip' => '12110124',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '225',
        'jenis_kelamin' => 'L',
        'ttl' => 'Karangasem, 17/01/1982',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DONNI RICHASDY',
        'nip' => '15900040',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '226',
        'jenis_kelamin' => 'L',
        'ttl' => 'Sukabumi, 20/12/1987',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'HILMAN IBNU ASSIDDIQ',
        'nip' => '17900088',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '226',
        'jenis_kelamin' => 'L',
        'ttl' => 'Cimahi, 19/05/1990',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ASHWIN SASONGKO SASTROSUBROTO',
        'nip' => '14540009',
        'status_pegawai' => 'TPA PROFESIONAL PART TIME',
        'id_jabatanstruktural' => '227',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bandung, 04/08/1979',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'HELNI MUTIARSIH JUMHUR',
        'nip' => '08730028',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '228',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bekasi, 02/01/1983',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '66',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ISNINA ASHRI',
        'nip' => '54241432',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '229',
        'jenis_kelamin' => 'P',
        'ttl' => 'Asahan, 28/06/1986',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'KHOIRUL ANWAR',
        'nip' => '16780043',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '230',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bandung, 19/12/1980',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SURYO ADHI WIBOWO',
        'nip' => '10870003',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '231',
        'jenis_kelamin' => 'L',
        'ttl' => 'Karangasem, 01/09/1987',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'HARIANDI',
        'nip' => '25645754',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '232',
        'jenis_kelamin' => 'L',
        'ttl' => 'Depok, 20/03/1989',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'MUHAMMAD ARY MURTI',
        'nip' => '99750022',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '233',
        'jenis_kelamin' => 'L',
        'ttl' => 'Jakarta, 01/08/1979',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '172',
        'berat_badan' => '70',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ASEP SUHENDI',
        'nip' => '15800021',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '234',
        'jenis_kelamin' => 'L',
        'ttl' => 'Asahan, 28/10/1984',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '66',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'BARJA SUBARJA',
        'nip' => '57546443',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '235',
        'jenis_kelamin' => 'L',
        'ttl' => 'Semarang, 02/02/1988',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '166',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ANDRY ALAMSYAH',
        'nip' => '13710043',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '236',
        'jenis_kelamin' => 'L',
        'ttl' => 'Malang, 03/09/1981',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '158',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SRI WIDIYANESTI',
        'nip' => '88204025',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '237',
        'jenis_kelamin' => 'P',
        'ttl' => 'Pacitan, 16/04/1985',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'IMANUEL',
        'nip' => '45457243',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '238',
        'jenis_kelamin' => 'L',
        'ttl' => 'Karangasem, 25/071989',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '166',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'BAMBANG SETIA NUGROHO',
        'nip' => '99760184',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '239',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bandung, 31/12/1972',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RATNA MAYASARI',
        'nip' => '10850004',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '240',
        'jenis_kelamin' => 'P',
        'ttl' => 'Semarang, 10/2/1973',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'PRAVITA DWI NUGRAHENI',
        'nip' => '15910003',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '241',
        'jenis_kelamin' => 'P',
        'ttl' => 'Asahan, 21/04/1981',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DINDA BELLANDINI',
        'nip' => '65971626',
        'status_pegawai' => 'TENAGA OUTSOURCE',
        'id_jabatanstruktural' => '242',
        'jenis_kelamin' => 'P',
        'ttl' => 'Jakarta, 03/09/1980',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '164',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ERNA SRI SUGESTI',
        'nip' => '92660024',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '243',
        'jenis_kelamin' => 'P',
        'ttl' => 'Depok, 14/01/1975',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'HERTIANA BETHANINGTYAS DYAH K.',
        'nip' => '13860049',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '244',
        'jenis_kelamin' => 'P',
        'ttl' => 'Karangasem, 25/07/1977',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KATOLIK',
        'tinggi_badan' => '165',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ANI YULIANI',
        'nip' => '15800054',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '245',
        'jenis_kelamin' => 'P',
        'ttl' => 'Sukoharjo, 07/06/1980',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RAMDIANA KHIKMAWATI IHSANI',
        'nip' => '15880029',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '245',
        'jenis_kelamin' => 'P',
        'ttl' => 'Klaten, 17/04/1981',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SUPRIATNA',
        'nip' => '03740007',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '245',
        'jenis_kelamin' => 'L',
        'ttl' => 'Yogyakarya, 31/03/1980',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ANJAR DWI KURNIYAWAN',
        'nip' => '15920018',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '245',
        'jenis_kelamin' => 'P',
        'ttl' => 'Wonogiri, 25/12/1982',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RAMDHAN NUGRAHA',
        'nip' => '14860031',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '246',
        'jenis_kelamin' => 'L',
        'ttl' => 'Cilacap, 05/10/1978',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ASEP YUDIN',
        'nip' => '97730012',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '247',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bekasi, 20/06/1982',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RUDDIE CAHYADI',
        'nip' => '91680013',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '247',
        'jenis_kelamin' => 'L',
        'ttl' => 'Banten, 27/03/1981',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KATOLIK',
        'tinggi_badan' => '165',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AYU SITI AMINAH',
        'nip' => '19920023',
        'status_pegawai' => 'TPA CALON PEGAWAI TETAP',
        'id_jabatanstruktural' => '247',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bandung, 11/08/1983',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'UUT USWATUN HASANAH',
        'nip' => '19950015',
        'status_pegawai' => 'TPA CALON PEGAWAI TETAP',
        'id_jabatanstruktural' => '247',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bandung, 03/11/1980',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'BASUKI RAHMAT',
        'nip' => '99630012',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '248',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bandung, 24/09/1974',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SRI MUJIASIH',
        'nip' => '11850067',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '249',
        'jenis_kelamin' => 'P',
        'ttl' => 'Sukabumi, 08/07/1979',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'OMAN SUDARYAT',
        'nip' => '97690042',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '250',
        'jenis_kelamin' => 'L',
        'ttl' => 'Jombang, 16/01/1981',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'TATANG TARYANA',
        'nip' => '03640012',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '250',
        'jenis_kelamin' => 'L',
        'ttl' => 'Jember, 19/051983',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AKBAR ATHOILA',
        'nip' => '17930055',
        'status_pegawai' => 'TPA PROFESIONAL FULL TIME',
        'id_jabatanstruktural' => '250',
        'jenis_kelamin' => 'L',
        'ttl' => 'Ngawi, 12/07/1983',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'EDY WIBOWO',
        'nip' => '14860038',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '251',
        'jenis_kelamin' => 'L',
        'ttl' => 'Lumajang, 29/02/1978',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'BESE ULIANTARA',
        'nip' => '15800023',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '252',
        'jenis_kelamin' => 'L',
        'ttl' => 'Mojokerto, 02/09/1981',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'FANI RAHMANI CAHYADI',
        'nip' => '19940014',
        'status_pegawai' => 'TPA CALON PEGAWAI TETAP',
        'id_jabatanstruktural' => '253',
        'jenis_kelamin' => 'P',
        'ttl' => 'Tabana, 02/06/1983',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'LEVY OLIVIA NUR',
        'nip' => '14780033',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '254',
        'jenis_kelamin' => 'P',
        'ttl' => 'Klungkung, 31/12/1976',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RADITIANA PATMASARI',
        'nip' => '10860003',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '255',
        'jenis_kelamin' => 'P',
        'ttl' => 'Malang, 18/08/1979',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NUR ANDINI',
        'nip' => '14880072',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '257',
        'jenis_kelamin' => 'P',
        'ttl' => 'Malang, 13/11/1981',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SIGIT YUWONO',
        'nip' => '99740009',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '259',
        'jenis_kelamin' => 'L',
        'ttl' => 'Surakarta, 01/02/1979',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'MUHAMMAD NASRUN',
        'nip' => '10750046',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '262',
        'jenis_kelamin' => 'L',
        'ttl' => 'Boyolali, 28/05/1980',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'MAMAT ROKHMAT',
        'nip' => '0760004',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '265',
        'jenis_kelamin' => 'L',
        'ttl' => 'Jakarta, 04/10/1979',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'FIKY YOSEF SURATMAN',
        'nip' => '07760017',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '268',
        'jenis_kelamin' => 'L',
        'ttl' => 'Jakarta, 23/01/1982',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DIKRI SETIAWAN',
        'nip' => '03760022',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '271',
        'jenis_kelamin' => 'L',
        'ttl' => 'Cimahi, 15/11/1980',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NACHWAN MUFTI ADRIANSYAH',
        'nip' => '99730017',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '274',
        'jenis_kelamin' => 'L',
        'ttl' => 'Sukabumi, 26/04/1980',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ISTIKMAL',
        'nip' => '08790051',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '277',
        'jenis_kelamin' => 'L',
        'ttl' => 'Sukabumi, 06/08/1983',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'YUDHA PURWANTO',
        'nip' => '02770066',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '278',
        'jenis_kelamin' => 'L',
        'ttl' => 'Banten, 30/05/1979',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'KOREDIANTO USMAN',
        'nip' => '02750053',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '279',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bandung, 09/07/1981',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'MUHAMMAD ZAKIYULLAH ROMDLONY',
        'nip' => '13860037',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '280',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bandung, 22/11/1981',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DUDI DARMAWAN',
        'nip' => '99740049',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '281',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bandung, 01/01/1983',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '168',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AGUS ACHMAD SUHENDRA',
        'nip' => '91670026',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '283',
        'jenis_kelamin' => 'L',
        'ttl' => 'Mojokerto, 12/03/1971',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '162',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'WINARNI SETIANINGSIH',
        'nip' => '12801045',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '284',
        'jenis_kelamin' => 'P',
        'ttl' => 'Kediri, 04/09/1977',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'FITRI RINA SETYANINGSIH',
        'nip' => '08870098',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '285',
        'jenis_kelamin' => 'P',
        'ttl' => 'Kediri, 16/02/1981',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'LUCIANA ANDRAWINA',
        'nip' => '93680033',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '287',
        'jenis_kelamin' => 'P',
        'ttl' => 'Yogyakarta, 08/08/1975',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '168',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NIA AMBARSARI',
        'nip' => '14770014',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '288',
        'jenis_kelamin' => 'P',
        'ttl' => 'Cimahi, 21/02/1978',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'YUDA INDRATNO',
        'nip' => '01740058',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '289',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bengkulu, 28/10/1980',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ASEP SUTISNA',
        'nip' => '01740025',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '289',
        'jenis_kelamin' => 'L',
        'ttl' => 'Medan, 01/03/1980',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NIDA MAYLA FATUROHMI',
        'nip' => '15920026',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '289',
        'jenis_kelamin' => 'P',
        'ttl' => 'Medan, 26/08/1979',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'FRANSISKUS TATAS DWI ATMAJI',
        'nip' => '14810006',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '290',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bogor, 17/09/1977',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'KATOLIK',
        'tinggi_badan' => '164',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'MUHAMMAD FATHINUDDIN',
        'nip' => '45243575',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '291',
        'jenis_kelamin' => 'L',
        'ttl' => 'Depok, 13/03/1980',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'BANGKIT RIAWAN',
        'nip' => '18920115',
        'status_pegawai' => 'TPA PROFESIONAL FULL TIME',
        'id_jabatanstruktural' => '291',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bekasi, 22/01/1982',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KATOLIK',
        'tinggi_badan' => '170',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'YULISTYANA EDY PRABOWO',
        'nip' => '45243145',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '291',
        'jenis_kelamin' => 'L',
        'ttl' => 'Banten, 05/06/1981',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'IRFAN DARMAWAN',
        'nip' => '14750038',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '292',
        'jenis_kelamin' => 'L',
        'ttl' => 'Semarang, 29/04/1974',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SILVI NURHAYATI',
        'nip' => '15840002',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '293',
        'jenis_kelamin' => 'P',
        'ttl' => 'Demak, 31/01/1976',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DADAN RAMDANI',
        'nip' => '15720053',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '294',
        'jenis_kelamin' => 'L',
        'ttl' => 'Jakarta, 18/07/1980',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SURYANA',
        'nip' => '01650021',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '294',
        'jenis_kelamin' => 'L',
        'ttl' => 'Jakarta, 02/11/1982',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'FAISHAL MUFIED AL ANSHARY',
        'nip' => '14900050',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '295',
        'jenis_kelamin' => 'L',
        'ttl' => 'Majalengka, 23/04/1976',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'PIAN ASPIANSYAH',
        'nip' => '03780040',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '296',
        'jenis_kelamin' => 'P',
        'ttl' => 'Indramayu, 01/10/1982',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'EUIS SULAESIH ',
        'nip' => '14770040',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '297',
        'jenis_kelamin' => 'P',
        'ttl' => 'Tasikmalaya, 09/09/1982',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SRI MARTINI',
        'nip' => '14590006',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '298',
        'jenis_kelamin' => 'P',
        'ttl' => 'Garut, 14/08/1974',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'MURNI DWI ASTUTI',
        'nip' => '14870080',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '299',
        'jenis_kelamin' => 'P',
        'ttl' => 'Ciamis, 25/05/1977',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RENI NOVITA SARI',
        'nip' => '18950030',
        'status_pegawai' => 'TPA PROFESIONAL FULL TIME',
        'id_jabatanstruktural' => '301',
        'jenis_kelamin' => 'P',
        'ttl' => 'Mojokerto, 06/05/1979',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ARI YANUAR RIDWAN',
        'nip' => '14780007',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '303',
        'jenis_kelamin' => 'L',
        'ttl' => 'Asahan, 19/11/1976',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DEVI PRATAMI',
        'nip' => '17870109',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '304',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bengkulu, 10/12/1979',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'TIEN FABRIANTI KUSUMASARI',
        'nip' => '14790008',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '306',
        'jenis_kelamin' => 'P',
        'ttl' => 'Kediri, 24/01/1976',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RACHMADITA ANDRESWARI',
        'nip' => '14890057',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '307',
        'jenis_kelamin' => 'P',
        'ttl' => 'Yogyakarta, 03/07/1979',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SUFANTORIQ',
        'nip' => '13264562',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '309',
        'jenis_kelamin' => 'L',
        'ttl' => 'Sleman, 20/02/1980',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ARTIKASARI',
        'nip' => '45795645',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '312',
        'jenis_kelamin' => 'P',
        'ttl' => 'Klaten, 15/06/1979',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'PUTU GIRI ARTHA',
        'nip' => '45454245',
        'status_pegawai' => 'DOSEN PROFESIONAL FULL TIME',
        'id_jabatanstruktural' => '315',
        'jenis_kelamin' => 'L',
        'ttl' => 'Sukoharjo, 30/04/1978',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'KATOLIK',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'WIYONO',
        'nip' => '90630021',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '318',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bangli, 21/12/1977',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ENDANG CHUMAIDIYAH',
        'nip' => '93650005',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '319',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bandung, 07/06/1980',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DEDEN WITARSYAH',
        'nip' => '14720028',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '320',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bandung, 27/05/1981',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'R. WAHJOE WITJAKSONO',
        'nip' => '14690010',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '321',
        'jenis_kelamin' => 'L',
        'ttl' => 'Sumedang, 11/07/1981',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KATOLIK',
        'tinggi_badan' => '165',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'MAMAN ABDUROHMAN',
        'nip' => '99750010',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '322',
        'jenis_kelamin' => 'L',
        'ttl' => 'Purwakarta, 11/10/1970',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'MEDIANA MAYANG KANCANA',
        'nip' => '02770071',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '323',
        'jenis_kelamin' => 'P',
        'ttl' => 'Purwokerto, 26/06/1975',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NANI',
        'nip' => '97720020',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '324',
        'jenis_kelamin' => 'P',
        'ttl' => 'Kediri, 03/05/1979',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ELEN TIA SEPIATI',
        'nip' => '08860092',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '325',
        'jenis_kelamin' => 'P',
        'ttl' => 'Malang, 31/12/81',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SUYANTO',
        'nip' => '99740057',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '326',
        'jenis_kelamin' => 'L',
        'ttl' => 'Depok, 16/05/1974',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'FHIRA NHITA',
        'nip' => '13860015',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '327',
        'jenis_kelamin' => 'P',
        'ttl' => 'Cianjur, 19/11/1975',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SOLIHIN',
        'nip' => '03650002',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '328',
        'jenis_kelamin' => 'L',
        'ttl' => 'Cirebon, 06/06/1980',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'I PUTU SUDIKSA',
        'nip' => '97730020',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '328',
        'jenis_kelamin' => 'L',
        'ttl' => 'Indrmayu, 24/08/1981',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KATOLIK',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'FEBRYANTI STHEVANIE',
        'nip' => '14880014',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '329',
        'jenis_kelamin' => 'P',
        'ttl' => 'Lahat, 18/01/1977',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '164',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'OKU DEWI NOVIANTIKA PUTRI',
        'nip' => '16890083',
        'status_pegawai' => 'TPA PROFESIONAL FULL TIME',
        'id_jabatanstruktural' => '330',
        'jenis_kelamin' => 'P',
        'ttl' => 'Majalengka, 14/09/1982',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'YUSZA REDITYA MURTI',
        'nip' => '15870091',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '330',
        'jenis_kelamin' => 'L',
        'ttl' => 'Malang, 29/07/1982',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '170',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'TRI USADI PRASETYO',
        'nip' => '01750018',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '330',
        'jenis_kelamin' => 'L',
        'ttl' => 'Malang, 09/04/1982',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RIMBA WHIDIANA CIPTASARI',
        'nip' => '04740062',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '331',
        'jenis_kelamin' => 'P',
        'ttl' => 'Yogyakarta, 03/12/1973',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ANNE MELANIE',
        'nip' => '02780004',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '332',
        'jenis_kelamin' => 'P',
        'ttl' => 'Semarang, 23/07/1976',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'HASMAWATI',
        'nip' => '15900049',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '333',
        'jenis_kelamin' => 'P',
        'ttl' => 'Depok, 01/02/1980',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SANDI MUHAMAD NASIR',
        'nip' => '00770008',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '333',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bengkulu, 27/08/1980',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SANTI SUSANTI',
        'nip' => '91680046',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '333',
        'jenis_kelamin' => 'P',
        'ttl' => 'Lampung, 04/09/1982',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'INDRA LUKMANA SARDI',
        'nip' => '16890031',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '334',
        'jenis_kelamin' => 'L',
        'ttl' => 'Lahat, 12/03/1977',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ASEP FITRIJATNA',
        'nip' => '03710050',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '335',
        'jenis_kelamin' => 'L',
        'ttl' => 'Karangasem,04/08/1979',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'IWAN KURNIAWAN',
        'nip' => '93700014',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '336',
        'jenis_kelamin' => 'L',
        'ttl' => 'Kediri, 17/01/1982',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NIKEN DWI WAHYU CAHYANI',
        'nip' => '00750052',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '337',
        'jenis_kelamin' => 'P',
        'ttl' => 'Mojokerto, 30/03/1975',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NOVIAN ANGGIS SUWASTIKA',
        'nip' => '13850083',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '338',
        'jenis_kelamin' => 'L',
        'ttl' => 'Cilacap, 07/07/1977',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AJID AWALUDIN',
        'nip' => '01820060',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '339',
        'jenis_kelamin' => 'L',
        'ttl' => 'Blitar, 28/02/1980',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'BAMBANG ARI WAHYUDI',
        'nip' => '14860086',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '340',
        'jenis_kelamin' => 'L',
        'ttl' => 'Klaten, 13/09/1979',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DENI SAEPUDIN',
        'nip' => '99750013',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '342',
        'jenis_kelamin' => 'L',
        'ttl' => 'Ngawi, 20/02/1975',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ENDRO ARIYANTO',
        'nip' => '04660014',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '345',
        'jenis_kelamin' => 'L',
        'ttl' => 'Karangasem, 02/04/1976',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'YOGILASWAR',
        'nip' => '00790042',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '347',
        'jenis_kelamin' => 'L',
        'ttl' => 'Karanganyar,25/12/1978',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '168',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'PARMAN SUKARNO',
        'nip' => '17770073',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '348',
        'jenis_kelamin' => 'L',
        'ttl' => 'Depok, 02/03/1976',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RI HANDAYANI',
        'nip' => '15860063',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '350',
        'jenis_kelamin' => 'P',
        'ttl' => 'Depok, 21/10/1979',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ZACTY ',
        'nip' => '54213457',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '351',
        'jenis_kelamin' => 'L',
        'ttl' => 'Depok, 05/10/1979',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'IMRON SAEFUL',
        'nip' => '45789624',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '354',
        'jenis_kelamin' => 'L',
        'ttl' => 'Banten, 15/05/1980',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '66',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ELISA',
        'nip' => '12457856',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '357',
        'jenis_kelamin' => 'P',
        'ttl' => 'Sukabumi, 05/06/1980',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ARI MOESRIAMI BARMAWI',
        'nip' => '08600006',
        'status_pegawai' => 'DOSEN PERBANTUAN KOPERTIS',
        'id_jabatanstruktural' => '360',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bogor, 08/11/1979',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'VERA SURYANI',
        'nip' => '03790039',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '361',
        'jenis_kelamin' => 'P',
        'ttl' => 'Majalengka, 01/01/1978',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'EKO DARWIYANTO',
        'nip' => '13680041',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '362',
        'jenis_kelamin' => 'L',
        'ttl' => 'Yogyakarta, 22/04/1980',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DIDIT ADYTIA',
        'nip' => '16830005',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '363',
        'jenis_kelamin' => 'L',
        'ttl' => 'Ngawi, 10/11/1981',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DODIE TRICAHYONO',
        'nip' => '93670009',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '364',
        'jenis_kelamin' => 'L',
        'ttl' => 'Klaten, 01/04/1972',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '165',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NIKE MANDASARI',
        'nip' => '12840008',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '365',
        'jenis_kelamin' => 'P',
        'ttl' => 'Malang,06/07/1978',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ASEP SUDRAJAT',
        'nip' => '15840035',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '366',
        'jenis_kelamin' => 'L',
        'ttl' => 'Jakarta, 10/10/1980',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'HUSNA RAHMI',
        'nip' => '15830016',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '367',
        'jenis_kelamin' => 'P',
        'ttl' => 'Jakarta, 14/11/1981',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RATRI WAHYUNINGTYAS',
        'nip' => '08810047',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '368',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bekasi, 18/01/1974',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'OSA OMAR SHARIF',
        'nip' => '13780041',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '369',
        'jenis_kelamin' => 'L',
        'ttl' => 'Banten, 22/05/1977',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '162',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NENSI DAMAYANTI',
        'nip' => '15860094',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '370',
        'jenis_kelamin' => 'P',
        'ttl' => 'Ngawi, 25/09/1980',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SETIADI',
        'nip' => '15860072',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '370',
        'jenis_kelamin' => 'L',
        'ttl' => 'Lumajang, 28/04/1980',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AHMAD DARAJAT BASALLAMA',
        'nip' => '15930029',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '370',
        'jenis_kelamin' => 'L',
        'ttl' => 'Sukoharjo, 31/12/1982',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'INDRA GUNAWAN',
        'nip' => '12830015',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '371',
        'jenis_kelamin' => 'L',
        'ttl' => 'Yogyakarta, 02/11/1977',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ENUNG MUHAEMI',
        'nip' => '01710044',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '372',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bekasi,07/03/1981',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'BRADY RIKUMAHU',
        'nip' => '06620020',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '373',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bandung, 11/03/1975',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'KATOLIK',
        'tinggi_badan' => '165',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SARI RAHMAWATI',
        'nip' => '11830049',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '374',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bandung, 15/05/1978',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'KHARISMA ELLYANA',
        'nip' => '15850073',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '375',
        'jenis_kelamin' => 'P',
        'ttl' => 'Karanganyar, 19/02/1980',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'IMAS MAESYAROH',
        'nip' => '20138041',
        'status_pegawai' => 'TENAGA OUTSOURCE',
        'id_jabatanstruktural' => '375',
        'jenis_kelamin' => 'P',
        'ttl' => 'Blitar, 23/02/1981',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'KRISHNA KUSUMAHADI',
        'nip' => '14780054',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '376',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bengkulu, 26/06/1977',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DEDE RAHMAT',
        'nip' => '01730031',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '377',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bengkulu, 29/10/1979',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'YAYA SUNARYA',
        'nip' => '01730011',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '378',
        'jenis_kelamin' => 'L',
        'ttl' => 'Gianyar, 01/03/1980',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NORA AMELDA RIZAL',
        'nip' => '10740051',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '379',
        'jenis_kelamin' => 'P',
        'ttl' => 'Asahan, 03/12/1973',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ELVIRA AZIS',
        'nip' => '13730060',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '380',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bekasi, 08/06/1978',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'IRWAN MULYAWAN',
        'nip' => '15820076',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '381',
        'jenis_kelamin' => 'L',
        'ttl' => 'Mojokerto, 12/01/1980',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ELLA JAUVANI SAGALA',
        'nip' => '14790009',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '382',
        'jenis_kelamin' => 'P',
        'ttl' => 'Jembrana, 16/11/1978',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'EJEB',
        'nip' => '90650012',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '383',
        'jenis_kelamin' => 'L',
        'ttl' => 'Demak, 20/03/1981',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DEANNES ISYNUWARDHANA',
        'nip' => '08790035',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '384',
        'jenis_kelamin' => 'L',
        'ttl' => 'Karangasem, 24/07/1974',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '162',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'MUHAMAD MUSLIH',
        'nip' => '08780061',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '385',
        'jenis_kelamin' => 'L',
        'ttl' => 'Depok, 27/11/1978',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SISKA NOVIARISTANTI',
        'nip' => '08780059',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '387',
        'jenis_kelamin' => 'P',
        'ttl' => 'Karangasem, 30/08/1975',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RISRIS RISMAYANI',
        'nip' => '14820051',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '388',
        'jenis_kelamin' => 'P',
        'ttl' => 'Jakarta, 04/02/1977',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'MOHAMMAD TYAS PAWITRA',
        'nip' => '15870055',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '389',
        'jenis_kelamin' => 'L',
        'ttl' => 'Jember, 09/10/1980',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ASTRI ANGGELIA',
        'nip' => '20158444',
        'status_pegawai' => 'TENAGA OUTSOURCE',
        'id_jabatanstruktural' => '390',
        'jenis_kelamin' => 'P',
        'ttl' => 'Boyolali, 13/09/1979',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NIDYA DUDIJA',
        'nip' => '10850035',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '393',
        'jenis_kelamin' => 'P',
        'ttl' => 'Asahan, 17/04/1978',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'MAYA ARIYANTI',
        'nip' => '08730016',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '394',
        'jenis_kelamin' => 'P',
        'ttl' => 'Depok, 21/08/1979',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ASTRIE KRISNAWATI',
        'nip' => '10790015',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '395',
        'jenis_kelamin' => 'P',
        'ttl' => 'Banten, 05/12/1979',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ADE IRMA SUSANTY',
        'nip' => '91660037',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '396',
        'jenis_kelamin' => 'P',
        'ttl' => 'Malang, 01/04/1972',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DINI SALMIYAH FITHRAH ALI',
        'nip' => '14740065',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '397',
        'jenis_kelamin' => 'P',
        'ttl' => 'Purwokerto, 05/12/1978',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'LINA KARLINA',
        'nip' => '15900019',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '398',
        'jenis_kelamin' => 'P',
        'ttl' => 'Lumajang, 09/07/1978',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'TRI WIDARMANTI',
        'nip' => '15810073',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '399',
        'jenis_kelamin' => 'P',
        'ttl' => 'Majalengka, 13/04/1980',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RORO RETNO WULAN',
        'nip' => '15710017',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '400',
        'jenis_kelamin' => 'P',
        'ttl' => 'Sukabumi, 17/08/1974',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'MUH ABDUL',
        'nip' => '45786524',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '401',
        'jenis_kelamin' => 'L',
        'ttl' => 'Tabana, 20/01/1976',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RORO GINA GARTINA',
        'nip' => '15870016',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '402',
        'jenis_kelamin' => 'P',
        'ttl' => 'Lampung, 23/12/1980',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'TATANG HARTADI',
        'nip' => '15880021',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '402',
        'jenis_kelamin' => 'L',
        'ttl' => 'Banten, 26/04/1981',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '164',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'TARANDHIKA TANTRA',
        'nip' => '15850021',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '402',
        'jenis_kelamin' => 'L',
        'ttl' => 'Jakarta, 28/05/1981',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ASAAS PUTRA',
        'nip' => '14790034',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '403',
        'jenis_kelamin' => 'L',
        'ttl' => 'Karangasem, 30/07/1975',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DIMAS SATRIO WIJAKSONO',
        'nip' => '15820074',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '404',
        'jenis_kelamin' => 'L',
        'ttl' => 'Blitar, 31/08/1981',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AFRIANA NUR MULYA',
        'nip' => '15830011',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '404',
        'jenis_kelamin' => 'L',
        'ttl' => 'Semarang, 02/01/1981',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'TAUFAN UMBARA',
        'nip' => '12720045',
        'status_pegawai' => 'TPA PERBANTUAN TELKOM',
        'id_jabatanstruktural' => '405',
        'jenis_kelamin' => 'L',
        'ttl' => 'Karawang, 06/05/1975',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DENI WAHYU',
        'nip' => '94720034',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '406',
        'jenis_kelamin' => 'L',
        'ttl' => 'Subang, 10/03/1975',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SUTRIYONO',
        'nip' => '15790024',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '407',
        'jenis_kelamin' => 'L',
        'ttl' => 'Garut, 14/06/1981',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'EUIS SUHERTI',
        'nip' => '97630039',
        'status_pegawai' => 'TPA PERBANTUAN TELKOM',
        'id_jabatanstruktural' => '407',
        'jenis_kelamin' => 'P',
        'ttl' => 'Sukabumi, 18/02/1981',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ARIE PRASETIO',
        'nip' => '14800025',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '408',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bekasi, 21/09/1975',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AGUS HERMAWAN',
        'nip' => '12840059',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '409',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bekasi, 24/09/1981',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'FITHRIYA ZAHRA',
        'nip' => '15840038',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '410',
        'jenis_kelamin' => 'P',
        'ttl' => 'Malang, 27/06/1981',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'FREDDY YUSANTO',
        'nip' => '14760015',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '411',
        'jenis_kelamin' => 'L',
        'ttl' => 'Purwokerto, 29/02/1974',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ITCA ISTIA WAHYUNI',
        'nip' => '14870011',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '412',
        'jenis_kelamin' => 'P',
        'ttl' => 'Lumajang, 03/02/1976',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '162',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'HENDRA SIRAIT',
        'nip' => '18900119',
        'status_pegawai' => 'TPA PROFESIONAL FULL TIME',
        'id_jabatanstruktural' => '413',
        'jenis_kelamin' => 'L',
        'ttl' => 'Majalengka,07/10/1981',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SYAHPUTRA',
        'nip' => '14790007',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '414',
        'jenis_kelamin' => 'L',
        'ttl' => 'Karangasem, 11/03/1976',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DEVILIA SARI',
        'nip' => '14810054',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '415',
        'jenis_kelamin' => 'P',
        'ttl' => 'Karangasem, 15/06/1978',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'FITRIANI NUR UTAMI',
        'nip' => '15900018',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '416',
        'jenis_kelamin' => 'P',
        'ttl' => 'Surakarta, 19/03/1980',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AYUB ILFANDY IMRAN',
        'nip' => '15830012',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '417',
        'jenis_kelamin' => 'L',
        'ttl' => 'Malang, 22/10/1980',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'KHOISIN IMAM',
        'nip' => '45787542',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '420',
        'jenis_kelamin' => 'L',
        'ttl' => 'Lahat, 25/07/1980',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'KRISTINA SISILIA',
        'nip' => '12770058',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '423',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bandung, 04/11/1981',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '168',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RETNO SETYORINI',
        'nip' => '08800015',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '424',
        'jenis_kelamin' => 'P',
        'ttl' => 'Jember, 08/11/1982',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'IRA DWI MAYANGSARI',
        'nip' => '12790010',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '425',
        'jenis_kelamin' => 'P',
        'ttl' => 'Klaten, 12/05/1982',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ALILA PRAMIYANTI',
        'nip' => '08800038',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '426',
        'jenis_kelamin' => 'P',
        'ttl' => 'Jakarta, 16/01/1982',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '150',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DIDIT WIDIATMOKO SUWARDIKUN',
        'nip' => '12570001',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '427',
        'jenis_kelamin' => 'L',
        'ttl' => 'Majalengka, 01/05/1972',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NI WAYAN KUSTAMI',
        'nip' => '02760029',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '428',
        'jenis_kelamin' => 'P',
        'ttl' => 'Indramayu, 05/08/1976',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DINI FEBRIANTI',
        'nip' => '15860016',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '429',
        'jenis_kelamin' => 'P',
        'ttl' => 'Tasikmalaya, 09/02/1978',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'REFI RIFALDI WINDYA GIRI',
        'nip' => '06760014',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '431',
        'jenis_kelamin' => 'L',
        'ttl' => 'Garut, 13/01/1976',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RITA JUWITA',
        'nip' => '01770057',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '432',
        'jenis_kelamin' => 'P',
        'ttl' => 'Ciamis, 17/06/1979',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ISNAN PURNAMA',
        'nip' => '45123695',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '433',
        'jenis_kelamin' => 'L',
        'ttl' => 'Mojokerto, 21/12/1980',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SANTI NURBAITI',
        'nip' => '15840086',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '433',
        'jenis_kelamin' => 'P',
        'ttl' => 'Asahan, 25/09/1980',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'IWAN HERMAWAN',
        'nip' => '93670033',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '433',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bengkulu, 29/07/1980',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AHMAD SANUSI',
        'nip' => '15660015',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '434',
        'jenis_kelamin' => 'L',
        'ttl' => 'Kediri, 02/ 03/1977',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'TEGUH AKBAR',
        'nip' => '18870114',
        'status_pegawai' => 'TPA PROFESIONAL FULL TIME',
        'id_jabatanstruktural' => '435',
        'jenis_kelamin' => 'L',
        'ttl' => 'Asahan, 02/08/1980',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RUSMAN YUSUP',
        'nip' => '01700009',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '435',
        'jenis_kelamin' => 'L',
        'ttl' => 'Cianjur, 06/01/1979',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ICA RAMAWISARI',
        'nip' => '15870029',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '435',
        'jenis_kelamin' => 'P',
        'ttl' => 'Cirebon, 10/09/1980',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NUR SABARIAH',
        'nip' => '19930023',
        'status_pegawai' => 'TPA CALON PEGAWAI TETAP',
        'id_jabatanstruktural' => '435',
        'jenis_kelamin' => 'P',
        'ttl' => 'Indrmayu, 14/01/1980',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ARINI ARUMSARI',
        'nip' => '14850026',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '436',
        'jenis_kelamin' => 'P',
        'ttl' => 'Lahat, 18/04/1977',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'YULIANI',
        'nip' => '96750029',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '437',
        'jenis_kelamin' => 'P',
        'ttl' => 'Majalengka, 22/12/1978',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NETTY KURAESYIN INDRIYATI',
        'nip' => '15690053',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '438',
        'jenis_kelamin' => 'P',
        'ttl' => 'Malang, 26/10/1980',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'REZA JORDAN HASIBUAN',
        'nip' => '18920116',
        'status_pegawai' => 'TPA PROFESIONAL FULL TIME',
        'id_jabatanstruktural' => '438',
        'jenis_kelamin' => 'L',
        'ttl' => 'Malang, 30/03/1980',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AHMAD NUR SHEHA GUNAWAN',
        'nip' => '14810025',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '439',
        'jenis_kelamin' => 'L',
        'ttl' => 'Yogyakarta, 03/05/1978',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RIZKIA NURSYABANI HAMZAH',
        'nip' => '15890023',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '440',
        'jenis_kelamin' => 'L',
        'ttl' => 'Semarang, 07/07/980',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DICKY HIDAYAT',
        'nip' => '12690031',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '442',
        'jenis_kelamin' => 'L',
        'ttl' => 'Depok, 11/10/1975',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ARIS RAHMANSYAH',
        'nip' => '14770015',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '443',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bengkulu, 15/04/1978',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ESYA PURNAMA',
        'nip' => '15840054',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '444',
        'jenis_kelamin' => 'P',
        'ttl' => 'Lampung, 19/11/1980',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DODDY FRIESTYA ASHARSINYO',
        'nip' => '14780067',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '445',
        'jenis_kelamin' => 'L',
        'ttl' => 'Lahat, 23/03/1975',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DELTA FEBIRANTI NURMAN',
        'nip' => '15870007',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '447',
        'jenis_kelamin' => 'L',
        'ttl' => 'Karangasem, 27/06/1980',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ASEP SUFYAN MUHAKIK ATAMTAJANI',
        'nip' => '15860042',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '448',
        'jenis_kelamin' => 'L',
        'ttl' => 'Kediri, 31/01/1975',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RENI MARDIANI',
        'nip' => '15850017',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '450',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bekasi, 04/11/1980',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'FARADILLAH NURSARI',
        'nip' => '15880043',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '451',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bekasi, 08/07/1978',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DONNY TRIHANONDO',
        'nip' => '10840063',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '454',
        'jenis_kelamin' => 'L',
        'ttl' => 'Malang, 12/04/1979',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DENY MARDI',
        'nip' => '48569587',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '457',
        'jenis_kelamin' => 'L',
        'ttl' => 'Purwokerto, 16/02/1980',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'FAJAR CIPTANDI',
        'nip' => '14860096',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '460',
        'jenis_kelamin' => 'L',
        'ttl' => 'Lumajang, 20/08/1981',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NOVIAN DENNY NUGRAHA',
        'nip' => '15660042',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '461',
        'jenis_kelamin' => 'L',
        'ttl' => 'Majalengka, 24/05/1981',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'MOHAMMAD ISA PRAMANA KOESOEMADINATA',
        'nip' => '17770081',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '462',
        'jenis_kelamin' => 'L',
        'ttl' => 'Sukabumi, 28/09/1978',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DANDI YUNIDAR',
        'nip' => '14760039',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '463',
        'jenis_kelamin' => 'L',
        'ttl' => 'Jakarta, 01/06/1979',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'KATOLIK',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'TEGUH WIDODO',
        'nip' => '14580008',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '464',
        'jenis_kelamin' => 'L',
        'ttl' => 'Lampung, 01/05/1972',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KATOLIK',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'VANY OCTAVIANY',
        'nip' => '15870077',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '465',
        'jenis_kelamin' => 'P',
        'ttl' => 'Lahat, 06/11/1976',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'FITRIAH NURFARIDAH',
        'nip' => '12850045',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '466',
        'jenis_kelamin' => 'P',
        'ttl' => 'Karangasem, 11/05/1979',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'LELI LISMEY',
        'nip' => '15680026',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '467',
        'jenis_kelamin' => 'P',
        'ttl' => 'Kediri, 16/12/1980',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'TRI BROTOHARSONO',
        'nip' => '94670025',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '468',
        'jenis_kelamin' => 'L',
        'ttl' => 'Mojokerto, 21/06/1974',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RIZZA INDAH MEGA MANDASARI',
        'nip' => '15880031',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '469',
        'jenis_kelamin' => 'P',
        'ttl' => 'Cilacap, 26/11/1976',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NENENG MENTARI MAULANI',
        'nip' => '18930080',
        'status_pegawai' => 'TPA PROFESIONAL FULL TIME',
        'id_jabatanstruktural' => '470',
        'jenis_kelamin' => 'P',
        'ttl' => 'Blitar, 31/08/1981',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'AMIR FAISAL',
        'nip' => '25489632',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '471',
        'jenis_kelamin' => 'L',
        'ttl' => 'Klaten, 04/02/1974',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RIXARD GEORGE DILLAK',
        'nip' => '07820016',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '472',
        'jenis_kelamin' => 'L',
        'ttl' => 'Karangasem, 07/06/1978',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '164',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ALIT YUNIARGAN ESKALUSPITA',
        'nip' => '15920029',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '472',
        'jenis_kelamin' => 'L',
        'ttl' => 'Sukabumi, 02/11/1979',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'FAJRI ARDIANSYAH',
        'nip' => '19950019',
        'status_pegawai' => 'TPA CALON PEGAWAI TETAP',
        'id_jabatanstruktural' => '472',
        'jenis_kelamin' => 'L',
        'ttl' => 'Cimahi, 07/01/1980',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RONI RIANDI',
        'nip' => '18810078',
        'status_pegawai' => 'TPA PROFESIONAL FULL TIME',
        'id_jabatanstruktural' => '472',
        'jenis_kelamin' => 'L',
        'ttl' => 'Jombang, 12/12/1980',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SRI SURYANI PRASETYOWATI',
        'nip' => '99750003',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '473',
        'jenis_kelamin' => 'P',
        'ttl' => 'Asahan, 17/07/1974',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '165',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ANDRI MAHARANA PUTRA',
        'nip' => '11790029',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '474',
        'jenis_kelamin' => 'L',
        'ttl' => 'Jombang, 22/07/1976',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SATRI GANI',
        'nip' => '15800018',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '475',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bengkulu, 27/07/1980',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'IMAS LELYANA',
        'nip' => '15740039',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '475',
        'jenis_kelamin' => 'P',
        'ttl' => 'Karawang, 01/02/1980',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'MUHAMMAD IKHSAN SANI',
        'nip' => '15850070',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '476',
        'jenis_kelamin' => 'L',
        'ttl' => 'Subang, 05/03/1976',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'GALIH PRIHARTANTO',
        'nip' => '15940004',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '477',
        'jenis_kelamin' => 'L',
        'ttl' => 'Garut, 03/01/1981',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RD. YAYUANA SABRINA SUPRIADI',
        'nip' => '15940006',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '477',
        'jenis_kelamin' => 'P',
        'ttl' => 'Sukabumi, 08/03/1981',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DINI MEILINDA',
        'nip' => '15860033',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '478',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bekasi, 13/02/',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'EUIS SUSILAWATY',
        'nip' => '12800028',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '479',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bekasi, 18/08/',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'WAWA WIKUSNA',
        'nip' => '14740031',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '480',
        'jenis_kelamin' => 'L',
        'ttl' => 'Malang, 23/08/1974',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'PERIYADI',
        'nip' => '17760060',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '481',
        'jenis_kelamin' => 'L',
        'ttl' => 'Purwokerto, 28/08/1976',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Menikah',
        'agama' => 'KRISTEN',
        'tinggi_badan' => '165',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'DIDA SULAHA',
        'nip' => '00800058',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '482',
        'jenis_kelamin' => 'L',
        'ttl' => 'Lumajang, 02/09/1980',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'SETIA JULI IRZAL ISMAIL',
        'nip' => '15780038',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '483',
        'jenis_kelamin' => 'L',
        'ttl' => 'Majalengka, 04/01/1979',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'NELSI WISNA',
        'nip' => '11710039',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '486',
        'jenis_kelamin' => 'P',
        'ttl' => 'Sukabumi, 09/04/1979',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'HAFIDUDIN',
        'nip' => '95680027',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '489',
        'jenis_kelamin' => 'L',
        'ttl' => 'Tabana, 14/03/1978',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RAHMADI WIJAYA',
        'nip' => '14720035',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '492',
        'jenis_kelamin' => 'L',
        'ttl' => 'Lampung, 19/09/1978',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ARYADI SAPUTRA',
        'nip' => '19950017',
        'status_pegawai' => 'TPA CALON PEGAWAI TETAP',
        'id_jabatanstruktural' => '494',
        'jenis_kelamin' => 'L',
        'ttl' => 'Banten, 24/09/1980',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ATI MUSTIKASARI',
        'nip' => '08790045',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '495',
        'jenis_kelamin' => 'P',
        'ttl' => 'Jakarta, 29/10/1980',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '65',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ERSY ERVINA',
        'nip' => '15800016',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '498',
        'jenis_kelamin' => 'P',
        'ttl' => 'Karangasem, 06/10/1979',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'YAHDI SIRADJ',
        'nip' => '14870017',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '501',
        'jenis_kelamin' => 'L',
        'ttl' => 'Blitar, 05/01/1979',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RADIAL ANWAR',
        'nip' => '17810068',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '504',
        'jenis_kelamin' => 'L',
        'ttl' => 'Semarang, 10/05/1979',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '58',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'HANUNG NINDITO PRASETYO',
        'nip' => '14790020',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '505',
        'jenis_kelamin' => 'L',
        'ttl' => 'Yogyakarta, 15/12/1980',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '164',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ANAK AGUNG GDE AGUNG',
        'nip' => '07820019',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '506',
        'jenis_kelamin' => 'L',
        'ttl' => 'Ngawi, 20/10/1980',
        'gol_darah' => 'AB',
        'status_perkawinan' => 'Menikah',
        'agama' => 'ISLAM',
        'tinggi_badan' => '160',
        'berat_badan' => '51',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'HARIANDI MAULID',
        'nip' => '15780014',
        'status_pegawai' => 'DOSEN PERBANTUAN KOPERTIS',
        'id_jabatanstruktural' => '507',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bekasi, 25/04/1980',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '168',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'RAHMAT HIDAYAT',
        'nip' => '08790038',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '508',
        'jenis_kelamin' => 'L',
        'ttl' => 'Bandung, 30/11/1980',
        'gol_darah' => 'A',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '170',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'GITA INDAH HAPSARI',
        'nip' => '14780044',
        'status_pegawai' => 'DOSEN PEGAWAI TETAP',
        'id_jabatanstruktural' => '509',
        'jenis_kelamin' => 'P',
        'ttl' => 'Bandung, 03/04/1980',
        'gol_darah' => 'B',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '162',
        'berat_badan' => '55',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ZAKARIA WAHYU NUR UTOMO',
        'nip' => '67061255',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '145',
        'jenis_kelamin' => 'L',
        'ttl' => 'Klaten, 25/06/1999',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '174',
        'berat_badan' => '72',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);

        Pegawai::create([
        'nama_lengkap' => 'ELSA JELISTA SARI',
        'nip' => '67061241',
        'status_pegawai' => 'TPA PEGAWAI TETAP',
        'id_jabatanstruktural' => '111',
        'jenis_kelamin' => 'P',
        'ttl' => 'Klaten, 20/01/1999',
        'gol_darah' => 'O',
        'status_perkawinan' => 'Lajang',
        'agama' => 'ISLAM',
        'tinggi_badan' => '167',
        'berat_badan' => '60',
        'alamat' => 'Bojongsoang, Dayeuhkolot, Bandung, Jawa Barat',
        ]);


    }
}
