<?php

use Illuminate\Database\Seeder;
use App\Jabatan;
use Illuminate\Support\Facades\DB;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jabatan')->delete();
        
        Jabatan::create([
        'nama_jabatan' => 'Rektor',
        'level_jabatan' => '1',
        ]);

        Jabatan::create([
        'nama_jabatan' => 'Direktur',
        'level_jabatan' => '2',
        ]);

        Jabatan::create([
        'nama_jabatan' => 'Kepala Bagian',
        'level_jabatan' => '3',
        ]);

        Jabatan::create([
        'nama_jabatan' => 'Kepala Urusan',
        'level_jabatan' => '4',
        ]);

        Jabatan::create([
        'nama_jabatan' => 'Staf',
        'level_jabatan' => '5',
        ]);

        Jabatan::create([
        'nama_jabatan' => 'Wakil Rektor',
        'level_jabatan' => '1',
        ]);

        Jabatan::create([
        'nama_jabatan' => 'Instruktur',
        'level_jabatan' => '5',
        ]);

        Jabatan::create([
        'nama_jabatan' => 'Manager',
        'level_jabatan' => '3',
        ]);

        Jabatan::create([
        'nama_jabatan' => 'Asisten Manager',
        'level_jabatan' => '4',
        ]);

        Jabatan::create([
        'nama_jabatan' => 'Ketua',
        'level_jabatan' => '2',
        ]);

        Jabatan::create([
        'nama_jabatan' => 'Wakil Ketua',
        'level_jabatan' => '3',
        ]);

        Jabatan::create([
        'nama_jabatan' => 'Staf Ahli',
        'level_jabatan' => '5',
        ]);

        Jabatan::create([
        'nama_jabatan' => 'Dekan',
        'level_jabatan' => '2',
        ]);

        Jabatan::create([
        'nama_jabatan' => 'Wakil Dekan',
        'level_jabatan' => '2',
        ]);

        Jabatan::create([
        'nama_jabatan' => 'Laboran',
        'level_jabatan' => '5',
        ]);

        Jabatan::create([
        'nama_jabatan' => 'Ketua Program Studi',
        'level_jabatan' => '3',
        ]);

        Jabatan::create([
        'nama_jabatan' => 'Sekretris Program Studi',
        'level_jabatan' => '4',
        ]);

        Jabatan::create([
        'nama_jabatan' => 'Staf Program Studi',
        'level_jabatan' => '5',
        ]);

        Jabatan::create([
        'nama_jabatan' => 'Ketua Kelompok Keahlian',
        'level_jabatan' => '3',
        ]);

    }
}
