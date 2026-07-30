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

                'badge' => [
                    'en' => 'Certified SEO Expert — 6+ Years — 300+ Sites & Stores',
                    'ar' => 'خبير SEO معتمد — 6+ سنوات — 300+ موقع ومتجر',
                ],

                'first_name' => [
                    'en' => 'Mohamed',
                    'ar' => 'محمد',
                ],

                'last_name' => [
                    'en' => 'Yahia',
                    'ar' => 'يحيى'
                ],

                'position' => [
                    'en' => 'SEO Manager',
                    'ar' => 'مدير تحسين محركات البحث',
                ],

                'title' => [
                    'en' => '& AI Search Expert',
                    'ar' => '& خبير البحث بالذكاء الاصطناعي',
                ],

                'hero_role' => [
                  'en'=>  'SEO Consultant | AEO | GEO | AI Search | Technical SEO | Ecommerce SEO | ASO | CRO | SEM',
                  'ar'=>  'SEO Consultant | AEO | GEO | AI Search | Technical SEO | Ecommerce SEO | ASO | CRO | SEM',
                ],
                'description' =>[
                   'en'=> 'I help businesses across Saudi Arabia, UAE, Egypt and the Arab world increase visibility, organic traffic, leads and revenue through data-driven SEO strategies, AI Search Optimization, Technical SEO, and scalable growth systems.',
                   'ar'=> 'أبني وأطوّر المواقع والمتاجر الإلكترونية وفق معايير السيو لتحقيق أعلى عائد استثماري من البحث العضوي. نمو مستدام.. نجاح تقدر تعتمد عليه.',
                                ],
                'whatsapp_url' => 'https://wa.me/201123269452',

                'portfolio_url' => 'https://mostaql.com/u/Mohamed_Yahia7',

                'avatar' => null,

                'card_name' => [
                    'en'=>'Mohamed Yahia',
                    'ar'=>'محمد يحيى',
                    ],

                'card_role' => [
                 'en'=>   'SEO & AI Search Expert',
                 'ar'=>   'أخصائي في تحسين محركات البحث',
                ],
                'projects_count' => 300,

                'years_count' => 6,

                'completion_count' => 100,

                'rating_count' => 5.0,

                'mostaql_projects' => [
                   'en'=>  '300+ Projects',
                   'ar'=>  '300+ مشروع',
                    ],
                'meta_title' =>['en'=>'meta'],
                'meta_description' => ['en'=>'meta'],
                'canonical_url' => 'meta@meta.com',
            ]
        );
    }
}
