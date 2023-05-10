<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Jabatan;

class JabatanFactory extends Factory
{
    protected $model = Jabatan::class;

    public function definition()
    {
        return [
            'nama' => $this->faker->randomElement(['dosen struktural', 'dosen fungsional'])
        ];
    }
}
