<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PengajuanPemberhentian;
use App\Models\Dosen;

class PengajuanPemberhentianFactory extends Factory
{
    protected $model = PengajuanPemberhentian::class;

    public function definition()
    {
        return [
            'dosen_id' => Dosen::factory(),
            'tanggal_pengajuan' => $this->faker->dateTime(),
            'alasan' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement(['ditolak', 'disetujui', 'diverifikasi', 'pending']),
            'tanggal_validasi' => $this->faker->dateTime(),
        ];
    }
}
