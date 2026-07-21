<?php

namespace Database\Seeders\CaseStudies;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class InsulationWaterproofingCaseStudySeeder extends Seeder
{
    public function run(): void
    {
        $case = CaseStudy::create([
            'slug' => 'insulation-waterproofing',

            'eyebrow' => [
                'en' => 'Case Study',
                'ar' => 'دراسة حالة',
            ],

            'title' => [
                'en' => '+290% Lead Growth',
                'ar' => 'زيادة العملاء المحتملين بنسبة +290%',
            ],

            'description' => [
                'en' => 'Local SEO campaign for an insulation and waterproofing company focused on generating qualified leads.',
                'ar' => 'حملة سيو محلي لشركة عزل مائي وحراري بهدف زيادة العملاء المحتملين.',
            ],

            'industry' => [
                'en' => 'Insulation & Waterproofing',
                'ar' => 'العزل المائي والحراري',
            ],

            'niche' => [
                'en' => 'Construction',
                'ar' => 'الإنشاءات',
            ],

            'period' => [
                'en' => '5 Months',
                'ar' => '5 أشهر',
            ],

            'focus' => [
                'en' => 'Local SEO + Content',
                'ar' => 'السيو المحلي + المحتوى',
            ],

            'challenge' => [
                'en' => 'The insulation company had almost no local search visibility despite offering high-quality services. Most customers were finding competitors first.',
                'ar' => 'كانت شركة العزل تعاني من ضعف شديد في الظهور المحلي رغم جودة خدماتها، وكان العملاء يصلون إلى المنافسين أولاً.',
            ],

            'solution' => [
                'en' => 'Implemented Local SEO for home services, optimized service pages, created educational content, added Services Schema, and built local citations.',
                'ar' => 'تم تنفيذ استراتيجية سيو محلي، وتحسين صفحات الخدمات، وإنشاء محتوى تعليمي، وتطبيق Services Schema، وبناء الاستشهادات المحلية.',
            ],

            'result' => [
                'en' => 'The company became the top insulation provider in its area while reducing customer acquisition cost by 60%.',
                'ar' => 'أصبحت الشركة الخيار الأول لخدمات العزل في منطقتها مع تقليل تكلفة اكتساب العملاء بنسبة 60٪.',
            ],

            'metric' => '+290%',
            'metric_color' => 'orange',

            'clicks' => '4.2K',
            'impressions' => '380K',
            'ctr' => '1.1%',
            'position' => '16.8',

            'image' => null,

            'sort_order' => 9,
            'is_active' => true,
        ]);

        $case->growths()->createMany([
            [
                'icon' => 'trending-up',
                'value' => '+290%',
                'title' => [
                    'en' => 'Inbound Leads',
                    'ar' => 'العملاء المحتملون',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'bar-chart',
                'value' => '20+',
                'title' => [
                    'en' => 'Keywords Top 3',
                    'ar' => 'كلمات في أول 3 نتائج',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'zap',
                'value' => '-60%',
                'title' => [
                    'en' => 'Cost per Lead',
                    'ar' => 'تكلفة العميل المحتمل',
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
                'icon' => 'map-pin',
                'title' => [
                    'en' => 'Local SEO',
                    'ar' => 'السيو المحلي',
                ],
                'description' => [
                    'en' => 'Geographic Local SEO strategy targeting nearby customers.',
                    'ar' => 'استراتيجية سيو محلي لاستهداف العملاء في المنطقة.',
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
                    'en' => 'Optimized dedicated landing pages for every insulation service.',
                    'ar' => 'تحسين صفحات مخصصة لكل خدمة من خدمات العزل.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'file-text',
                'title' => [
                    'en' => 'Content Strategy',
                    'ar' => 'استراتيجية المحتوى',
                ],
                'description' => [
                    'en' => 'Created educational content around insulation and waterproofing services.',
                    'ar' => 'إنشاء محتوى تعليمي متخصص في العزل المائي والحراري.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'code',
                'title' => [
                    'en' => 'Home Services Schema',
                    'ar' => 'Home Services Schema',
                ],
                'description' => [
                    'en' => 'Implemented structured data for home service pages.',
                    'ar' => 'تطبيق البيانات المنظمة الخاصة بخدمات المنازل.',
                ],
                'sort_order' => 4,
            ],
        ]);
    }
}
