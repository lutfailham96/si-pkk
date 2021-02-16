<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
//        return [
//            'name' => $this->faker->name,
//            'email' => $this->faker->unique()->safeEmail,
//            'email_verified_at' => now(),
//            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//            'remember_token' => Str::random(10),
//        ];

        return [
            'nama' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'username' => $this->faker->userName,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'nik' => $this->faker->randomDigit,
            'kota' => $this->faker->city,
            'tanggal_lahir' => $this->faker->date(),
            'jenis_kelamin' => $this->faker->randomElement(['pria', 'wanita']),
            'alamat' => $this->faker->address,
            'telp' => $this->faker->phoneNumber,
            'jabatan' => $this->faker->randomElement(['admin', 'anggota']),
        ];
    }
}
