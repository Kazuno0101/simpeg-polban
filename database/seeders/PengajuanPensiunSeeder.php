<?php

namespace Database\Seeders;

use App\Models\PengajuanPensiun;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengajuanPensiunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PengajuanPensiun::factory()->count(50)->create();
    }
}
