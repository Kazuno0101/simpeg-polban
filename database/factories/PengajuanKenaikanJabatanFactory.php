<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PengajuanKenaikanJabatan;
use App\Models\Dosen;
use App\Models\Jabatan;

class PengajuanKenaikanJabatanFactory extends Factory
{
    protected $model = PengajuanKenaikanJabatan::class;

    public function definition()
    {
        return [
            'dosen_id' => Dosen::factory(),
            'jabatan_asal_id' => Jabatan::factory(),
            'jabatan_tujuan_id' => Jabatan::factory(),
            'tanggal_pengajuan' => $this->faker->dateTime(),
            'alasan' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement(['ditolak', 'disetujui', 'diverifikasi', 'pending']),
            'tanggal_validasi' => $this->faker->dateTime(),
        ];
    }
}
