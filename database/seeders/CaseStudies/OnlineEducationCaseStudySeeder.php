<?php

namespace Database\Seeders\CaseStudies;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class OnlineEducationCaseStudySeeder extends Seeder
{
    public function run(): void
    {
        $case = CaseStudy::create([
            'slug' => 'online-education',

            'eyebrow' => [
                'en' => 'Case Study',
                'ar' => 'دراسة حالة',
            ],

            'title' => [
                'en' => '+380% Traffic Growth',
                'ar' => 'زيادة الزيارات بنسبة +380%',
            ],

            'description' => [
                'en' => 'SEO campaign for an Arabic online education platform focused on organic growth and technical optimization.',
                'ar' => 'حملة سيو لمنصة تعليم إلكتروني عربية بهدف زيادة الزيارات وتحسين الأداء التقني.',
            ],

            'industry' => [
                'en' => 'Online Education',
                'ar' => 'التعليم الإلكتروني',
            ],

            'niche' => [
                'en' => 'Education',
                'ar' => 'التعليم',
            ],

            'period' => [
                'en' => '8 Months',
                'ar' => '8 أشهر',
            ],

            'focus' => [
                'en' => 'Technical + Content + Links',
                'ar' => 'تقني + محتوى + روابط',
            ],

            'challenge' => [
                'en' => 'An Arabic EdTech platform in Turkey suffered from weak content, poor technical structure, and slow page speed, limiting its search visibility.',
                'ar' => 'كانت منصة تعليم إلكتروني عربية في تركيا تعاني من ضعف المحتوى، وبنية تقنية غير جيدة، وسرعة تحميل منخفضة أثرت على ظهورها في نتائج البحث.',
            ],

            'solution' => [
                'en' => 'Implemented academic content restructuring, targeted 200+ educational keywords, improved PageSpeed, earned EDU backlinks, and rebuilt the technical architecture.',
                'ar' => 'تمت إعادة هيكلة المحتوى التعليمي، واستهداف أكثر من 200 كلمة مفتاحية، وتحسين PageSpeed، والحصول على روابط EDU، وإعادة بناء الهيكل التقني للموقع.',
            ],

            'result' => [
                'en' => 'The platform became the #1 Arabic educational content reference for students in Turkey.',
                'ar' => 'أصبحت المنصة المرجع الأول للمحتوى التعليمي العربي للطلاب في تركيا.',
            ],

            'metric' => '+380%',
            'metric_color' => 'orange',

            'clicks' => '18K',
            'impressions' => '1.31M',
            'ctr' => '1.4%',
            'position' => '13.2',

            'image' => null,

            'sort_order' => 7,
            'is_active' => true,
        ]);

        $case->growths()->createMany([
            [
                'icon' => 'trending-up',
                'value' => '+380%',
                'title' => [
                    'en' => 'Organic Traffic',
                    'ar' => 'الزيارات العضوية',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'bar-chart',
                'value' => '38 → 91',
                'title' => [
                    'en' => 'PageSpeed Score',
                    'ar' => 'نتيجة PageSpeed',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'zap',
                'value' => '-34%',
                'title' => [
                    'en' => 'Bounce Rate',
                    'ar' => 'معدل الارتداد',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'target',
                'value' => '200+',
                'title' => [
                    'en' => 'Keywords Top 10',
                    'ar' => 'الكلمات في أول 10 نتائج',
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
                    'en' => 'Academic content restructuring and full content optimization.',
                    'ar' => 'إعادة هيكلة المحتوى التعليمي وتحسينه بالكامل.',
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
                    'en' => 'Improved PageSpeed score from 38 to 91.',
                    'ar' => 'رفع نتيجة PageSpeed من 38 إلى 91.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'link',
                'title' => [
                    'en' => 'EDU Backlinks',
                    'ar' => 'روابط EDU',
                ],
                'description' => [
                    'en' => 'High-authority backlinks from educational platforms and universities.',
                    'ar' => 'الحصول على روابط قوية من جامعات ومنصات تعليمية موثوقة.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'activity',
                'title' => [
                    'en' => 'Technical Structure',
                    'ar' => 'الهيكل التقني',
                ],
                'description' => [
                    'en' => 'Complete technical restructuring for better crawling and indexing.',
                    'ar' => 'إعادة بناء الهيكل التقني للموقع لتحسين الزحف والأرشفة.',
                ],
                'sort_order' => 4,
            ],
        ]);
    }
}
