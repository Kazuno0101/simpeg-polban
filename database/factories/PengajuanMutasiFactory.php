<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PengajuanMutasi;
use App\Models\Dosen;
use App\Models\UnitKerja;

class PengajuanMutasiFactory extends Factory
{
    protected $model = PengajuanMutasi::class;

    public function definition()
    {
        return [
            'dosen_id' => Dosen::factory(),
            'unit_kerja_asal_id' => UnitKerja::factory(),
            'unit_kerja_tujuan_id' => UnitKerja::factory(),
            'tanggal_pengajuan' => $this->faker->dateTime(),
            'status' => $this->faker->randomElement(['ditolak', 'disetujui', 'diverifikasi', 'pending']),
            'tanggal_validasi' => $this->faker->dateTime(),
        ];
    }
}
