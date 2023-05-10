<?php

namespace Database\Seeders;

use App\Models\PengajuanPemberhentian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengajuanPemberhentianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PengajuanPemberhentian::factory()->count(50)->create();
    }
}
