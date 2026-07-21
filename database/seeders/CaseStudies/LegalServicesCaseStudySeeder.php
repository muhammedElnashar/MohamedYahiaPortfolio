<?php

namespace Database\Seeders\CaseStudies;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class LegalServicesCaseStudySeeder extends Seeder
{
    public function run(): void
    {
        $case = CaseStudy::create([
            'slug' => 'legal-services',

            'eyebrow' => [
                'en' => 'Case Study',
                'ar' => 'دراسة حالة',
            ],

            'title' => [
                'en' => '+280% Local Visibility Growth',
                'ar' => 'زيادة الظهور المحلي بنسبة +280%',
            ],

            'description' => [
                'en' => 'Local SEO campaign for a legal services company focused on increasing visibility and qualified leads.',
                'ar' => 'حملة سيو محلي لمكتب خدمات قانونية بهدف زيادة الظهور وجذب العملاء المحتملين.',
            ],

            'industry' => [
                'en' => 'Legal Services',
                'ar' => 'الخدمات القانونية',
            ],

            'niche' => [
                'en' => 'Legal',
                'ar' => 'قانوني',
            ],

            'period' => [
                'en' => '4 Months',
                'ar' => '4 أشهر',
            ],

            'focus' => [
                'en' => 'Local SEO',
                'ar' => 'السيو المحلي',
            ],

            'challenge' => [
                'en' => 'Law firm with almost no local search visibility despite years of experience. Potential clients were finding competitors first.',
                'ar' => 'كان المكتب القانوني يفتقر إلى الظهور في نتائج البحث المحلية رغم سنوات الخبرة، وكان العملاء يصلون إلى المنافسين أولاً.',
            ],

            'solution' => [
                'en' => 'Implemented a complete Local SEO strategy including Google Business optimization, legal content creation, local citations, schema markup, and technical improvements.',
                'ar' => 'تم تنفيذ استراتيجية سيو محلي متكاملة شملت تحسين Google Business، وإنشاء محتوى قانوني، وبناء الاستشهادات المحلية، وتطبيق Schema، وتحسينات تقنية.',
            ],

            'result' => [
                'en' => 'Moved from page 5+ to the first position for high-value local legal keywords within four months.',
                'ar' => 'الانتقال من الصفحة الخامسة إلى المركز الأول في أهم الكلمات القانونية المحلية خلال أربعة أشهر.',
            ],

            'metric' => '+280%',
            'metric_color' => 'blue',

            'clicks' => '8.4K',
            'impressions' => '624K',
            'ctr' => '1.3%',
            'position' => '9.2',

            'image' => null,

            'sort_order' => 2,
            'is_active' => true,
        ]);

        $case->growths()->createMany([
            [
                'icon' => 'trending-up',
                'value' => '+280%',
                'title' => [
                    'en' => 'Organic Clicks',
                    'ar' => 'النقرات العضوية',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'bar-chart',
                'value' => '+190%',
                'title' => [
                    'en' => 'Inquiries',
                    'ar' => 'الاستفسارات',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'zap',
                'value' => '+300%',
                'title' => [
                    'en' => 'Local Visibility',
                    'ar' => 'الظهور المحلي',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'target',
                'value' => '22 → 5',
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
                    'en' => 'Local SEO',
                    'ar' => 'السيو المحلي',
                ],
                'description' => [
                    'en' => 'Complete local SEO strategy targeting the service area.',
                    'ar' => 'استراتيجية سيو محلي متكاملة لاستهداف المنطقة الجغرافية.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'briefcase',
                'title' => [
                    'en' => 'Google Business',
                    'ar' => 'Google Business',
                ],
                'description' => [
                    'en' => 'Business profile optimization and enrichment.',
                    'ar' => 'تحسين وإثراء ملف النشاط التجاري على Google.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'file-text',
                'title' => [
                    'en' => 'Legal Content',
                    'ar' => 'المحتوى القانوني',
                ],
                'description' => [
                    'en' => 'Optimized legal service pages and FAQ content.',
                    'ar' => 'تحسين صفحات الخدمات القانونية وإنشاء محتوى FAQ.',
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
                    'en' => 'Trusted legal directory citations.',
                    'ar' => 'إضافة الموقع إلى الأدلة القانونية المحلية الموثوقة.',
                ],
                'sort_order' => 4,
            ],
        ]);
    }
}
