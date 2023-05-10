<?php

namespace Database\Seeders;

use App\Models\PengajuanMutasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengajuanMutasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PengajuanMutasi::factory()->count(50)->create();
    }
}
