<?php

namespace Database\Factories;

use App\Models\KegiatanPelatihan;
use Illuminate\Database\Eloquent\Factories\Factory;

class KegiatanPelatihanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = KegiatanPelatihan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kegiatan_pelatihan' => $this->faker->city,
            'tempat' => $this->faker->address,
            'waktu' => $this->faker->dateTime,
            'pemateri' => $this->faker->name,
            'peserta' => $this->faker->country,
        ];
    }
}
