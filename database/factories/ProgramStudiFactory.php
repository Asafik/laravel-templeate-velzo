<?php

namespace Database\Factories;

use App\Models\ProgramStudi;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgramStudiFactory extends Factory
{
    protected $model = ProgramStudi::class;

    public function definition()
    {
        return [
            'kode' => $this->faker->bothify('COD###'),
            'program_studi' => 'Program Studi ' . $this->faker->numberBetween(1, 10),
            'status' => $this->faker->randomElement(['Aktif', 'Non-Aktif']),
            'jenjang' => $this->faker->randomElement(['S1', 'S2']),
            'verifikasi_status' => $this->faker->randomElement(['Terverifikasi', 'Belum Terverifikasi']),
        ];
    }
}
