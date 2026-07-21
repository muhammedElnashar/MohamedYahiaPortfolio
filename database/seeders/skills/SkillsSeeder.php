<?php

namespace Database\Seeders\skills;

use App\Models\Skill;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SkillsSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            'Technical SEO',
            'On-Page SEO',
            'Off-Page SEO',
            'Link Building',
            'Local SEO',
            'International SEO',
            'E-commerce SEO',
            'Topical Authority',
            'Entity SEO',
            'Programmatic SEO',
            'YouTube SEO',
            'ASO',
            'CRO',
            'SEM / Google Ads',
            'GA4 / Analytics',
            'Looker Studio',
            'Python Automation',
            'GSC Analysis',
            'Competitor Analysis',
            'Site Migration SEO',
            'Page Speed Optimization',
            'Featured Snippets',
            'Content Strategy',
            'B2B SEO',
            'SEO for SaaS',
            'Hreflang / Multilingual SEO',
            'Log File Analysis',
            'Crawl Budget Optimization',
            'E-E-A-T Optimization',
        ];

        foreach ($skills as $index => $title) {
            Skill::updateOrCreate(
                ['slug' => Str::slug($title)],
                [
                    'title' => [
                        'en' => $title,
                        'ar' => $title,
                    ],
                    'icon' => 'circle',
                    'has_page' => false,
                    'sort_order' => $index + 5,
                ]
            );
        }
    }
}
