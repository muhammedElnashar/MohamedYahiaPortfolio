<?php

namespace Database\Seeders;

use Database\Seeders\SeoSpecialty\SallaSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeoSpecialtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            SallaSeeder::class,
        ]);
    }
}
