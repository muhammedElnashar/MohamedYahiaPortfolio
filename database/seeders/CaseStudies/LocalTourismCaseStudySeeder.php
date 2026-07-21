<?php

namespace Database\Seeders\CaseStudies;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class LocalTourismCaseStudySeeder extends Seeder
{
    public function run(): void
    {
        $case = CaseStudy::create([
            'slug' => 'local-tourism',

            'eyebrow' => [
                'en' => 'Case Study',
                'ar' => 'دراسة حالة',
            ],

            'title' => [
                'en' => 'Page 1 Dominance',
                'ar' => 'الهيمنة على الصفحة الأولى',
            ],

            'description' => [
                'en' => 'SEO campaign focused on building topical authority and dominating page one for local tourism searches.',
                'ar' => 'حملة سيو لبناء Topical Authority والسيطرة على الصفحة الأولى في نتائج البحث السياحية المحلية.',
            ],

            'industry' => [
                'en' => 'Local Tourism',
                'ar' => 'السياحة المحلية',
            ],

            'niche' => [
                'en' => 'Tourism',
                'ar' => 'السياحة',
            ],

            'period' => [
                'en' => '4 Months',
                'ar' => '4 أشهر',
            ],

            'focus' => [
                'en' => 'Topical Authority',
                'ar' => 'Topical Authority',
            ],

            'challenge' => [
                'en' => 'A tourism website wanted to dominate page one for competitive seasonal keywords against stronger and older competitors.',
                'ar' => 'كان الموقع السياحي يسعى للسيطرة على الصفحة الأولى للكلمات الموسمية التنافسية رغم وجود منافسين أقوى وأقدم.',
            ],

            'solution' => [
                'en' => 'Built full topical authority, created seasonal content, performed content gap analysis, and optimized destination pages.',
                'ar' => 'تم بناء Topical Authority كاملة، وإنشاء محتوى موسمي، وتحليل فجوات المحتوى، وتحسين صفحات الوجهات السياحية.',
            ],

            'result' => [
                'en' => 'The website dominated page one for most niche tourism keywords while reducing ad dependency by 70%.',
                'ar' => 'أصبح الموقع يهيمن على الصفحة الأولى لمعظم الكلمات السياحية المتخصصة مع تقليل الاعتماد على الإعلانات بنسبة 70٪.',
            ],

            'metric' => 'Page 1',
            'metric_color' => 'green',

            'clicks' => '12.4K',
            'impressions' => '970K',
            'ctr' => '1.3%',
            'position' => '10.2',

            'image' => null,

            'sort_order' => 12,
            'is_active' => true,
        ]);

        $case->growths()->createMany([
            [
                'icon' => 'trending-up',
                'value' => '5+',
                'title' => [
                    'en' => 'Results per Keyword',
                    'ar' => 'نتائج لكل كلمة',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'bar-chart',
                'value' => '12',
                'title' => [
                    'en' => 'Featured Snippets',
                    'ar' => 'المقتطفات المميزة',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'zap',
                'value' => '+380%',
                'title' => [
                    'en' => 'Seasonal Traffic',
                    'ar' => 'الزيارات الموسمية',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'target',
                'value' => '-70%',
                'title' => [
                    'en' => 'Ad Dependence',
                    'ar' => 'الاعتماد على الإعلانات',
                ],
                'sort_order' => 4,
            ],
        ]);

        $case->improvements()->createMany([
            [
                'icon' => 'award',
                'title' => [
                    'en' => 'Topical Authority',
                    'ar' => 'Topical Authority',
                ],
                'description' => [
                    'en' => 'Built complete topical authority across the tourism niche.',
                    'ar' => 'بناء سلطة موضوعية كاملة في مجال السياحة.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'calendar',
                'title' => [
                    'en' => 'Seasonal Content',
                    'ar' => 'المحتوى الموسمي',
                ],
                'description' => [
                    'en' => 'Created specialized seasonal tourism content.',
                    'ar' => 'إنشاء محتوى سياحي متخصص للمواسم المختلفة.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'search',
                'title' => [
                    'en' => 'Competitor Analysis',
                    'ar' => 'تحليل المنافسين',
                ],
                'description' => [
                    'en' => 'Performed full content gap and competitor analysis.',
                    'ar' => 'تحليل فجوات المحتوى ودراسة المنافسين بشكل كامل.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'map-pin',
                'title' => [
                    'en' => 'Destination Pages',
                    'ar' => 'صفحات الوجهات',
                ],
                'description' => [
                    'en' => 'Optimized destination pages for maximum visibility.',
                    'ar' => 'تحسين صفحات الوجهات السياحية لتحقيق أعلى ظهور.',
                ],
                'sort_order' => 4,
            ],
        ]);
    }
}
