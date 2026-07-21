<?php

namespace Database\Seeders\CaseStudies;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class LocalServicesCaseStudySeeder extends Seeder
{
    public function run(): void
    {
        $case = CaseStudy::create([
            'slug' => 'local-services',

            'eyebrow' => [
                'en' => 'Case Study',
                'ar' => 'دراسة حالة',
            ],

            'title' => [
                'en' => '+200% Local Visibility Growth',
                'ar' => 'نمو الظهور المحلي بنسبة +200%',
            ],

            'description' => [
                'en' => 'Complete Local SEO campaign that reduced advertising dependence while increasing local visibility.',
                'ar' => 'حملة Local SEO متكاملة ساعدت على تقليل الاعتماد على الإعلانات وزيادة الظهور المحلي.',
            ],

            'industry' => [
                'en' => 'Local Services',
                'ar' => 'الخدمات المحلية',
            ],

            'niche' => [
                'en' => 'Local Services',
                'ar' => 'الخدمات المحلية',
            ],

            'period' => [
                'en' => '4 Months',
                'ar' => '4 أشهر',
            ],

            'focus' => [
                'en' => 'Local SEO Full',
                'ar' => 'Local SEO الكامل',
            ],

            'challenge' => [
                'en' => 'The local services company relied almost entirely on paid advertising and wanted to reduce costs while building a sustainable organic presence.',
                'ar' => 'كانت الشركة تعتمد بشكل كامل تقريبًا على الإعلانات المدفوعة، وتهدف إلى تقليل التكلفة وبناء حضور محلي مستدام.',
            ],

            'solution' => [
                'en' => 'Implemented a full Local SEO strategy including citations, Google Business optimization, and geo-targeted local content.',
                'ar' => 'تم تنفيذ استراتيجية Local SEO كاملة تضمنت بناء الاستشهادات المحلية، وتحسين Google Business، وإنشاء محتوى محلي مستهدف.',
            ],

            'result' => [
                'en' => 'Advertising budget decreased by 50% while maintaining client volume and achieving Google Maps 3-Pack rankings.',
                'ar' => 'تم خفض ميزانية الإعلانات بنسبة 50٪ مع الحفاظ على نفس حجم العملاء والوصول إلى نتائج Google Maps 3-Pack.',
            ],

            'metric' => '+200%',
            'metric_color' => 'green',

            'clicks' => '6.4K',
            'impressions' => '510K',
            'ctr' => '1.3%',
            'position' => '14.7',

            'image' => null,

            'sort_order' => 18,
            'is_active' => true,
        ]);

        $case->growths()->createMany([
            [
                'icon' => 'trending-up',
                'value' => '+200%',
                'title' => [
                    'en' => 'Local Visibility',
                    'ar' => 'الظهور المحلي',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'bar-chart',
                'value' => '-50%',
                'title' => [
                    'en' => 'Ad Dependence',
                    'ar' => 'الاعتماد على الإعلانات',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'zap',
                'value' => '3-Pack',
                'title' => [
                    'en' => 'Google Maps',
                    'ar' => 'خرائط جوجل',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'target',
                'value' => '+165%',
                'title' => [
                    'en' => 'Inbound Inquiries',
                    'ar' => 'الاستفسارات الواردة',
                ],
                'sort_order' => 4,
            ],
        ]);

        $case->improvements()->createMany([
            [
                'icon' => 'map-pin',
                'title' => [
                    'en' => 'Full Local SEO',
                    'ar' => 'Local SEO الكامل',
                ],
                'description' => [
                    'en' => 'Complete Local SEO strategy for the target service area.',
                    'ar' => 'استراتيجية Local SEO متكاملة لمنطقة الاستهداف.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'globe',
                'title' => [
                    'en' => 'Citations Building',
                    'ar' => 'بناء الاستشهادات',
                ],
                'description' => [
                    'en' => 'Built trusted local citation network.',
                    'ar' => 'بناء شبكة قوية من الاستشهادات المحلية.',
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
                    'en' => 'Optimized Google Business Profile and ongoing management.',
                    'ar' => 'تحسين وإدارة ملف Google Business.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'file-text',
                'title' => [
                    'en' => 'Local Content',
                    'ar' => 'المحتوى المحلي',
                ],
                'description' => [
                    'en' => 'Created geo-targeted local service content.',
                    'ar' => 'إنشاء محتوى محلي موجه حسب المنطقة.',
                ],
                'sort_order' => 4,
            ],
        ]);
    }
}
