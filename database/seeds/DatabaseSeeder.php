<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UnitKerjaSeeder::class);
        $this->call(JabatanSeeder::class);
        $this->call(UnitBagianSeeder::class);
        $this->call(JabatanStrukturalSeeder::class);
        $this->call(PegawaiSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(PendidikanSeeder::class);
        $this->call(RiwayatPendidikanSeeder::class);
        $this->call(SkillSeeder::class);
        $this->call(SkillPegawaiSeeder::class);
    }
}
