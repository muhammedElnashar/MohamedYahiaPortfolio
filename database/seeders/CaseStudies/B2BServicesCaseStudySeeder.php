<?php

namespace Database\Seeders\CaseStudies;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class B2BServicesCaseStudySeeder extends Seeder
{
    public function run(): void
    {
        $case = CaseStudy::create([
            'slug' => 'b2b-services',

            'eyebrow' => [
                'en' => 'Case Study',
                'ar' => 'دراسة حالة',
            ],

            'title' => [
                'en' => '+175% Growth in 60 Days',
                'ar' => 'نمو بنسبة +175٪ خلال 60 يومًا',
            ],

            'description' => [
                'en' => 'Quick Wins SEO project for a B2B services company focused on rapid measurable improvements.',
                'ar' => 'مشروع Quick Wins SEO لشركة خدمات B2B بهدف تحقيق نتائج سريعة وملموسة.',
            ],

            'industry' => [
                'en' => 'B2B Services',
                'ar' => 'خدمات B2B',
            ],

            'niche' => [
                'en' => 'B2B',
                'ar' => 'B2B',
            ],

            'period' => [
                'en' => '2 Months',
                'ar' => 'شهرين',
            ],

            'focus' => [
                'en' => 'Quick Wins + Technical',
                'ar' => 'Quick Wins + السيو التقني',
            ],

            'challenge' => [
                'en' => 'The B2B company wanted measurable SEO improvements within two months. Slow page speed and poorly optimized service pages limited organic growth.',
                'ar' => 'كانت الشركة ترغب في تحقيق نتائج SEO خلال شهرين فقط، لكن بطء الموقع وضعف صفحات الخدمات كانا يحدان من النمو العضوي.',
            ],

            'solution' => [
                'en' => 'Executed a Quick Wins audit, optimized the main service pages, improved LCP from 4.2s to 1.8s, and implemented Business Schema.',
                'ar' => 'تم تنفيذ تدقيق Quick Wins، وتحسين صفحات الخدمات الرئيسية، وتقليل LCP من 4.2 إلى 1.8 ثانية، وتطبيق Business Schema.',
            ],

            'result' => [
                'en' => 'Achieved fast documented SEO improvements while building a strong technical foundation for sustainable long-term growth.',
                'ar' => 'تحقيق نتائج SEO موثقة خلال فترة قصيرة مع بناء أساس تقني قوي للنمو المستدام.',
            ],

            'metric' => '+175%',
            'metric_color' => 'blue',

            'clicks' => '5.8K',
            'impressions' => '460K',
            'ctr' => '1.3%',
            'position' => '15.2',

            'image' => null,

            'sort_order' => 17,
            'is_active' => true,
        ]);

        $case->growths()->createMany([
            [
                'icon' => 'trending-up',
                'value' => '+175%',
                'title' => [
                    'en' => 'Organic Traffic',
                    'ar' => 'الزيارات العضوية',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'bar-chart',
                'value' => '4.2 → 1.8s',
                'title' => [
                    'en' => 'LCP Speed',
                    'ar' => 'سرعة LCP',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'zap',
                'value' => '+55%',
                'title' => [
                    'en' => 'Engagement Time',
                    'ar' => 'مدة التفاعل',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'target',
                'value' => 'Top 3',
                'title' => [
                    'en' => 'Service Pages',
                    'ar' => 'صفحات الخدمات',
                ],
                'sort_order' => 4,
            ],
        ]);

        $case->improvements()->createMany([
            [
                'icon' => 'trending-up',
                'title' => [
                    'en' => 'Quick Wins Audit',
                    'ar' => 'تدقيق Quick Wins',
                ],
                'description' => [
                    'en' => 'Identified and executed the highest-impact SEO improvements.',
                    'ar' => 'تحديد وتنفيذ أسرع التحسينات ذات التأثير الأكبر.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'layers',
                'title' => [
                    'en' => 'Service Pages',
                    'ar' => 'صفحات الخدمات',
                ],
                'description' => [
                    'en' => 'Optimized the most important service pages for search intent.',
                    'ar' => 'تحسين صفحات الخدمات الرئيسية بما يتوافق مع نية البحث.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'zap',
                'title' => [
                    'en' => 'LCP Optimization',
                    'ar' => 'تحسين LCP',
                ],
                'description' => [
                    'en' => 'Reduced Largest Contentful Paint from 4.2s to 1.8s.',
                    'ar' => 'خفض LCP من 4.2 ثانية إلى 1.8 ثانية.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'code',
                'title' => [
                    'en' => 'Business Schema',
                    'ar' => 'Business Schema',
                ],
                'description' => [
                    'en' => 'Implemented complete Business Schema across the website.',
                    'ar' => 'تطبيق Business Schema بشكل كامل على الموقع.',
                ],
                'sort_order' => 4,
            ],
        ]);
    }
}
