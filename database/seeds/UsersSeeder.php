<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        User::create([
            'id_pegawai' => '571',
            'username' => 'zakariawahyu',
            'password' => bcrypt('admin'),
            'email' => 'zakarianur6@gmail.com',
            'role' => 'admin',
        ]);

        User::create([
            'id_pegawai' => '572',
            'username' => 'elsajelista',
            'password' => bcrypt('user'),
            'email' => 'elsajelista6@gmail.com',
            'role' => 'user',
        ]);

        User::create([
            'id_pegawai' => '570',
            'username' => 'gitahapsari',
            'password' => bcrypt('user'),
            'email' => 'gitahapsari6@gmail.com',
            'role' => 'user',
        ]);
    }
}
