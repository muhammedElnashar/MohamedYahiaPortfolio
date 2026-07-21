<?php

namespace Database\Seeders\CaseStudies;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class OnlineRetailCaseStudySeeder extends Seeder
{
    public function run(): void
    {
        $case = CaseStudy::create([
            'slug' => 'online-retail',

            'eyebrow' => [
                'en' => 'Case Study',
                'ar' => 'دراسة حالة',
            ],

            'title' => [
                'en' => '+390% Quarter-over-Quarter',
                'ar' => '+390% مقارنة ربع سنوية',
            ],

            'description' => [
                'en' => 'SEO sprint for an online retail store focused on measurable quarter-over-quarter business growth.',
                'ar' => 'مشروع SEO لمتجر إلكتروني ركز على تحقيق نمو واضح مقارنة بنفس الفترة السابقة.',
            ],

            'industry' => [
                'en' => 'Online Retail',
                'ar' => 'التجارة الإلكترونية',
            ],

            'niche' => [
                'en' => 'E-commerce',
                'ar' => 'التجارة الإلكترونية',
            ],

            'period' => [
                'en' => '3 Months Comparison',
                'ar' => '3 أشهر مقارنة',
            ],

            'focus' => [
                'en' => 'Full SEO Sprint',
                'ar' => 'SEO Sprint كامل',
            ],

            'challenge' => [
                'en' => 'Online store wanted to accurately measure SEO performance after previous growth had stagnated.',
                'ar' => 'المتجر الإلكتروني كان يحتاج إلى تحقيق نمو واضح بعد فترة من ثبات النتائج.',
            ],

            'solution' => [
                'en' => 'Executed intensive on-page optimization, commercial content creation, category SEO, and a targeted backlink sprint.',
                'ar' => 'تم تنفيذ تحسينات On-Page مكثفة، ومحتوى تجاري، وتحسين صفحات التصنيفات، وحملة روابط خارجية.',
            ],

            'result' => [
                'en' => '390% growth compared to the same period with more than 20 pages exceeding 1,000 monthly clicks.',
                'ar' => 'تحقيق نمو 390٪ مقارنة بنفس الفترة مع أكثر من 20 صفحة تجاوزت 1000 نقرة شهريًا.',
            ],

            'metric' => '+390%',
            'metric_color' => 'orange',

            'clicks' => '14.8K',
            'impressions' => '1.15M',
            'ctr' => '1.3%',
            'position' => '10.5',

            'image' => null,

            'sort_order' => 24,
            'is_active' => true,
        ]);

        $case->growths()->createMany([
            [
                'icon' => 'trending-up',
                'value' => '+390%',
                'title' => [
                    'en' => 'vs Same Period',
                    'ar' => 'مقارنة بنفس الفترة',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'bar-chart',
                'value' => '20+',
                'title' => [
                    'en' => 'Pages at 1K+ Clicks',
                    'ar' => 'صفحات تجاوزت 1000 نقرة',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'zap',
                'value' => '+280%',
                'title' => [
                    'en' => 'Revenue Growth',
                    'ar' => 'نمو الإيرادات',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'target',
                'value' => '30+',
                'title' => [
                    'en' => 'Competitor KWs Won',
                    'ar' => 'كلمات مفتاحية فازت على المنافسين',
                ],
                'sort_order' => 4,
            ],
        ]);

        $case->improvements()->createMany([
            [
                'icon' => 'activity',
                'title' => [
                    'en' => 'On-Page Sprint',
                    'ar' => 'On-Page Sprint',
                ],
                'description' => [
                    'en' => 'Intensive comprehensive on-page improvements.',
                    'ar' => 'تحسينات On-Page مكثفة وشاملة.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'shopping-cart',
                'title' => [
                    'en' => 'Commercial Content',
                    'ar' => 'المحتوى التجاري',
                ],
                'description' => [
                    'en' => 'Commercial content targeting buying intent.',
                    'ar' => 'محتوى تجاري يستهدف نية الشراء.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'grid',
                'title' => [
                    'en' => 'Category SEO',
                    'ar' => 'Category SEO',
                ],
                'description' => [
                    'en' => 'SEO optimization for primary category pages.',
                    'ar' => 'تحسين صفحات التصنيفات الرئيسية.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'link',
                'title' => [
                    'en' => 'Backlink Sprint',
                    'ar' => 'Backlink Sprint',
                ],
                'description' => [
                    'en' => 'Focused backlink acquisition campaign.',
                    'ar' => 'حملة مركزة لبناء الروابط الخارجية.',
                ],
                'sort_order' => 4,
            ],
        ]);
    }
}
