<?php

namespace Database\Seeders;

use Database\Seeders\Blog\BlogCategorySeeder;
use Database\Seeders\Blog\BlogTagSeeder;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            BlogCategorySeeder::class,
            \Database\Seeders\Blog\BlogSeeder::class,
            BlogTagSeeder::class,
        ]);
    }
}
