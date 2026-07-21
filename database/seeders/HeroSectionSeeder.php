<?php

namespace Database\Seeders;

use App\Models\HeroSection;
use Illuminate\Database\Seeder;

class HeroSectionSeeder extends Seeder
{
    public function run(): void
    {
        HeroSection::updateOrCreate(
            ['id' => 1],
            [

                'badge' => 'SEO & AI Search Expert',

                'first_name' => 'Mohamed',

                'last_name' => 'Yahia',

                'position' => 'SEO Consultant',

                'title' => 'Helping Businesses Dominate Google, AI Search & Organic Growth',

                'hero_role' => 'SEO • AEO • GEO • AI Search • Programmatic SEO',

                'description' => 'I help businesses across Saudi Arabia, UAE, Egypt and the Arab world increase visibility, organic traffic, leads and revenue through data-driven SEO strategies, AI Search Optimization, Technical SEO, and scalable growth systems.',

                'whatsapp_url' => 'https://wa.me/201000000000',

                'portfolio_url' => '/results',

                'avatar' => null,

                'card_name' => 'Mohamed Yahia',

                'card_role' => 'SEO & AI Search Expert',

                'projects_count' => 300,

                'years_count' => 6,

                'completion_count' => 100,

                'rating_count' => 5.0,

                'mostaql_projects' => '300+ Projects',
            ]
        );
    }
}
