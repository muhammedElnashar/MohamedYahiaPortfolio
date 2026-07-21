<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeoTools extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tools = [
            'Ahrefs',
            'SEMrush',
            'Screaming Frog',
            'Google Search Console',
            'Google Analytics 4',
            'Google Tag Manager',
            'Looker Studio',
            'Sitebulb',
            'Surfer SEO',
            'ChatGPT',
            'Claude AI',
            'Gemini',
            'Majestic SEO',
            'Moz Pro',
            'Google PageSpeed',
            'GTmetrix',
            'Search Atlas',
            'Rank Math',
            'Yoast SEO',
            'Microsoft Clarity',
            'Hotjar',
            'Google Trends',
            'Python',
            'Answer The Public',
            'Perplexity AI',
            'Bing Webmaster',
        ];
        foreach ($tools as  $title) {
            \App\Models\SeoTools::updateOrCreate(
                [
                    'title' => [
                        'en' => $title,
                        'ar' => $title,
                    ],

                ]
            );
        }
    }
}
