<?php

namespace Database\Seeders\CaseStudies;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class SpecialtyClinicsCaseStudySeeder extends Seeder
{
    public function run(): void
    {
        $case = CaseStudy::create([
            'slug' => 'specialty-clinics',

            'eyebrow' => [
                'en' => 'Case Study',
                'ar' => 'دراسة حالة',
            ],

            'title' => [
                'en' => '+195% Organic Traffic Growth',
                'ar' => 'زيادة الزيارات العضوية بنسبة +195%',
            ],

            'description' => [
                'en' => 'Multi-location SEO campaign for a specialty clinic group focused on local visibility and patient acquisition.',
                'ar' => 'حملة سيو متعددة الفروع لمجموعة عيادات تخصصية بهدف زيادة الظهور المحلي وجذب المرضى.',
            ],

            'industry' => [
                'en' => 'Specialty Clinics',
                'ar' => 'العيادات التخصصية',
            ],

            'niche' => [
                'en' => 'Health',
                'ar' => 'الصحة',
            ],

            'period' => [
                'en' => '4 Months',
                'ar' => '4 أشهر',
            ],

            'focus' => [
                'en' => 'Multi-Location Local SEO',
                'ar' => 'السيو المحلي متعدد الفروع',
            ],

            'challenge' => [
                'en' => 'A specialty clinic chain needed stronger digital visibility in a highly competitive market. Every branch required independent local optimization.',
                'ar' => 'كانت سلسلة العيادات تحتاج إلى تعزيز حضورها الرقمي في سوق شديد المنافسة، حيث احتاج كل فرع إلى تحسين محلي مستقل.',
            ],

            'solution' => [
                'en' => 'Implemented multi-location Local SEO, specialty landing pages, trusted medical backlinks, Google Business optimization, and local directory citations.',
                'ar' => 'تم تنفيذ استراتيجية سيو محلي متعددة الفروع، وإنشاء صفحات لكل تخصص، وبناء روابط طبية موثوقة، وتحسين Google Business، وإضافة الاستشهادات المحلية.',
            ],

            'result' => [
                'en' => 'The clinic group became the primary local reference for specialized medical services across all branches.',
                'ar' => 'أصبحت مجموعة العيادات المرجع الأول محليًا للخدمات الطبية التخصصية في جميع الفروع.',
            ],

            'metric' => '+195%',
            'metric_color' => 'orange',

            'clicks' => '5.1K',
            'impressions' => '812K',
            'ctr' => '0.6%',
            'position' => '22.1',

            'image' => null,

            'sort_order' => 5,
            'is_active' => true,
        ]);

        $case->growths()->createMany([
            [
                'icon' => 'trending-up',
                'value' => '+195%',
                'title' => [
                    'en' => 'Organic Traffic',
                    'ar' => 'الزيارات العضوية',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'bar-chart',
                'value' => '+40%',
                'title' => [
                    'en' => 'Conversion Rate',
                    'ar' => 'معدل التحويل',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'zap',
                'value' => 'Top 3',
                'title' => [
                    'en' => 'Google Maps',
                    'ar' => 'خرائط Google',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'target',
                'value' => '20 → 5',
                'title' => [
                    'en' => 'Avg. Position',
                    'ar' => 'متوسط الترتيب',
                ],
                'sort_order' => 4,
            ],
        ]);

        $case->improvements()->createMany([
            [
                'icon' => 'map-pin',
                'title' => [
                    'en' => 'Multi-Location SEO',
                    'ar' => 'السيو متعدد الفروع',
                ],
                'description' => [
                    'en' => 'Independent optimization for every clinic location.',
                    'ar' => 'تحسين مستقل لكل فرع من فروع العيادات.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'layers',
                'title' => [
                    'en' => 'Specialty Pages',
                    'ar' => 'صفحات التخصصات',
                ],
                'description' => [
                    'en' => 'Dedicated landing page for every medical specialty.',
                    'ar' => 'إنشاء صفحة مخصصة لكل تخصص طبي.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'link',
                'title' => [
                    'en' => 'Medical Backlinks',
                    'ar' => 'الروابط الطبية',
                ],
                'description' => [
                    'en' => 'Authority backlinks from trusted medical platforms.',
                    'ar' => 'الحصول على روابط من منصات طبية موثوقة.',
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
                    'en' => 'Medical directory and local citation building.',
                    'ar' => 'إضافة الموقع إلى الأدلة الطبية والاستشهادات المحلية.',
                ],
                'sort_order' => 4,
            ],
        ]);
    }
}
