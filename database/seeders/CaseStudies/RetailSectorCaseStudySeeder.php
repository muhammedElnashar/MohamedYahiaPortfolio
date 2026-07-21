<?php

namespace Database\Seeders\CaseStudies;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class RetailSectorCaseStudySeeder extends Seeder
{
    public function run(): void
    {
        $case = CaseStudy::create([
            'slug' => 'retail-sector',

            'eyebrow' => [
                'en' => 'Case Study',
                'ar' => 'دراسة حالة',
            ],

            'title' => [
                'en' => '+310% Organic Growth',
                'ar' => 'نمو عضوي بنسبة +310%',
            ],

            'description' => [
                'en' => 'Technical SEO recovery project for a retail website suffering from years of accumulated technical debt.',
                'ar' => 'مشروع سيو تقني لإنقاذ موقع في قطاع التجزئة كان يعاني من سنوات من المشكلات التقنية المتراكمة.',
            ],

            'industry' => [
                'en' => 'Retail Sector',
                'ar' => 'قطاع التجزئة',
            ],

            'niche' => [
                'en' => 'Retail',
                'ar' => 'التجزئة',
            ],

            'period' => [
                'en' => '5 Months',
                'ar' => '5 أشهر',
            ],

            'focus' => [
                'en' => 'Technical SEO Complete',
                'ar' => 'السيو التقني الكامل',
            ],

            'challenge' => [
                'en' => 'The retail website suffered from years of accumulated technical issues, with only 40% of pages indexed and poor overall performance.',
                'ar' => 'كان موقع التجزئة يعاني من سنوات من المشكلات التقنية المتراكمة، ولم يكن يتم أرشفة سوى 40٪ من الصفحات.',
            ],

            'solution' => [
                'en' => 'Performed a full technical audit, fixed more than 1,200 issues, resolved crawl problems, restructured URLs, and optimized Core Web Vitals.',
                'ar' => 'تم تنفيذ تدقيق تقني شامل، وإصلاح أكثر من 1200 مشكلة، وحل مشاكل الزحف، وإعادة هيكلة الروابط، وتحسين Core Web Vitals.',
            ],

            'result' => [
                'en' => 'Indexation increased from 40% to 95%, restoring the website to full performance after years of technical debt.',
                'ar' => 'ارتفعت نسبة الأرشفة من 40٪ إلى 95٪ وعاد الموقع إلى كامل كفاءته بعد سنوات من الديون التقنية.',
            ],

            'metric' => '+310%',
            'metric_color' => 'orange',

            'clicks' => '11.2K',
            'impressions' => '870K',
            'ctr' => '1.3%',
            'position' => '10.8',

            'image' => null,

            'sort_order' => 16,
            'is_active' => true,
        ]);

        $case->growths()->createMany([
            [
                'icon' => 'trending-up',
                'value' => '+310%',
                'title' => [
                    'en' => 'Organic Traffic',
                    'ar' => 'الزيارات العضوية',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'bar-chart',
                'value' => '40 → 95%',
                'title' => [
                    'en' => 'Indexation Rate',
                    'ar' => 'نسبة الأرشفة',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'zap',
                'value' => '1,200+',
                'title' => [
                    'en' => 'Technical Errors Fixed',
                    'ar' => 'الأخطاء التقنية التي تم إصلاحها',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'target',
                'value' => 'All Green',
                'title' => [
                    'en' => 'Core Web Vitals',
                    'ar' => 'Core Web Vitals',
                ],
                'sort_order' => 4,
            ],
        ]);

        $case->improvements()->createMany([
            [
                'icon' => 'activity',
                'title' => [
                    'en' => 'Full Technical Audit',
                    'ar' => 'التدقيق التقني الكامل',
                ],
                'description' => [
                    'en' => 'Comprehensive technical audit with more than 1,200 issues identified and fixed.',
                    'ar' => 'تدقيق تقني شامل مع اكتشاف وإصلاح أكثر من 1200 مشكلة.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'target',
                'title' => [
                    'en' => 'Crawl Error Fixes',
                    'ar' => 'إصلاح أخطاء الزحف',
                ],
                'description' => [
                    'en' => 'Resolved crawling and indexing issues across the website.',
                    'ar' => 'حل جميع مشاكل الزحف والأرشفة بالموقع.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'link',
                'title' => [
                    'en' => 'URL Restructuring',
                    'ar' => 'إعادة هيكلة الروابط',
                ],
                'description' => [
                    'en' => 'Restructured URLs and fixed redirects to improve crawl efficiency.',
                    'ar' => 'إعادة هيكلة الروابط وإصلاح التحويلات لتحسين كفاءة الزحف.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'zap',
                'title' => [
                    'en' => 'Core Web Vitals',
                    'ar' => 'Core Web Vitals',
                ],
                'description' => [
                    'en' => 'Improved all Core Web Vitals metrics to Google Green status.',
                    'ar' => 'تحسين جميع مؤشرات Core Web Vitals للوصول إلى الحالة الخضراء.',
                ],
                'sort_order' => 4,
            ],
        ]);
    }
}
