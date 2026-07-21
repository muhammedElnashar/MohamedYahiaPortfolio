<?php

namespace Database\Seeders\CaseStudies;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class HealthcareCaseStudySeeder extends Seeder
{
    public function run(): void
    {
        $case = CaseStudy::create([
            'slug' => 'healthcare',

            'eyebrow' => [
                'en' => 'Case Study',
                'ar' => 'دراسة حالة',
            ],

            'title' => [
                'en' => 'Top 3 Competitive Rankings',
                'ar' => 'الوصول إلى المراكز الثلاثة الأولى',
            ],

            'description' => [
                'en' => 'Local SEO campaign for a healthcare clinic focused on improving visibility and patient acquisition.',
                'ar' => 'حملة سيو محلي لمركز طبي بهدف رفع الظهور في نتائج البحث وزيادة عدد المرضى.',
            ],

            'industry' => [
                'en' => 'Healthcare',
                'ar' => 'الرعاية الصحية',
            ],

            'niche' => [
                'en' => 'Medical',
                'ar' => 'طبي',
            ],

            'period' => [
                'en' => '5 Months',
                'ar' => '5 أشهر',
            ],

            'focus' => [
                'en' => 'Local + E-E-A-T',
                'ar' => 'Local + E-E-A-T',
            ],

            'challenge' => [
                'en' => 'Medical clinic in Riyadh had almost no local visibility. Competitors dominated the search results for important medical keywords.',
                'ar' => 'كان المركز الطبي في الرياض يعاني من ضعف الظهور المحلي، بينما كان المنافسون يسيطرون على نتائج البحث للكلمات الطبية المهمة.',
            ],

            'solution' => [
                'en' => 'Implemented a specialized medical SEO strategy including E-E-A-T improvements, Local SEO, Google Business optimization, Medical Schema, and trustworthy medical content.',
                'ar' => 'تم تنفيذ استراتيجية سيو طبي متخصصة تضمنت تحسين E-E-A-T، والسيو المحلي، وتحسين Google Business، وتطبيق Medical Schema، وإنشاء محتوى طبي موثوق.',
            ],

            'result' => [
                'en' => 'The clinic moved from almost no local visibility to ranking #1 in Riyadh for several high-value medical services.',
                'ar' => 'انتقل المركز من غياب شبه كامل في نتائج البحث المحلية إلى المركز الأول في الرياض لعدد من أهم الخدمات الطبية.',
            ],

            'metric' => 'Top 3',
            'metric_color' => 'green',

            'clicks' => '7.3K',
            'impressions' => '653K',
            'ctr' => '1.1%',
            'position' => '8.4',

            'image' => null,

            'sort_order' => 4,
            'is_active' => true,
        ]);

        $case->growths()->createMany([
            [
                'icon' => 'trending-up',
                'value' => '+185%',
                'title' => [
                    'en' => 'Organic Clicks',
                    'ar' => 'النقرات العضوية',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'bar-chart',
                'value' => '+220%',
                'title' => [
                    'en' => 'Bookings',
                    'ar' => 'الحجوزات',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'zap',
                'value' => '+48%',
                'title' => [
                    'en' => 'CTR',
                    'ar' => 'معدل النقر',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'target',
                'value' => '15 → 3',
                'title' => [
                    'en' => 'Avg. Position',
                    'ar' => 'متوسط الترتيب',
                ],
                'sort_order' => 4,
            ],
        ]);

        $case->improvements()->createMany([
            [
                'icon' => 'shield',
                'title' => [
                    'en' => 'Medical E-E-A-T',
                    'ar' => 'Medical E-E-A-T',
                ],
                'description' => [
                    'en' => 'Strengthened medical credibility, expertise, and trust signals.',
                    'ar' => 'تعزيز الموثوقية والخبرة والإشارات الخاصة بالمحتوى الطبي.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'map-pin',
                'title' => [
                    'en' => 'Medical Local SEO',
                    'ar' => 'السيو المحلي الطبي',
                ],
                'description' => [
                    'en' => 'Improved local visibility for the clinic in Riyadh.',
                    'ar' => 'تحسين الظهور المحلي للعيادة في مدينة الرياض.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'file-text',
                'title' => [
                    'en' => 'Medical Content',
                    'ar' => 'المحتوى الطبي',
                ],
                'description' => [
                    'en' => 'Created trustworthy medical pages supported by evidence.',
                    'ar' => 'إنشاء صفحات طبية موثوقة ومدعومة بالمصادر.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'code',
                'title' => [
                    'en' => 'Medical Schema',
                    'ar' => 'Medical Schema',
                ],
                'description' => [
                    'en' => 'Implemented complete MedicalClinic Schema markup.',
                    'ar' => 'تطبيق MedicalClinic Schema بشكل كامل.',
                ],
                'sort_order' => 4,
            ],
        ]);
    }
}
