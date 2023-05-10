<?php

namespace Database\Seeders;

use App\Models\PengajuanKenaikanJabatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengajuanKenaikanJabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PengajuanKenaikanJabatan::factory()->count(50)->create();
    }
}
