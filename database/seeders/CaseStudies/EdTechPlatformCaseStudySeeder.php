<?php

namespace Database\Seeders\CaseStudies;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class EdTechPlatformCaseStudySeeder extends Seeder
{
    public function run(): void
    {
        $case = CaseStudy::create([
            'slug' => 'edtech-platform',

            'eyebrow' => [
                'en' => 'Case Study',
                'ar' => 'دراسة حالة',
            ],

            'title' => [
                'en' => '+145% Growth in 28 Days',
                'ar' => 'نمو بنسبة +145٪ خلال 28 يومًا',
            ],

            'description' => [
                'en' => 'Quick SEO wins for a large EdTech platform focused on improving key pages within one month.',
                'ar' => 'تحسينات SEO سريعة لمنصة تعليمية كبيرة لتحقيق نتائج واضحة خلال شهر واحد.',
            ],

            'industry' => [
                'en' => 'EdTech Platform',
                'ar' => 'منصة تعليمية',
            ],

            'niche' => [
                'en' => 'Education',
                'ar' => 'التعليم',
            ],

            'period' => [
                'en' => '28 Days',
                'ar' => '28 يومًا',
            ],

            'focus' => [
                'en' => 'Quick Wins SEO',
                'ar' => 'تحسينات SEO سريعة',
            ],

            'challenge' => [
                'en' => 'A large EdTech platform needed measurable SEO improvements on its highest-traffic pages within only one month.',
                'ar' => 'احتاجت منصة تعليمية كبيرة إلى تحقيق نتائج SEO ملموسة على أهم الصفحات خلال شهر واحد فقط.',
            ],

            'solution' => [
                'en' => 'Optimized metadata, improved CTR, implemented educational Schema, enhanced PageSpeed, and fixed crawl issues on strategic pages.',
                'ar' => 'تم تحسين العناوين والأوصاف، ورفع CTR، وتطبيق Educational Schema، وتحسين PageSpeed، وإصلاح مشاكل الزحف في الصفحات الأساسية.',
            ],

            'result' => [
                'en' => 'Fast and measurable SEO improvements within 28 days on the most strategic pages.',
                'ar' => 'تحقيق نتائج SEO سريعة وملموسة خلال 28 يومًا على أهم صفحات المنصة.',
            ],

            'metric' => '+145%',
            'metric_color' => 'green',

            'clicks' => '6.8K',
            'impressions' => '540K',
            'ctr' => '1.3%',
            'position' => '14.1',

            'image' => null,

            'sort_order' => 8,
            'is_active' => true,
        ]);

        $case->growths()->createMany([
            [
                'icon' => 'trending-up',
                'value' => '+145%',
                'title' => [
                    'en' => 'Organic Clicks',
                    'ar' => 'النقرات العضوية',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'bar-chart',
                'value' => '1.2 → 3.8%',
                'title' => [
                    'en' => 'CTR',
                    'ar' => 'معدل النقر',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'zap',
                'value' => '10+',
                'title' => [
                    'en' => 'Pages in Top 2',
                    'ar' => 'صفحات في أول نتيجتين',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'target',
                'value' => '+90%',
                'title' => [
                    'en' => 'Mobile Traffic',
                    'ar' => 'زيارات الجوال',
                ],
                'sort_order' => 4,
            ],
        ]);

        $case->improvements()->createMany([
            [
                'icon' => 'tag',
                'title' => [
                    'en' => 'Meta Optimization',
                    'ar' => 'تحسين الـ Meta',
                ],
                'description' => [
                    'en' => 'Optimized titles and meta descriptions to improve CTR.',
                    'ar' => 'تحسين العناوين والأوصاف لرفع معدل النقر.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'code',
                'title' => [
                    'en' => 'Educational Schema',
                    'ar' => 'Educational Schema',
                ],
                'description' => [
                    'en' => 'Implemented Course, FAQ and Event Schema.',
                    'ar' => 'تطبيق Course وFAQ وEvent Schema.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'zap',
                'title' => [
                    'en' => 'Page Speed',
                    'ar' => 'سرعة الموقع',
                ],
                'description' => [
                    'en' => 'Improved loading speed for high-traffic pages.',
                    'ar' => 'تحسين سرعة تحميل الصفحات الأعلى زيارة.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'activity',
                'title' => [
                    'en' => 'Technical Fixes',
                    'ar' => 'الإصلاحات التقنية',
                ],
                'description' => [
                    'en' => 'Resolved duplicate content and crawl issues.',
                    'ar' => 'إصلاح مشاكل الزحف والمحتوى المكرر.',
                ],
                'sort_order' => 4,
            ],
        ]);
    }
}
