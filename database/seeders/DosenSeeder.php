<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // add dosen admin
        Dosen::create([
            'nama' => 'Admin',
            'email' => 'admin@polban.com',
            'password' => bcrypt('admin'),
            'nip' => '123456789012345678',
            'nidn' => '1234567890',
            'unit_kerja_id' => 1,
            'jabatan_fungsional_id' => 25,
            'jabatan_struktural_id' => 1,
        ]);
    }
}
