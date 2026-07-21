<?php

namespace Database\Seeders\CaseStudies;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class DigitalServicesCaseStudySeeder extends Seeder
{
    public function run(): void
    {
        $case = CaseStudy::create([
            'slug' => 'digital-services',

            'eyebrow' => [
                'en' => 'Case Study',
                'ar' => 'دراسة حالة',
            ],

            'title' => [
                'en' => '+220% Traffic Growth',
                'ar' => 'نمو الزيارات بنسبة +220%',
            ],

            'description' => [
                'en' => 'Complete Technical SEO project that transformed a slow website into a high-performing search asset.',
                'ar' => 'مشروع سيو تقني متكامل حوّل موقعًا بطيئًا إلى أصل رقمي قوي في نتائج البحث.',
            ],

            'industry' => [
                'en' => 'Digital Services',
                'ar' => 'الخدمات الرقمية',
            ],

            'niche' => [
                'en' => 'Digital',
                'ar' => 'الخدمات الرقمية',
            ],

            'period' => [
                'en' => '4 Months',
                'ar' => '4 أشهر',
            ],

            'focus' => [
                'en' => 'Full Technical SEO',
                'ar' => 'السيو التقني الكامل',
            ],

            'challenge' => [
                'en' => 'The digital services website suffered from severe technical SEO issues including slow loading, weak indexation, and poor rankings.',
                'ar' => 'كان موقع الخدمات الرقمية يعاني من مشاكل تقنية كبيرة مثل بطء الموقع وضعف الأرشفة وتراجع الترتيب.',
            ],

            'solution' => [
                'en' => 'Executed a full Technical SEO audit, optimized page speed, increased indexation from 35% to 92%, and implemented complete Schema.',
                'ar' => 'تم تنفيذ تدقيق تقني شامل، وتحسين سرعة الموقع، ورفع الأرشفة من 35٪ إلى 92٪، وتطبيق Schema بالكامل.',
            ],

            'result' => [
                'en' => 'Technical improvements unlocked sustainable organic growth, increasing traffic by 220% within four months.',
                'ar' => 'أدت التحسينات التقنية إلى نمو عضوي مستدام وارتفاع الزيارات بنسبة 220٪ خلال أربعة أشهر.',
            ],

            'metric' => '+220%',
            'metric_color' => 'green',

            'clicks' => '6.1K',
            'impressions' => '490K',
            'ctr' => '1.2%',
            'position' => '14.8',

            'image' => null,

            'sort_order' => 22,
            'is_active' => true,
        ]);

        $case->growths()->createMany([
            [
                'icon' => 'trending-up',
                'value' => '+220%',
                'title' => [
                    'en' => 'Organic Traffic',
                    'ar' => 'الزيارات العضوية',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'bar-chart',
                'value' => '6.8 → 1.4s',
                'title' => [
                    'en' => 'LCP',
                    'ar' => 'LCP',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'zap',
                'value' => '35 → 92%',
                'title' => [
                    'en' => 'Indexation Rate',
                    'ar' => 'نسبة الأرشفة',
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
                    'en' => 'Full Technical SEO',
                    'ar' => 'السيو التقني الكامل',
                ],
                'description' => [
                    'en' => 'Comprehensive technical audit with all major issues resolved.',
                    'ar' => 'تدقيق تقني شامل مع إصلاح جميع المشكلات الأساسية.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'zap',
                'title' => [
                    'en' => 'Page Speed',
                    'ar' => 'سرعة الموقع',
                ],
                'description' => [
                    'en' => 'Improved Largest Contentful Paint from 6.8s to 1.4s.',
                    'ar' => 'تحسين LCP من 6.8 ثانية إلى 1.4 ثانية.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'check-circle',
                'title' => [
                    'en' => 'Indexation Fix',
                    'ar' => 'تحسين الأرشفة',
                ],
                'description' => [
                    'en' => 'Raised indexation rate from 35% to 92%.',
                    'ar' => 'رفع نسبة الأرشفة من 35٪ إلى 92٪.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'code',
                'title' => [
                    'en' => 'Full Schema',
                    'ar' => 'Schema الكامل',
                ],
                'description' => [
                    'en' => 'Implemented complete structured data across the website.',
                    'ar' => 'تطبيق البيانات المنظمة بالكامل على الموقع.',
                ],
                'sort_order' => 4,
            ],
        ]);
    }
}
