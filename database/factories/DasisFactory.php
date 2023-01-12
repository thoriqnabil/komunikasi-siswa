<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dasis>
 */
class DasisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => fake()->name(),
            'kelas' => fake()->numberBetween(10,12),
            'jurusan' => fake()->randomelement(['PPLG', 'ANIMASI', 'TJKT', 'BRF', 'TE']),
            'nisn' => fake()->randomNumber(9, true),
            'jeniskelamin' => fake()->randomelement(['laki laki', 'perempuan']),
            'alamat' => fake()->address(),
            'notelp' => fake()->randomNumber(),
            'email' => fake()->safeemail(),
            'password' => fake()->password(),
            'walikelas' => fake()->name(),
        ];
    }
}
