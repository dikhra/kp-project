<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ChildFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'anak_ke' => $this->faker->numberBetween(1, 5),
            'tanggal_lahir' => $this->faker->date,
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'no_kk' => $this->faker->numerify('############'),
            'nik' => $this->faker->numerify('############'),
            'nama' => $this->faker->name,
            'berat_badan' => $this->faker->randomFloat(2, 2, 5),
            'panjang_badan' => $this->faker->randomFloat(2, 40, 60),
            'nama_ortu' => $this->faker->name,
            'nik_ortu' => $this->faker->numerify('############'),
            'no_ortu' => $this->faker->phoneNumber,
            'alamat_lengkap' => $this->faker->address,
            'rt' => $this->faker->numerify('##'),
            'rw' => $this->faker->numerify('##'),
        ];
    }
}
