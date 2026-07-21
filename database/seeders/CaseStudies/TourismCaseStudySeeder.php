<?php

namespace Database\Seeders\CaseStudies;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class TourismCaseStudySeeder extends Seeder
{
    public function run(): void
    {
        $case = CaseStudy::create([
            'slug' => 'tourism',

            'eyebrow' => [
                'en' => 'Case Study',
                'ar' => 'دراسة حالة',
            ],

            'title' => [
                'en' => '+410% Organic Traffic Growth',
                'ar' => 'زيادة الزيارات العضوية بنسبة +410%',
            ],

            'description' => [
                'en' => 'Tourism SEO campaign focused on increasing organic visibility and qualified traffic.',
                'ar' => 'حملة سيو متخصصة لقطاع السياحة بهدف زيادة الظهور العضوي وجذب زيارات مؤهلة.',
            ],

            'industry' => [
                'en' => 'Tourism',
                'ar' => 'السياحة',
            ],

            'niche' => [
                'en' => 'Hospitality',
                'ar' => 'الضيافة',
            ],

            'period' => [
                'en' => '6 Months',
                'ar' => '6 أشهر',
            ],

            'focus' => [
                'en' => 'Full SEO',
                'ar' => 'سيو شامل',
            ],

            'challenge' => [
                'en' => 'Tourism site with weak visibility despite quality content. Organic traffic was minimal with no presence on key destination searches.',
                'ar' => 'كان الموقع يعاني من ضعف الظهور في نتائج البحث رغم جودة المحتوى، مع زيارات عضوية محدودة وعدم الظهور في الكلمات المستهدفة.',
            ],

            'solution' => [
                'en' => 'Comprehensive keyword research, content restructuring, destination page optimization, authority link building, and technical SEO improvements.',
                'ar' => 'تم تنفيذ بحث شامل للكلمات المفتاحية، وإعادة هيكلة المحتوى، وتحسين صفحات الوجهات، وبناء روابط قوية، وتنفيذ تحسينات السيو التقني.',
            ],

            'result' => [
                'en' => 'Traffic increased from 800 to 4,200 monthly visits within six months, creating strong organic visibility in the tourism niche.',
                'ar' => 'ارتفعت الزيارات من 800 إلى 4200 زيارة شهرية خلال 6 أشهر، مع تحقيق حضور قوي في نتائج البحث الخاصة بالسياحة.',
            ],

            'metric' => '+410%',
            'metric_color' => 'orange',

            'clicks' => '14.2K',
            'impressions' => '1.18M',
            'ctr' => '1.2%',
            'position' => '11.4',

            'image' => null,

            'sort_order' => 1,
            'is_active' => true,
        ]);

        $case->growths()->createMany([
            [
                'icon' => 'trending-up',
                'value' => '+410%',
                'title' => [
                    'en' => 'Organic Clicks',
                    'ar' => 'النقرات العضوية',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'bar-chart',
                'value' => '+310%',
                'title' => [
                    'en' => 'Impressions',
                    'ar' => 'مرات الظهور',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'zap',
                'value' => '+65%',
                'title' => [
                    'en' => 'CTR',
                    'ar' => 'معدل النقر',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'target',
                'value' => '18 → 4',
                'title' => [
                    'en' => 'Avg. Position',
                    'ar' => 'متوسط الترتيب',
                ],
                'sort_order' => 4,
            ],
        ]);

        $case->improvements()->createMany([
            [
                'icon' => 'file-text',
                'title' => [
                    'en' => 'Content Strategy',
                    'ar' => 'استراتيجية المحتوى',
                ],
                'description' => [
                    'en' => 'Tourism keyword research & strategic content creation.',
                    'ar' => 'بحث الكلمات المفتاحية وإنشاء محتوى مخصص لقطاع السياحة.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'link',
                'title' => [
                    'en' => 'Link Building',
                    'ar' => 'بناء الروابط',
                ],
                'description' => [
                    'en' => 'Authority backlinks from trusted travel websites.',
                    'ar' => 'الحصول على روابط خلفية من مواقع سفر موثوقة.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'layout',
                'title' => [
                    'en' => 'Site Architecture',
                    'ar' => 'هيكلة الموقع',
                ],
                'description' => [
                    'en' => 'Tourism page structure reorganization.',
                    'ar' => 'إعادة تنظيم هيكل صفحات الموقع.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'activity',
                'title' => [
                    'en' => 'Technical SEO',
                    'ar' => 'السيو التقني',
                ],
                'description' => [
                    'en' => 'Fixed crawling and indexing issues.',
                    'ar' => 'إصلاح مشاكل الزحف والأرشفة.',
                ],
                'sort_order' => 4,
            ],
        ]);
    }
}
