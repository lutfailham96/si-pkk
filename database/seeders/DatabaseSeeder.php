<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\ProgramKerja;
use App\Models\KegiatanPelatihan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(20)->create();
        ProgramKerja::factory(20)->create();
        KegiatanPelatihan::factory(20)->create();
    }
}
