<?php

namespace Database\Seeders;

use App\Models\UnitKerja;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create unit kerja yang ada di kampus polban
        UnitKerja::create(['nama' => 'Jurusan Teknik Sipil']);
        UnitKerja::create(['nama' => 'Jurusan Teknik Mesin']);
        UnitKerja::create(['nama' => 'Jurusan Teknik Elektro']);
        UnitKerja::create(['nama' => 'Jurusan Teknik Kimia']);
        UnitKerja::create(['nama' => 'Jurusan Teknik Komputer dan Informatika']);
        UnitKerja::create(['nama' => 'Jurusan Refrigerasi dan Tata Udara']);
        UnitKerja::create(['nama' => 'Jurusan Konversi Energi']);
    }
}
