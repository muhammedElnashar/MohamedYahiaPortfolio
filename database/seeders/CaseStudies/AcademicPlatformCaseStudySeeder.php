<?php

namespace Database\Seeders\CaseStudies;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class AcademicPlatformCaseStudySeeder extends Seeder
{
    public function run(): void
    {
        $case = CaseStudy::create([
            'slug' => 'academic-platform',

            'eyebrow' => [
                'en' => 'Case Study',
                'ar' => 'دراسة حالة',
            ],

            'title' => [
                'en' => '+320% Impressions Growth',
                'ar' => 'زيادة مرات الظهور بنسبة +320%',
            ],

            'description' => [
                'en' => 'Technical SEO project for a large academic platform focused on fixing duplicate content and improving indexation.',
                'ar' => 'مشروع سيو تقني لمنصة أكاديمية كبيرة يركز على إصلاح المحتوى المكرر وتحسين الأرشفة.',
            ],

            'industry' => [
                'en' => 'Academic Platform',
                'ar' => 'منصة أكاديمية',
            ],

            'niche' => [
                'en' => 'Academic',
                'ar' => 'أكاديمي',
            ],

            'period' => [
                'en' => '3 Months',
                'ar' => '3 أشهر',
            ],

            'focus' => [
                'en' => 'Technical SEO',
                'ar' => 'السيو التقني',
            ],

            'challenge' => [
                'en' => 'A large academic archive contained massive duplicate content, poor technical structure, and weak indexation, preventing search visibility.',
                'ar' => 'كانت المنصة الأكاديمية تحتوي على كمية كبيرة من المحتوى المكرر مع بنية تقنية ضعيفة مما أثر على الأرشفة والظهور في نتائج البحث.',
            ],

            'solution' => [
                'en' => 'Resolved duplicate content, restructured academic content, improved canonicalization, strengthened internal linking, and implemented FAQ Schema.',
                'ar' => 'تم حل مشاكل المحتوى المكرر، وإعادة هيكلة المحتوى، وتحسين Canonical، وتقوية الربط الداخلي، وتطبيق FAQ Schema.',
            ],

            'result' => [
                'en' => 'The academic archive became a strong SEO asset with more than 400 newly indexed pages and significant organic growth.',
                'ar' => 'تحولت المنصة إلى أصل قوي في نتائج البحث مع أرشفة أكثر من 400 صفحة جديدة وتحقيق نمو عضوي كبير.',
            ],

            'metric' => '+320%',
            'metric_color' => 'blue',

            'clicks' => '9.8K',
            'impressions' => '760K',
            'ctr' => '1.3%',
            'position' => '12.4',

            'image' => null,

            'sort_order' => 14,
            'is_active' => true,
        ]);

        $case->growths()->createMany([
            [
                'icon' => 'trending-up',
                'value' => '+320%',
                'title' => [
                    'en' => 'Impressions',
                    'ar' => 'مرات الظهور',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'bar-chart',
                'value' => '400+',
                'title' => [
                    'en' => 'New Pages Indexed',
                    'ar' => 'صفحات جديدة تمت أرشفتها',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'zap',
                'value' => '-80%',
                'title' => [
                    'en' => 'Duplicate Content',
                    'ar' => 'المحتوى المكرر',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'target',
                'value' => '+195%',
                'title' => [
                    'en' => 'Organic Traffic',
                    'ar' => 'الزيارات العضوية',
                ],
                'sort_order' => 4,
            ],
        ]);

        $case->improvements()->createMany([
            [
                'icon' => 'copy',
                'title' => [
                    'en' => 'Duplicate Content Fix',
                    'ar' => 'إصلاح المحتوى المكرر',
                ],
                'description' => [
                    'en' => 'Complete duplicate content cleanup across the platform.',
                    'ar' => 'حل جميع مشاكل المحتوى المكرر داخل المنصة.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'layout',
                'title' => [
                    'en' => 'Content Structuring',
                    'ar' => 'هيكلة المحتوى',
                ],
                'description' => [
                    'en' => 'Rebuilt the academic content structure for better indexing.',
                    'ar' => 'إعادة هيكلة المحتوى الأكاديمي لتحسين الأرشفة.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'link',
                'title' => [
                    'en' => 'Internal Linking',
                    'ar' => 'الربط الداخلي',
                ],
                'description' => [
                    'en' => 'Created a powerful internal linking network across the platform.',
                    'ar' => 'بناء شبكة ربط داخلي قوية بين الصفحات الأكاديمية.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'help-circle',
                'title' => [
                    'en' => 'FAQ Schema',
                    'ar' => 'FAQ Schema',
                ],
                'description' => [
                    'en' => 'Implemented FAQ Schema for common academic questions.',
                    'ar' => 'تطبيق FAQ Schema للأسئلة الأكاديمية الشائعة.',
                ],
                'sort_order' => 4,
            ],
        ]);
    }
}
