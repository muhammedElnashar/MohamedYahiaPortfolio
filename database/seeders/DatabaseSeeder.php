<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\skills\AiSearchSeeder;
use Database\Seeders\skills\CoreWebSeeder;
use Database\Seeders\skills\KeywordResearchSeeder;
use Database\Seeders\skills\SchemaMarkupSeeder;
use Database\Seeders\skills\SkillsSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('Admin@123'),
        ]);
        $this->call([
            HeroSkillSeeder::class,
            HeroSectionSeeder::class,
            HomeFactItemSeeder::class,
            ServiceCategorySeeder::class,
            FullSeoAuditSeeder::class,
            TechnicalSeoSeeder::class,
            CoreWebSeeder::class,
            SchemaMarkupSeeder::class,
            AiSearchSeeder::class,
            KeywordResearchSeeder::class,
            SkillsSeeder::class,
            SeoTools::class,
            PlatformSeeder::class,
            HomeSectionHeadingSeeder::class,
            CaseStudiesSeeder::class,

        ]);
    }
}
