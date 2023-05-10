<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\UnitKerja;

class UnitKerjaFactory extends Factory
{
    protected $model = UnitKerja::class;

    public function definition()
    {
        return [
            'nama' => $this->faker->company()
        ];
    }
}
