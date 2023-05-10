<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dosen;
use App\Models\UnitKerja;
use App\Models\Jabatan;

class DosenFactory extends Factory
{
    protected $model = Dosen::class;

    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'unit_kerja_id' => UnitKerja::factory(),
            'jabatan_id' => Jabatan::factory(),
        ];
    }
}
