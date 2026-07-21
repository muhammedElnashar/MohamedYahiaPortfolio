<?php

namespace Database\Seeders;

use App\Models\HeroSkill;
use Illuminate\Database\Seeder;

class HeroSkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [

            ['name' => 'SEO', 'is_highlighted' => true],
            ['name' => 'AEO', 'is_highlighted' => true],
            ['name' => 'GEO', 'is_highlighted' => true],
            ['name' => 'AI Search', 'is_highlighted' => true],

            ['name' => 'Technical SEO', 'is_highlighted' => false],
            ['name' => 'Ecommerce SEO', 'is_highlighted' => false],
            ['name' => 'Local SEO', 'is_highlighted' => false],
            ['name' => 'Programmatic SEO', 'is_highlighted' => true],
            ['name' => 'YouTube SEO', 'is_highlighted' => false],
            ['name' => 'Entity SEO', 'is_highlighted' => true],
            ['name' => 'International SEO', 'is_highlighted' => false],

            ['name' => 'SEM', 'is_highlighted' => false],
            ['name' => 'CRO', 'is_highlighted' => false],
            ['name' => 'ASO', 'is_highlighted' => false],
            ['name' => 'Backlinks', 'is_highlighted' => false],
            ['name' => 'AI Automation', 'is_highlighted' => false],

        ];

        foreach ($skills as $index => $skill) {

            HeroSkill::updateOrCreate(
                ['name' => $skill['name']],
                [
                    'is_highlighted' => $skill['is_highlighted'],
                    'sort_order' => $index + 1,
                ]
            );
        }
    }
}
