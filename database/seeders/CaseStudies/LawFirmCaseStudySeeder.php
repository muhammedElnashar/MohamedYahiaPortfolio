<?php

namespace Database\Seeders\CaseStudies;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class LawFirmCaseStudySeeder extends Seeder
{
    public function run(): void
    {
        $case = CaseStudy::create([
            'slug' => 'law-firm',

            'eyebrow' => [
                'en' => 'Case Study',
                'ar' => 'دراسة حالة',
            ],

            'title' => [
                'en' => '+340% Clicks Growth',
                'ar' => 'زيادة النقرات بنسبة +340%',
            ],

            'description' => [
                'en' => 'Technical SEO recovery project for a law firm after a major Google algorithm update.',
                'ar' => 'مشروع استعادة أداء السيو التقني لمكتب محاماة بعد تحديث كبير في خوارزميات Google.',
            ],

            'industry' => [
                'en' => 'Law Firm',
                'ar' => 'مكتب محاماة',
            ],

            'niche' => [
                'en' => 'Legal',
                'ar' => 'قانوني',
            ],

            'period' => [
                'en' => '3 Months',
                'ar' => '3 أشهر',
            ],

            'focus' => [
                'en' => 'Technical + Content',
                'ar' => 'تقني + محتوى',
            ],

            'challenge' => [
                'en' => 'The law firm experienced a sharp traffic decline after a Google algorithm update due to accumulated technical SEO issues.',
                'ar' => 'تعرض الموقع لانخفاض حاد في الزيارات بعد تحديث خوارزميات Google بسبب تراكم مشكلات السيو التقني.',
            ],

            'solution' => [
                'en' => 'Performed a complete technical audit, fixed crawling issues, rebuilt the site architecture, optimized legal content, and improved Core Web Vitals.',
                'ar' => 'تم تنفيذ تدقيق تقني كامل، وإصلاح مشاكل الزحف، وإعادة بناء هيكل الموقع، وتحسين المحتوى القانوني، ورفع أداء Core Web Vitals.',
            ],

            'result' => [
                'en' => 'Complete recovery to pre-update performance with an additional 40% traffic growth within only three months.',
                'ar' => 'استعادة الأداء بالكامل وتحقيق نمو إضافي بنسبة 40٪ خلال ثلاثة أشهر فقط.',
            ],

            'metric' => '+340%',
            'metric_color' => 'green',

            'clicks' => '11.8K',
            'impressions' => '890K',
            'ctr' => '1.3%',
            'position' => '8.7',

            'image' => null,

            'sort_order' => 3,
            'is_active' => true,
        ]);

        $case->growths()->createMany([
            [
                'icon' => 'trending-up',
                'value' => '+340%',
                'title' => [
                    'en' => 'Organic Clicks',
                    'ar' => 'النقرات العضوية',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'bar-chart',
                'value' => '-35%',
                'title' => [
                    'en' => 'Bounce Rate',
                    'ar' => 'معدل الارتداد',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'zap',
                'value' => '+42%',
                'title' => [
                    'en' => 'CTR',
                    'ar' => 'معدل النقر',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'target',
                'value' => 'Good',
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
                    'en' => 'Technical Audit',
                    'ar' => 'التدقيق التقني',
                ],
                'description' => [
                    'en' => 'Complete technical audit with over 60 technical issues resolved.',
                    'ar' => 'تدقيق تقني شامل مع إصلاح أكثر من 60 مشكلة تقنية.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'layout',
                'title' => [
                    'en' => 'Site Architecture',
                    'ar' => 'هيكلة الموقع',
                ],
                'description' => [
                    'en' => 'Complete restructuring of the website architecture.',
                    'ar' => 'إعادة بناء هيكل الموقع بالكامل.',
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
                    'en' => 'Optimized legal service pages and supporting content.',
                    'ar' => 'تحسين صفحات الخدمات القانونية والمحتوى الداعم.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'zap',
                'title' => [
                    'en' => 'Core Web Vitals',
                    'ar' => 'Core Web Vitals',
                ],
                'description' => [
                    'en' => 'LCP, CLS and INP improved to Google Green thresholds.',
                    'ar' => 'تحسين مؤشرات LCP وCLS وINP حتى الوصول للمستوى الأخضر.',
                ],
                'sort_order' => 4,
            ],
        ]);
    }
}
