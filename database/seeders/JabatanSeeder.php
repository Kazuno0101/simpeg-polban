<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create jabatan yang ada di kampus baik struktural maupun fungsional
        Jabatan::create(['nama' => 'Rektor', "tipe" => "struktural"]);
        Jabatan::create(['nama' => 'Wakil Rektor', "tipe" => "struktural"]);
        Jabatan::create(['nama' => 'Dekan', "tipe" => "struktural"]);
        Jabatan::create(['nama' => 'Wakil Dekan', "tipe" => "struktural"]);
        Jabatan::create(['nama' => 'Ketua Jurusan', "tipe" => "struktural"]);
        Jabatan::create(['nama' => 'Wakil Ketua Jurusan', "tipe" => "struktural"]);
        Jabatan::create(['nama' => 'Ketua Prodi', "tipe" => "struktural"]);
        Jabatan::create(['nama' => 'Wakil Ketua Prodi', "tipe" => "struktural"]);
        Jabatan::create(['nama' => 'Kepala Biro', "tipe" => "struktural"]);
        Jabatan::create(['nama' => 'Kepala Bagian', "tipe" => "struktural"]);
        Jabatan::create(['nama' => 'Kepala Sub Bagian', "tipe" => "struktural"]);
        Jabatan::create(['nama' => 'Kepala Seksi', "tipe" => "struktural"]);
        Jabatan::create(['nama' => 'Kepala Sub Seksi', "tipe" => "struktural"]);
        Jabatan::create(['nama' => 'Kepala Laboratorium', "tipe" => "struktural"]);
        Jabatan::create(['nama' => 'Kepala Sub Laboratorium', "tipe" => "struktural"]);
        Jabatan::create(['nama' => 'Kepala Pusat', "tipe" => "struktural"]);
        Jabatan::create(['nama' => 'Kepala Sub Pusat', "tipe" => "struktural"]);
        Jabatan::create(['nama' => 'Kepala Unit', "tipe" => "struktural"]);
        Jabatan::create(['nama' => 'Kepala Sub Unit', "tipe" => "struktural"]);   
        
        Jabatan::create(['nama' => 'Dosen', "tipe" => "fungsional"]);
        Jabatan::create(['nama' => 'Asisten Ahli', "tipe" => "fungsional"]);
        Jabatan::create(['nama' => 'Lektor', "tipe" => "fungsional"]);
        Jabatan::create(['nama' => 'Lektor Kepala', "tipe" => "fungsional"]);
        Jabatan::create(['nama' => 'Guru Besar', "tipe" => "fungsional"]);
        Jabatan::create(['nama' => 'Profesor', "tipe" => "fungsional"]);
    }
}
