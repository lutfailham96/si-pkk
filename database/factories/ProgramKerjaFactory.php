<?php

namespace Database\Factories;

use App\Models\ProgramKerja;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgramKerjaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProgramKerja::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'program_kerja' => $this->faker->name,
            'tujuan' => $this->faker->title,
            'waktu_mulai' => $this->faker->date(),
            'waktu_selesai' => $this->faker->date(),
            'tempat' => $this->faker->city,
            'sasaran' => $this->faker->address,
            'pelaksana' => $this->faker->randomElement(['POKJA I', 'POKJA II', 'POKJA III', 'POKJA IV']),
            'status' => $this->faker->boolean,
        ];
    }
}
