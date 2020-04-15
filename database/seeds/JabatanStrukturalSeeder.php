<?php

use Illuminate\Database\Seeder;
use App\JabatanStruktural;
use Illuminate\Support\Facades\DB;

class JabatanStrukturalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jabatan_struktural')->delete();

        JabatanStruktural::create([
        'id_unitkerja' => '1',
        'id_jabatan' => '1',
        'id_unitbagian' => '1',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '2',
        'id_jabatan' => '2',
        'id_unitbagian' => '2',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '2',
        'id_jabatan' => '3',
        'id_unitbagian' => '3',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '2',
        'id_jabatan' => '4',
        'id_unitbagian' => '4',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '2',
        'id_jabatan' => '5',
        'id_unitbagian' => '4',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '2',
        'id_jabatan' => '4',
        'id_unitbagian' => '5',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '2',
        'id_jabatan' => '5',
        'id_unitbagian' => '5',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '2',
        'id_jabatan' => '3',
        'id_unitbagian' => '6',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '2',
        'id_jabatan' => '4',
        'id_unitbagian' => '7',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '2',
        'id_jabatan' => '5',
        'id_unitbagian' => '7',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '2',
        'id_jabatan' => '4',
        'id_unitbagian' => '8',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '2',
        'id_jabatan' => '5',
        'id_unitbagian' => '8',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '2',
        'id_jabatan' => '4',
        'id_unitbagian' => '9',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '2',
        'id_jabatan' => '5',
        'id_unitbagian' => '9',
        'formasi_jabatan' => '3',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '2',
        'id_jabatan' => '3',
        'id_unitbagian' => '10',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '2',
        'id_jabatan' => '4',
        'id_unitbagian' => '11',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '2',
        'id_jabatan' => '5',
        'id_unitbagian' => '11',
        'formasi_jabatan' => '3',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '2',
        'id_jabatan' => '4',
        'id_unitbagian' => '12',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '2',
        'id_jabatan' => '5',
        'id_unitbagian' => '12',
        'formasi_jabatan' => '6',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '2',
        'id_jabatan' => '3',
        'id_unitbagian' => '13',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '2',
        'id_jabatan' => '4',
        'id_unitbagian' => '14',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '2',
        'id_jabatan' => '5',
        'id_unitbagian' => '14',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '2',
        'id_jabatan' => '4',
        'id_unitbagian' => '15',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '2',
        'id_jabatan' => '5',
        'id_unitbagian' => '15',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '2',
        'id_jabatan' => '3',
        'id_unitbagian' => '16',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '2',
        'id_jabatan' => '4',
        'id_unitbagian' => '17',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '2',
        'id_jabatan' => '5',
        'id_unitbagian' => '17',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '2',
        'id_jabatan' => '4',
        'id_unitbagian' => '18',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '2',
        'id_jabatan' => '5',
        'id_unitbagian' => '18',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '2',
        'id_jabatan' => '4',
        'id_unitbagian' => '19',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '2',
        'id_jabatan' => '5',
        'id_unitbagian' => '19',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '1',
        'id_jabatan' => '6',
        'id_unitbagian' => '20',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '3',
        'id_jabatan' => '2',
        'id_unitbagian' => '21',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '3',
        'id_jabatan' => '3',
        'id_unitbagian' => '22',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '3',
        'id_jabatan' => '4',
        'id_unitbagian' => '23',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '3',
        'id_jabatan' => '5',
        'id_unitbagian' => '23',
        'formasi_jabatan' => '4',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '3',
        'id_jabatan' => '4',
        'id_unitbagian' => '24',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '3',
        'id_jabatan' => '5',
        'id_unitbagian' => '24',
        'formasi_jabatan' => '4',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '3',
        'id_jabatan' => '4',
        'id_unitbagian' => '25',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '3',
        'id_jabatan' => '5',
        'id_unitbagian' => '25',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '3',
        'id_jabatan' => '3',
        'id_unitbagian' => '26',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '3',
        'id_jabatan' => '4',
        'id_unitbagian' => '27',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '3',
        'id_jabatan' => '5',
        'id_unitbagian' => '27',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '3',
        'id_jabatan' => '4',
        'id_unitbagian' => '28',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '3',
        'id_jabatan' => '5',
        'id_unitbagian' => '28',
        'formasi_jabatan' => '4',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '3',
        'id_jabatan' => '4',
        'id_unitbagian' => '29',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '3',
        'id_jabatan' => '5',
        'id_unitbagian' => '29',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '3',
        'id_jabatan' => '3',
        'id_unitbagian' => '30',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '3',
        'id_jabatan' => '4',
        'id_unitbagian' => '31',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '3',
        'id_jabatan' => '5',
        'id_unitbagian' => '31',
        'formasi_jabatan' => '6',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '3',
        'id_jabatan' => '4',
        'id_unitbagian' => '32',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '3',
        'id_jabatan' => '5',
        'id_unitbagian' => '32',
        'formasi_jabatan' => '5',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '4',
        'id_jabatan' => '2',
        'id_unitbagian' => '33',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '4',
        'id_jabatan' => '3',
        'id_unitbagian' => '34',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '4',
        'id_jabatan' => '4',
        'id_unitbagian' => '35',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '4',
        'id_jabatan' => '5',
        'id_unitbagian' => '35',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '4',
        'id_jabatan' => '4',
        'id_unitbagian' => '36',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '4',
        'id_jabatan' => '5',
        'id_unitbagian' => '36',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '4',
        'id_jabatan' => '3',
        'id_unitbagian' => '37',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '4',
        'id_jabatan' => '4',
        'id_unitbagian' => '38',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '4',
        'id_jabatan' => '5',
        'id_unitbagian' => '38',
        'formasi_jabatan' => '4',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '4',
        'id_jabatan' => '4',
        'id_unitbagian' => '39',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '4',
        'id_jabatan' => '5',
        'id_unitbagian' => '39',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '4',
        'id_jabatan' => '3',
        'id_unitbagian' => '40',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '4',
        'id_jabatan' => '4',
        'id_unitbagian' => '41',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '4',
        'id_jabatan' => '5',
        'id_unitbagian' => '41',
        'formasi_jabatan' => '3',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '4',
        'id_jabatan' => '4',
        'id_unitbagian' => '42',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '4',
        'id_jabatan' => '5',
        'id_unitbagian' => '42',
        'formasi_jabatan' => '3',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '4',
        'id_jabatan' => '3',
        'id_unitbagian' => '43',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '4',
        'id_jabatan' => '4',
        'id_unitbagian' => '44',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '4',
        'id_jabatan' => '5',
        'id_unitbagian' => '44',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '4',
        'id_jabatan' => '4',
        'id_unitbagian' => '45',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '4',
        'id_jabatan' => '5',
        'id_unitbagian' => '45',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '4',
        'id_jabatan' => '7',
        'id_unitbagian' => '45',
        'formasi_jabatan' => '7',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '1',
        'id_jabatan' => '6',
        'id_unitbagian' => '46',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '5',
        'id_jabatan' => '2',
        'id_unitbagian' => '47',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '5',
        'id_jabatan' => '3',
        'id_unitbagian' => '47',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '5',
        'id_jabatan' => '4',
        'id_unitbagian' => '48',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '5',
        'id_jabatan' => '5',
        'id_unitbagian' => '48',
        'formasi_jabatan' => '4',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '5',
        'id_jabatan' => '4',
        'id_unitbagian' => '49',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '5',
        'id_jabatan' => '5',
        'id_unitbagian' => '49',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '5',
        'id_jabatan' => '5',
        'id_unitbagian' => '50',
        'formasi_jabatan' => '7',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '5',
        'id_jabatan' => '3',
        'id_unitbagian' => '51',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '5',
        'id_jabatan' => '4',
        'id_unitbagian' => '52',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '5',
        'id_jabatan' => '5',
        'id_unitbagian' => '52',
        'formasi_jabatan' => '5',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '5',
        'id_jabatan' => '4',
        'id_unitbagian' => '53',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '5',
        'id_jabatan' => '5',
        'id_unitbagian' => '53',
        'formasi_jabatan' => '4',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '6',
        'id_jabatan' => '2',
        'id_unitbagian' => '54',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '6',
        'id_jabatan' => '3',
        'id_unitbagian' => '55',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '6',
        'id_jabatan' => '4',
        'id_unitbagian' => '56',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '6',
        'id_jabatan' => '5',
        'id_unitbagian' => '56',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '6',
        'id_jabatan' => '4',
        'id_unitbagian' => '57',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '6',
        'id_jabatan' => '5',
        'id_unitbagian' => '57',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '6',
        'id_jabatan' => '3',
        'id_unitbagian' => '58',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '6',
        'id_jabatan' => '4',
        'id_unitbagian' => '59',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '6',
        'id_jabatan' => '5',
        'id_unitbagian' => '59',
        'formasi_jabatan' => '4',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '6',
        'id_jabatan' => '4',
        'id_unitbagian' => '60',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '6',
        'id_jabatan' => '5',
        'id_unitbagian' => '60',
        'formasi_jabatan' => '3',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '6',
        'id_jabatan' => '4',
        'id_unitbagian' => '61',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '6',
        'id_jabatan' => '5',
        'id_unitbagian' => '61',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '6',
        'id_jabatan' => '3',
        'id_unitbagian' => '62',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '6',
        'id_jabatan' => '4',
        'id_unitbagian' => '63',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '6',
        'id_jabatan' => '5',
        'id_unitbagian' => '63',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '6',
        'id_jabatan' => '4',
        'id_unitbagian' => '64',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '6',
        'id_jabatan' => '5',
        'id_unitbagian' => '64',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '7',
        'id_jabatan' => '2',
        'id_unitbagian' => '65',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '7',
        'id_jabatan' => '3',
        'id_unitbagian' => '66',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '7',
        'id_jabatan' => '4',
        'id_unitbagian' => '67',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '7',
        'id_jabatan' => '5',
        'id_unitbagian' => '67',
        'formasi_jabatan' => '4',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '7',
        'id_jabatan' => '4',
        'id_unitbagian' => '68',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '7',
        'id_jabatan' => '5',
        'id_unitbagian' => '68',
        'formasi_jabatan' => '4',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '7',
        'id_jabatan' => '4',
        'id_unitbagian' => '69',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '7',
        'id_jabatan' => '5',
        'id_unitbagian' => '69',
        'formasi_jabatan' => '4',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '7',
        'id_jabatan' => '3',
        'id_unitbagian' => '70',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '7',
        'id_jabatan' => '4',
        'id_unitbagian' => '71',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '7',
        'id_jabatan' => '5',
        'id_unitbagian' => '71',
        'formasi_jabatan' => '3',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '7',
        'id_jabatan' => '4',
        'id_unitbagian' => '72',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '7',
        'id_jabatan' => '5',
        'id_unitbagian' => '72',
        'formasi_jabatan' => '3',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '7',
        'id_jabatan' => '4',
        'id_unitbagian' => '73',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '7',
        'id_jabatan' => '5',
        'id_unitbagian' => '73',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '7',
        'id_jabatan' => '5',
        'id_unitbagian' => '74',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '8',
        'id_jabatan' => '2',
        'id_unitbagian' => '75',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '8',
        'id_jabatan' => '3',
        'id_unitbagian' => '76',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '8',
        'id_jabatan' => '4',
        'id_unitbagian' => '77',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '8',
        'id_jabatan' => '5',
        'id_unitbagian' => '77',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '8',
        'id_jabatan' => '4',
        'id_unitbagian' => '78',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '8',
        'id_jabatan' => '5',
        'id_unitbagian' => '79',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '8',
        'id_jabatan' => '5',
        'id_unitbagian' => '80',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '8',
        'id_jabatan' => '4',
        'id_unitbagian' => '81',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '8',
        'id_jabatan' => '5',
        'id_unitbagian' => '82',
        'formasi_jabatan' => '3',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '8',
        'id_jabatan' => '4',
        'id_unitbagian' => '83',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '8',
        'id_jabatan' => '5',
        'id_unitbagian' => '83',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '8',
        'id_jabatan' => '3',
        'id_unitbagian' => '84',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '8',
        'id_jabatan' => '4',
        'id_unitbagian' => '85',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '8',
        'id_jabatan' => '5',
        'id_unitbagian' => '86',
        'formasi_jabatan' => '7',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '8',
        'id_jabatan' => '4',
        'id_unitbagian' => '87',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '8',
        'id_jabatan' => '5',
        'id_unitbagian' => '88',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '8',
        'id_jabatan' => '4',
        'id_unitbagian' => '89',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '8',
        'id_jabatan' => '5',
        'id_unitbagian' => '89',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '8',
        'id_jabatan' => '3',
        'id_unitbagian' => '90',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '8',
        'id_jabatan' => '4',
        'id_unitbagian' => '91',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '8',
        'id_jabatan' => '5',
        'id_unitbagian' => '92',
        'formasi_jabatan' => '4',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '8',
        'id_jabatan' => '4',
        'id_unitbagian' => '93',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '8',
        'id_jabatan' => '5',
        'id_unitbagian' => '94',
        'formasi_jabatan' => '6',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '8',
        'id_jabatan' => '5',
        'id_unitbagian' => '95',
        'formasi_jabatan' => '4',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '8',
        'id_jabatan' => '5',
        'id_unitbagian' => '96',
        'formasi_jabatan' => '6',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '8',
        'id_jabatan' => '5',
        'id_unitbagian' => '97',
        'formasi_jabatan' => '3',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '8',
        'id_jabatan' => '4',
        'id_unitbagian' => '98',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '8',
        'id_jabatan' => '5',
        'id_unitbagian' => '99',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '1',
        'id_jabatan' => '6',
        'id_unitbagian' => '100',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '9',
        'id_jabatan' => '2',
        'id_unitbagian' => '101',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '9',
        'id_jabatan' => '3',
        'id_unitbagian' => '102',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '9',
        'id_jabatan' => '4',
        'id_unitbagian' => '103',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '9',
        'id_jabatan' => '5',
        'id_unitbagian' => '103',
        'formasi_jabatan' => '12',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '9',
        'id_jabatan' => '4',
        'id_unitbagian' => '104',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '9',
        'id_jabatan' => '5',
        'id_unitbagian' => '104',
        'formasi_jabatan' => '5',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '9',
        'id_jabatan' => '3',
        'id_unitbagian' => '105',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '9',
        'id_jabatan' => '4',
        'id_unitbagian' => '106',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '9',
        'id_jabatan' => '5',
        'id_unitbagian' => '106',
        'formasi_jabatan' => '4',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '9',
        'id_jabatan' => '4',
        'id_unitbagian' => '107',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '9',
        'id_jabatan' => '5',
        'id_unitbagian' => '107',
        'formasi_jabatan' => '4',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '10',
        'id_jabatan' => '2',
        'id_unitbagian' => '108',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '10',
        'id_jabatan' => '3',
        'id_unitbagian' => '109',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '10',
        'id_jabatan' => '4',
        'id_unitbagian' => '110',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '10',
        'id_jabatan' => '5',
        'id_unitbagian' => '110',
        'formasi_jabatan' => '5',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '10',
        'id_jabatan' => '4',
        'id_unitbagian' => '111',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '10',
        'id_jabatan' => '5',
        'id_unitbagian' => '111',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '10',
        'id_jabatan' => '3',
        'id_unitbagian' => '112',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '10',
        'id_jabatan' => '4',
        'id_unitbagian' => '113',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '10',
        'id_jabatan' => '5',
        'id_unitbagian' => '113',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '10',
        'id_jabatan' => '5',
        'id_unitbagian' => '114',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '10',
        'id_jabatan' => '4',
        'id_unitbagian' => '115',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '10',
        'id_jabatan' => '5',
        'id_unitbagian' => '115',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '11',
        'id_jabatan' => '2',
        'id_unitbagian' => '116',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '11',
        'id_jabatan' => '3',
        'id_unitbagian' => '117',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '11',
        'id_jabatan' => '4',
        'id_unitbagian' => '118',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '11',
        'id_jabatan' => '5',
        'id_unitbagian' => '118',
        'formasi_jabatan' => '3',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '11',
        'id_jabatan' => '4',
        'id_unitbagian' => '119',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '11',
        'id_jabatan' => '5',
        'id_unitbagian' => '119',
        'formasi_jabatan' => '3',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '11',
        'id_jabatan' => '3',
        'id_unitbagian' => '120',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '11',
        'id_jabatan' => '4',
        'id_unitbagian' => '121',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '11',
        'id_jabatan' => '5',
        'id_unitbagian' => '121',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '11',
        'id_jabatan' => '4',
        'id_unitbagian' => '122',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '11',
        'id_jabatan' => '5',
        'id_unitbagian' => '122',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '1',
        'id_jabatan' => '6',
        'id_unitbagian' => '123',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '12',
        'id_jabatan' => '2',
        'id_unitbagian' => '124',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '12',
        'id_jabatan' => '3',
        'id_unitbagian' => '125',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '12',
        'id_jabatan' => '4',
        'id_unitbagian' => '125',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '12',
        'id_jabatan' => '5',
        'id_unitbagian' => '125',
        'formasi_jabatan' => '3',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '12',
        'id_jabatan' => '4',
        'id_unitbagian' => '126',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '12',
        'id_jabatan' => '5',
        'id_unitbagian' => '126',
        'formasi_jabatan' => '4',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '12',
        'id_jabatan' => '3',
        'id_unitbagian' => '127',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '12',
        'id_jabatan' => '4',
        'id_unitbagian' => '128',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '12',
        'id_jabatan' => '5',
        'id_unitbagian' => '128',
        'formasi_jabatan' => '3',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '12',
        'id_jabatan' => '4',
        'id_unitbagian' => '129',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '12',
        'id_jabatan' => '5',
        'id_unitbagian' => '129',
        'formasi_jabatan' => '3',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '13',
        'id_jabatan' => '2',
        'id_unitbagian' => '130',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '13',
        'id_jabatan' => '3',
        'id_unitbagian' => '131',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '13',
        'id_jabatan' => '4',
        'id_unitbagian' => '132',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '13',
        'id_jabatan' => '5',
        'id_unitbagian' => '132',
        'formasi_jabatan' => '4',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '13',
        'id_jabatan' => '4',
        'id_unitbagian' => '133',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '13',
        'id_jabatan' => '5',
        'id_unitbagian' => '133',
        'formasi_jabatan' => '4',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '13',
        'id_jabatan' => '3',
        'id_unitbagian' => '134',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '13',
        'id_jabatan' => '4',
        'id_unitbagian' => '135',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '13',
        'id_jabatan' => '5',
        'id_unitbagian' => '135',
        'formasi_jabatan' => '3',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '13',
        'id_jabatan' => '4',
        'id_unitbagian' => '136',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '13',
        'id_jabatan' => '5',
        'id_unitbagian' => '136',
        'formasi_jabatan' => '3',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '14',
        'id_jabatan' => '2',
        'id_unitbagian' => '137',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '14',
        'id_jabatan' => '8',
        'id_unitbagian' => '138',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '14',
        'id_jabatan' => '9',
        'id_unitbagian' => '139',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '14',
        'id_jabatan' => '5',
        'id_unitbagian' => '139',
        'formasi_jabatan' => '3',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '14',
        'id_jabatan' => '9',
        'id_unitbagian' => '140',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '14',
        'id_jabatan' => '5',
        'id_unitbagian' => '140',
        'formasi_jabatan' => '3',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '14',
        'id_jabatan' => '8',
        'id_unitbagian' => '141',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '14',
        'id_jabatan' => '9',
        'id_unitbagian' => '142',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '14',
        'id_jabatan' => '5',
        'id_unitbagian' => '142',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '14',
        'id_jabatan' => '9',
        'id_unitbagian' => '143',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '14',
        'id_jabatan' => '5',
        'id_unitbagian' => '143',
        'formasi_jabatan' => '3',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '14',
        'id_jabatan' => '8',
        'id_unitbagian' => '144',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '14',
        'id_jabatan' => '9',
        'id_unitbagian' => '145',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '14',
        'id_jabatan' => '5',
        'id_unitbagian' => '145',
        'formasi_jabatan' => '3',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '14',
        'id_jabatan' => '9',
        'id_unitbagian' => '146',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '14',
        'id_jabatan' => '5',
        'id_unitbagian' => '146',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '14',
        'id_jabatan' => '8',
        'id_unitbagian' => '147',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '14',
        'id_jabatan' => '9',
        'id_unitbagian' => '148',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '14',
        'id_jabatan' => '5',
        'id_unitbagian' => '148',
        'formasi_jabatan' => '3',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '15',
        'id_jabatan' => '10',
        'id_unitbagian' => '149',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '15',
        'id_jabatan' => '11',
        'id_unitbagian' => '149',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '15',
        'id_jabatan' => '12',
        'id_unitbagian' => '149',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '16',
        'id_jabatan' => '10',
        'id_unitbagian' => '150',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '16',
        'id_jabatan' => '11',
        'id_unitbagian' => '150',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '16',
        'id_jabatan' => '12',
        'id_unitbagian' => '150',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '17',
        'id_jabatan' => '10',
        'id_unitbagian' => '151',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '17',
        'id_jabatan' => '11',
        'id_unitbagian' => '151',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '17',
        'id_jabatan' => '12',
        'id_unitbagian' => '151',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '18',
        'id_jabatan' => '10',
        'id_unitbagian' => '152',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '18',
        'id_jabatan' => '11',
        'id_unitbagian' => '152',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '18',
        'id_jabatan' => '12',
        'id_unitbagian' => '152',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '13',
        'id_unitbagian' => '153',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '4',
        'id_unitbagian' => '154',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '5',
        'id_unitbagian' => '154',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '5',
        'id_unitbagian' => '155',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '14',
        'id_unitbagian' => '156',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '4',
        'id_unitbagian' => '157',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '5',
        'id_unitbagian' => '157',
        'formasi_jabatan' => '6',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '4',
        'id_unitbagian' => '158',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '15',
        'id_unitbagian' => '158',
        'formasi_jabatan' => '6',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '14',
        'id_unitbagian' => '159',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '4',
        'id_unitbagian' => '160',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '5',
        'id_unitbagian' => '160',
        'formasi_jabatan' => '4',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '4',
        'id_unitbagian' => '161',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '5',
        'id_unitbagian' => '161',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '5',
        'id_unitbagian' => '162',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '16',
        'id_unitbagian' => '163',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '17',
        'id_unitbagian' => '163',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '18',
        'id_unitbagian' => '163',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '17',
        'id_unitbagian' => '164',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '18',
        'id_unitbagian' => '164',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '16',
        'id_unitbagian' => '165',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '17',
        'id_unitbagian' => '165',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '18',
        'id_unitbagian' => '165',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '16',
        'id_unitbagian' => '166',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '17',
        'id_unitbagian' => '166',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '18',
        'id_unitbagian' => '166',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '16',
        'id_unitbagian' => '167',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '17',
        'id_unitbagian' => '167',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '18',
        'id_unitbagian' => '167',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '16',
        'id_unitbagian' => '168',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '17',
        'id_unitbagian' => '168',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '18',
        'id_unitbagian' => '168',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '16',
        'id_unitbagian' => '169',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '17',
        'id_unitbagian' => '169',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '18',
        'id_unitbagian' => '169',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '16',
        'id_unitbagian' => '170',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '17',
        'id_unitbagian' => '170',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '18',
        'id_unitbagian' => '170',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '19',
        'id_unitbagian' => '171',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '19',
        'id_unitbagian' => '172',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '19',
        'id_unitbagian' => '173',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '19',
        'id_unitbagian' => '174',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '19',
        'id_unitbagian' => '175',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '19',
        'id_jabatan' => '19',
        'id_unitbagian' => '176',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '13',
        'id_unitbagian' => '177',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '4',
        'id_unitbagian' => '154',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '5',
        'id_unitbagian' => '154',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '5',
        'id_unitbagian' => '155',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '14',
        'id_unitbagian' => '156',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '4',
        'id_unitbagian' => '157',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '5',
        'id_unitbagian' => '157',
        'formasi_jabatan' => '4',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '4',
        'id_unitbagian' => '158',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '15',
        'id_unitbagian' => '158',
        'formasi_jabatan' => '3',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '14',
        'id_unitbagian' => '159',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '4',
        'id_unitbagian' => '160',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '5',
        'id_unitbagian' => '160',
        'formasi_jabatan' => '3',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '4',
        'id_unitbagian' => '161',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '5',
        'id_unitbagian' => '161',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '5',
        'id_unitbagian' => '162',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '16',
        'id_unitbagian' => '178',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '17',
        'id_unitbagian' => '178',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '18',
        'id_unitbagian' => '178',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '17',
        'id_unitbagian' => '179',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '18',
        'id_unitbagian' => '179',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '16',
        'id_unitbagian' => '180',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '17',
        'id_unitbagian' => '180',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '18',
        'id_unitbagian' => '180',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '16',
        'id_unitbagian' => '181',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '17',
        'id_unitbagian' => '181',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '18',
        'id_unitbagian' => '181',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '16',
        'id_unitbagian' => '182',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '17',
        'id_unitbagian' => '182',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '18',
        'id_unitbagian' => '182',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '16',
        'id_unitbagian' => '183',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '17',
        'id_unitbagian' => '183',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '18',
        'id_unitbagian' => '183',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '16',
        'id_unitbagian' => '184',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '17',
        'id_unitbagian' => '184',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '18',
        'id_unitbagian' => '184',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '19',
        'id_unitbagian' => '185',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '19',
        'id_unitbagian' => '186',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '19',
        'id_unitbagian' => '187',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '20',
        'id_jabatan' => '19',
        'id_unitbagian' => '188',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '13',
        'id_unitbagian' => '189',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '4',
        'id_unitbagian' => '154',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '5',
        'id_unitbagian' => '154',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '5',
        'id_unitbagian' => '155',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '14',
        'id_unitbagian' => '156',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '4',
        'id_unitbagian' => '157',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '5',
        'id_unitbagian' => '157',
        'formasi_jabatan' => '4',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '4',
        'id_unitbagian' => '158',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '15',
        'id_unitbagian' => '158',
        'formasi_jabatan' => '4',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '14',
        'id_unitbagian' => '159',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '4',
        'id_unitbagian' => '160',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '5',
        'id_unitbagian' => '160',
        'formasi_jabatan' => '4',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '4',
        'id_unitbagian' => '161',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '5',
        'id_unitbagian' => '161',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '5',
        'id_unitbagian' => '162',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '16',
        'id_unitbagian' => '190',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '17',
        'id_unitbagian' => '190',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '18',
        'id_unitbagian' => '190',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '17',
        'id_unitbagian' => '191',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '18',
        'id_unitbagian' => '191',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '16',
        'id_unitbagian' => '192',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '17',
        'id_unitbagian' => '192',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '18',
        'id_unitbagian' => '192',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '16',
        'id_unitbagian' => '193',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '17',
        'id_unitbagian' => '193',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '18',
        'id_unitbagian' => '193',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '16',
        'id_unitbagian' => '194',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '17',
        'id_unitbagian' => '194',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '18',
        'id_unitbagian' => '194',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '16',
        'id_unitbagian' => '195',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '17',
        'id_unitbagian' => '195',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '18',
        'id_unitbagian' => '195',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '16',
        'id_unitbagian' => '196',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '17',
        'id_unitbagian' => '196',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '18',
        'id_unitbagian' => '196',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '16',
        'id_unitbagian' => '197',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '17',
        'id_unitbagian' => '197',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '18',
        'id_unitbagian' => '197',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '19',
        'id_unitbagian' => '198',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '19',
        'id_unitbagian' => '199',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '19',
        'id_unitbagian' => '200',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '21',
        'id_jabatan' => '19',
        'id_unitbagian' => '201',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '22',
        'id_jabatan' => '13',
        'id_unitbagian' => '202',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '22',
        'id_jabatan' => '4',
        'id_unitbagian' => '154',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '22',
        'id_jabatan' => '5',
        'id_unitbagian' => '154',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '22',
        'id_jabatan' => '5',
        'id_unitbagian' => '155',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '22',
        'id_jabatan' => '14',
        'id_unitbagian' => '156',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '22',
        'id_jabatan' => '4',
        'id_unitbagian' => '157',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '22',
        'id_jabatan' => '5',
        'id_unitbagian' => '157',
        'formasi_jabatan' => '5',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '22',
        'id_jabatan' => '4',
        'id_unitbagian' => '158',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '22',
        'id_jabatan' => '15',
        'id_unitbagian' => '158',
        'formasi_jabatan' => '3',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '22',
        'id_jabatan' => '14',
        'id_unitbagian' => '159',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '22',
        'id_jabatan' => '4',
        'id_unitbagian' => '160',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '22',
        'id_jabatan' => '5',
        'id_unitbagian' => '160',
        'formasi_jabatan' => '4',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '22',
        'id_jabatan' => '4',
        'id_unitbagian' => '161',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '22',
        'id_jabatan' => '5',
        'id_unitbagian' => '161',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '22',
        'id_jabatan' => '5',
        'id_unitbagian' => '162',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '22',
        'id_jabatan' => '16',
        'id_unitbagian' => '203',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '22',
        'id_jabatan' => '17',
        'id_unitbagian' => '203',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '22',
        'id_jabatan' => '18',
        'id_unitbagian' => '203',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '22',
        'id_jabatan' => '17',
        'id_unitbagian' => '204',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '22',
        'id_jabatan' => '18',
        'id_unitbagian' => '204',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '22',
        'id_jabatan' => '16',
        'id_unitbagian' => '205',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '22',
        'id_jabatan' => '17',
        'id_unitbagian' => '205',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '22',
        'id_jabatan' => '18',
        'id_unitbagian' => '205',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '22',
        'id_jabatan' => '16',
        'id_unitbagian' => '206',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '22',
        'id_jabatan' => '17',
        'id_unitbagian' => '206',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '22',
        'id_jabatan' => '18',
        'id_unitbagian' => '206',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '22',
        'id_jabatan' => '16',
        'id_unitbagian' => '207',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '22',
        'id_jabatan' => '17',
        'id_unitbagian' => '207',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '22',
        'id_jabatan' => '18',
        'id_unitbagian' => '207',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '22',
        'id_jabatan' => '19',
        'id_unitbagian' => '208',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '22',
        'id_jabatan' => '19',
        'id_unitbagian' => '209',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '22',
        'id_jabatan' => '19',
        'id_unitbagian' => '210',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '23',
        'id_jabatan' => '13',
        'id_unitbagian' => '211',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '23',
        'id_jabatan' => '4',
        'id_unitbagian' => '154',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '23',
        'id_jabatan' => '5',
        'id_unitbagian' => '154',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '23',
        'id_jabatan' => '5',
        'id_unitbagian' => '155',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '23',
        'id_jabatan' => '14',
        'id_unitbagian' => '156',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '23',
        'id_jabatan' => '4',
        'id_unitbagian' => '157',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '23',
        'id_jabatan' => '5',
        'id_unitbagian' => '157',
        'formasi_jabatan' => '4',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '23',
        'id_jabatan' => '4',
        'id_unitbagian' => '158',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '23',
        'id_jabatan' => '15',
        'id_unitbagian' => '158',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '23',
        'id_jabatan' => '14',
        'id_unitbagian' => '159',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '23',
        'id_jabatan' => '4',
        'id_unitbagian' => '160',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '23',
        'id_jabatan' => '5',
        'id_unitbagian' => '160',
        'formasi_jabatan' => '3',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '23',
        'id_jabatan' => '4',
        'id_unitbagian' => '161',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '23',
        'id_jabatan' => '5',
        'id_unitbagian' => '161',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '23',
        'id_jabatan' => '5',
        'id_unitbagian' => '162',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '23',
        'id_jabatan' => '16',
        'id_unitbagian' => '212',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '23',
        'id_jabatan' => '17',
        'id_unitbagian' => '212',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '23',
        'id_jabatan' => '18',
        'id_unitbagian' => '212',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '23',
        'id_jabatan' => '16',
        'id_unitbagian' => '213',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '23',
        'id_jabatan' => '17',
        'id_unitbagian' => '213',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '23',
        'id_jabatan' => '18',
        'id_unitbagian' => '213',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '23',
        'id_jabatan' => '16',
        'id_unitbagian' => '214',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '23',
        'id_jabatan' => '17',
        'id_unitbagian' => '214',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '23',
        'id_jabatan' => '18',
        'id_unitbagian' => '214',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '23',
        'id_jabatan' => '16',
        'id_unitbagian' => '215',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '23',
        'id_jabatan' => '17',
        'id_unitbagian' => '215',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '23',
        'id_jabatan' => '18',
        'id_unitbagian' => '215',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '23',
        'id_jabatan' => '19',
        'id_unitbagian' => '216',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '23',
        'id_jabatan' => '19',
        'id_unitbagian' => '217',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '23',
        'id_jabatan' => '19',
        'id_unitbagian' => '218',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '23',
        'id_jabatan' => '19',
        'id_unitbagian' => '219',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '13',
        'id_unitbagian' => '220',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '4',
        'id_unitbagian' => '154',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '5',
        'id_unitbagian' => '154',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '5',
        'id_unitbagian' => '155',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '14',
        'id_unitbagian' => '156',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '4',
        'id_unitbagian' => '157',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '5',
        'id_unitbagian' => '157',
        'formasi_jabatan' => '5',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '4',
        'id_unitbagian' => '158',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '15',
        'id_unitbagian' => '158',
        'formasi_jabatan' => '5',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '14',
        'id_unitbagian' => '159',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '4',
        'id_unitbagian' => '160',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '5',
        'id_unitbagian' => '160',
        'formasi_jabatan' => '3',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '4',
        'id_unitbagian' => '161',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '5',
        'id_unitbagian' => '161',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '5',
        'id_unitbagian' => '162',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '16',
        'id_unitbagian' => '221',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '17',
        'id_unitbagian' => '221',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '18',
        'id_unitbagian' => '221',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '16',
        'id_unitbagian' => '222',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '17',
        'id_unitbagian' => '222',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '18',
        'id_unitbagian' => '222',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '16',
        'id_unitbagian' => '223',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '17',
        'id_unitbagian' => '223',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '18',
        'id_unitbagian' => '223',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '16',
        'id_unitbagian' => '224',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '17',
        'id_unitbagian' => '224',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '18',
        'id_unitbagian' => '224',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '16',
        'id_unitbagian' => '225',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '17',
        'id_unitbagian' => '225',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '18',
        'id_unitbagian' => '225',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '16',
        'id_unitbagian' => '226',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '17',
        'id_unitbagian' => '226',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '18',
        'id_unitbagian' => '226',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '19',
        'id_unitbagian' => '227',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '19',
        'id_unitbagian' => '228',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '19',
        'id_unitbagian' => '229',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '24',
        'id_jabatan' => '19',
        'id_unitbagian' => '230',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '13',
        'id_unitbagian' => '231',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '4',
        'id_unitbagian' => '154',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '5',
        'id_unitbagian' => '154',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '5',
        'id_unitbagian' => '155',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '14',
        'id_unitbagian' => '156',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '4',
        'id_unitbagian' => '157',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '5',
        'id_unitbagian' => '157',
        'formasi_jabatan' => '4',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '4',
        'id_unitbagian' => '158',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '15',
        'id_unitbagian' => '158',
        'formasi_jabatan' => '10',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '14',
        'id_unitbagian' => '159',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '4',
        'id_unitbagian' => '160',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '5',
        'id_unitbagian' => '160',
        'formasi_jabatan' => '3',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '4',
        'id_unitbagian' => '247',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '5',
        'id_unitbagian' => '161',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '5',
        'id_unitbagian' => '162',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '5',
        'id_unitbagian' => '248',
        'formasi_jabatan' => '2',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '16',
        'id_unitbagian' => '232',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '17',
        'id_unitbagian' => '232',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '18',
        'id_unitbagian' => '232',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '16',
        'id_unitbagian' => '233',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '17',
        'id_unitbagian' => '233',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '18',
        'id_unitbagian' => '233',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '16',
        'id_unitbagian' => '234',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '17',
        'id_unitbagian' => '234',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '18',
        'id_unitbagian' => '234',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '16',
        'id_unitbagian' => '235',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '17',
        'id_unitbagian' => '235',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '18',
        'id_unitbagian' => '235',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '16',
        'id_unitbagian' => '236',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '17',
        'id_unitbagian' => '236',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '18',
        'id_unitbagian' => '236',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '16',
        'id_unitbagian' => '237',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '17',
        'id_unitbagian' => '237',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '18',
        'id_unitbagian' => '237',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '16',
        'id_unitbagian' => '238',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '17',
        'id_unitbagian' => '238',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '18',
        'id_unitbagian' => '238',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '16',
        'id_unitbagian' => '239',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '17',
        'id_unitbagian' => '239',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '18',
        'id_unitbagian' => '239',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '19',
        'id_unitbagian' => '240',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '19',
        'id_unitbagian' => '241',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '19',
        'id_unitbagian' => '242',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '19',
        'id_unitbagian' => '243',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '19',
        'id_unitbagian' => '244',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '19',
        'id_unitbagian' => '245',
        'formasi_jabatan' => '1',
        ]);

        JabatanStruktural::create([
        'id_unitkerja' => '25',
        'id_jabatan' => '19',
        'id_unitbagian' => '246',
        'formasi_jabatan' => '1',
        ]);

    }
}
