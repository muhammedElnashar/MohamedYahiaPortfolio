<?php

namespace Database\Seeders\CaseStudies;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class WomenHealthCaseStudySeeder extends Seeder
{
    public function run(): void
    {
        $case = CaseStudy::create([
            'slug' => 'womens-health',

            'eyebrow' => [
                'en' => 'Case Study',
                'ar' => 'دراسة حالة',
            ],

            'title' => [
                'en' => '+260% Impressions Growth',
                'ar' => 'زيادة مرات الظهور بنسبة +260%',
            ],

            'description' => [
                'en' => 'SEO campaign for a women’s health clinic focused on increasing visibility and attracting local patients.',
                'ar' => 'حملة سيو لعيادة صحة المرأة بهدف زيادة الظهور في نتائج البحث وجذب المرضى محليًا.',
            ],

            'industry' => [
                'en' => "Women's Health",
                'ar' => 'صحة المرأة',
            ],

            'niche' => [
                'en' => "Women's Health",
                'ar' => 'صحة المرأة',
            ],

            'period' => [
                'en' => '3 Months',
                'ar' => '3 أشهر',
            ],

            'focus' => [
                'en' => 'Content + Local',
                'ar' => 'المحتوى + السيو المحلي',
            ],

            'challenge' => [
                'en' => "Women's clinic struggled to reach local patients and had almost no visibility in local search results.",
                'ar' => 'كانت العيادة تعاني من ضعف الوصول إلى المرضى محليًا مع غياب شبه كامل عن نتائج البحث المحلية.',
            ],

            'solution' => [
                'en' => "Created trustworthy women's health content, optimized Google Business, improved local SEO, and implemented Medical Services Schema.",
                'ar' => 'تم إنشاء محتوى متخصص لصحة المرأة، وتحسين Google Business، وتنفيذ السيو المحلي، وإضافة Medical Services Schema.',
            ],

            'result' => [
                'en' => 'The clinic became one of the top choices for women in its area on Google within only three months.',
                'ar' => 'أصبحت العيادة من أفضل الخيارات للنساء في منطقتها على Google خلال ثلاثة أشهر فقط.',
            ],

            'metric' => '+260%',
            'metric_color' => 'blue',

            'clicks' => '9.1K',
            'impressions' => '740K',
            'ctr' => '1.2%',
            'position' => '12.3',

            'image' => null,

            'sort_order' => 6,
            'is_active' => true,
        ]);

        $case->growths()->createMany([
            [
                'icon' => 'trending-up',
                'value' => '+260%',
                'title' => [
                    'en' => 'Impressions',
                    'ar' => 'مرات الظهور',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'bar-chart',
                'value' => '+170%',
                'title' => [
                    'en' => 'Incoming Calls',
                    'ar' => 'المكالمات الواردة',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'target',
                'value' => '18 → 3',
                'title' => [
                    'en' => 'Position',
                    'ar' => 'الترتيب',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'zap',
                'value' => '+85%',
                'title' => [
                    'en' => 'CTR Boost',
                    'ar' => 'تحسن معدل النقر',
                ],
                'sort_order' => 4,
            ],
        ]);

        $case->improvements()->createMany([
            [
                'icon' => 'file-text',
                'title' => [
                    'en' => "Women's Health Content",
                    'ar' => 'محتوى صحة المرأة',
                ],
                'description' => [
                    'en' => 'Created trustworthy educational medical content for women.',
                    'ar' => 'إنشاء محتوى طبي تعليمي موثوق خاص بصحة المرأة.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'map-pin',
                'title' => [
                    'en' => 'Local SEO',
                    'ar' => 'السيو المحلي',
                ],
                'description' => [
                    'en' => 'Geographic targeting to reach nearby patients.',
                    'ar' => 'استهداف جغرافي للوصول إلى المرضى المحليين.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'briefcase',
                'title' => [
                    'en' => 'Google Business',
                    'ar' => 'Google Business',
                ],
                'description' => [
                    'en' => 'Profile optimization, enrichment, and review management.',
                    'ar' => 'تحسين الملف التجاري وإدارته وتعزيز التقييمات.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'code',
                'title' => [
                    'en' => 'Services Schema',
                    'ar' => 'Schema الخدمات',
                ],
                'description' => [
                    'en' => 'Implemented structured data for every medical service.',
                    'ar' => 'تطبيق البيانات المنظمة لكل خدمة طبية.',
                ],
                'sort_order' => 4,
            ],
        ]);
    }
}
