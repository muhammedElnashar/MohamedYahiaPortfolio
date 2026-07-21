<?php

namespace Database\Seeders\CaseStudies;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class ConstructionServicesCaseStudySeeder extends Seeder
{
    public function run(): void
    {
        $case = CaseStudy::create([
            'slug' => 'construction-services',

            'eyebrow' => [
                'en' => 'Case Study',
                'ar' => 'دراسة حالة',
            ],

            'title' => [
                'en' => '+180% Growth in 28 Days',
                'ar' => 'نمو بنسبة +180٪ خلال 28 يومًا',
            ],

            'description' => [
                'en' => 'Technical SEO sprint for a construction services company focused on quick measurable improvements.',
                'ar' => 'مشروع سيو تقني سريع لشركة خدمات إنشائية بهدف تحقيق نتائج ملموسة خلال فترة قصيرة.',
            ],

            'industry' => [
                'en' => 'Construction Services',
                'ar' => 'خدمات الإنشاءات',
            ],

            'niche' => [
                'en' => 'Construction',
                'ar' => 'الإنشاءات',
            ],

            'period' => [
                'en' => '28 Days',
                'ar' => '28 يومًا',
            ],

            'focus' => [
                'en' => 'Technical SEO Sprint',
                'ar' => 'سباق السيو التقني',
            ],

            'challenge' => [
                'en' => 'The construction company needed fast measurable improvements within one month. Critical technical SEO issues were preventing visibility in Google Search.',
                'ar' => 'كانت الشركة تحتاج إلى نتائج سريعة خلال شهر واحد، حيث كانت المشكلات التقنية الحرجة تمنع الموقع من الظهور في نتائج البحث.',
            ],

            'solution' => [
                'en' => 'Performed a complete technical audit, fixed 47 technical issues, optimized Core Web Vitals, improved Google Business, and strengthened local citations.',
                'ar' => 'تم تنفيذ تدقيق تقني شامل، وإصلاح 47 مشكلة تقنية، وتحسين Core Web Vitals، وتحسين Google Business، وتعزيز الاستشهادات المحلية.',
            ],

            'result' => [
                'en' => 'Achieved fast measurable SEO improvements in only 28 days with significantly stronger local visibility.',
                'ar' => 'تحقيق نتائج SEO ملموسة خلال 28 يومًا فقط مع تحسن كبير في الظهور المحلي.',
            ],

            'metric' => '+180%',
            'metric_color' => 'green',

            'clicks' => '3.8K',
            'impressions' => '290K',
            'ctr' => '1.3%',
            'position' => '14.5',

            'image' => null,

            'sort_order' => 10,
            'is_active' => true,
        ]);

        $case->growths()->createMany([
            [
                'icon' => 'trending-up',
                'value' => '+180%',
                'title' => [
                    'en' => 'Organic Traffic',
                    'ar' => 'الزيارات العضوية',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'bar-chart',
                'value' => '47',
                'title' => [
                    'en' => 'Errors Fixed',
                    'ar' => 'الأخطاء التي تم إصلاحها',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'zap',
                'value' => 'Green',
                'title' => [
                    'en' => 'Core Web Vitals',
                    'ar' => 'Core Web Vitals',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'target',
                'value' => '3-Pack',
                'title' => [
                    'en' => 'Google Maps',
                    'ar' => 'خرائط Google',
                ],
                'sort_order' => 4,
            ],
        ]);

        $case->improvements()->createMany([
            [
                'icon' => 'activity',
                'title' => [
                    'en' => 'Technical Error Fixes',
                    'ar' => 'إصلاح الأخطاء التقنية',
                ],
                'description' => [
                    'en' => 'Resolved 47 critical technical SEO issues within two days.',
                    'ar' => 'إصلاح 47 مشكلة تقنية حرجة خلال يومين.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'zap',
                'title' => [
                    'en' => 'Core Web Vitals',
                    'ar' => 'Core Web Vitals',
                ],
                'description' => [
                    'en' => 'Improved LCP, CLS and INP to Google Green thresholds.',
                    'ar' => 'تحسين مؤشرات LCP وCLS وINP للوصول إلى المستوى الأخضر.',
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
                    'en' => 'Complete business profile optimization.',
                    'ar' => 'تحسين ملف النشاط التجاري بالكامل.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'globe',
                'title' => [
                    'en' => 'Local Citations',
                    'ar' => 'الاستشهادات المحلية',
                ],
                'description' => [
                    'en' => 'Construction directory citations and local authority building.',
                    'ar' => 'إضافة الموقع إلى أدلة الإنشاءات وبناء الموثوقية المحلية.',
                ],
                'sort_order' => 4,
            ],
        ]);
    }
}
