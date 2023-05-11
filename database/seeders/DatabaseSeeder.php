<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // run jabatan seeder
        $this->call(JabatanSeeder::class);
        // run unit kerja seeder
        $this->call(UnitKerjaSeeder::class);
        // run dosen seeder
        $this->call(DosenSeeder::class);
    }
}
