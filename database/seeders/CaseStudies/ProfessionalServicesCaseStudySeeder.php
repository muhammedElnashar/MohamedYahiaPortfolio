<?php

namespace Database\Seeders\CaseStudies;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class ProfessionalServicesCaseStudySeeder extends Seeder
{
    public function run(): void
    {
        $case = CaseStudy::create([
            'slug' => 'professional-services',

            'eyebrow' => [
                'en' => 'Case Study',
                'ar' => 'دراسة حالة',
            ],

            'title' => [
                'en' => '+240% Clicks Growth',
                'ar' => 'زيادة النقرات بنسبة +240%',
            ],

            'description' => [
                'en' => 'SEO campaign for a professional services company focused on authority building and organic client acquisition.',
                'ar' => 'حملة سيو لشركة خدمات احترافية بهدف بناء الموثوقية وزيادة العملاء من البحث العضوي.',
            ],

            'industry' => [
                'en' => 'Professional Services',
                'ar' => 'الخدمات الاحترافية',
            ],

            'niche' => [
                'en' => 'Professional',
                'ar' => 'الخدمات الاحترافية',
            ],

            'period' => [
                'en' => '3 Months',
                'ar' => '3 أشهر',
            ],

            'focus' => [
                'en' => 'Authority + Content',
                'ar' => 'الموثوقية + المحتوى',
            ],

            'challenge' => [
                'en' => 'The company depended almost entirely on referrals with no consistent search visibility or organic lead generation.',
                'ar' => 'كانت الشركة تعتمد بشكل كامل تقريبًا على الإحالات مع غياب الظهور في نتائج البحث وعدم وجود مصدر ثابت للعملاء من جوجل.',
            ],

            'solution' => [
                'en' => 'Built topical authority through educational content, targeted informational keywords, strengthened internal linking, and improved overall website authority.',
                'ar' => 'تم بناء Topical Authority من خلال المحتوى التعليمي، واستهداف الكلمات المعلوماتية، وتقوية الربط الداخلي، وتعزيز موثوقية الموقع.',
            ],

            'result' => [
                'en' => 'The company established a consistent organic acquisition channel and surpassed its main competitor on eight Featured Snippets.',
                'ar' => 'أصبحت الشركة تعتمد على البحث العضوي كمصدر ثابت للعملاء مع التفوق على المنافس الرئيسي في 8 Featured Snippets.',
            ],

            'metric' => '+240%',
            'metric_color' => 'green',

            'clicks' => '7.6K',
            'impressions' => '580K',
            'ctr' => '1.3%',
            'position' => '13.1',

            'image' => null,

            'sort_order' => 15,
            'is_active' => true,
        ]);

        $case->growths()->createMany([
            [
                'icon' => 'trending-up',
                'value' => '+240%',
                'title' => [
                    'en' => 'Organic Clicks',
                    'ar' => 'النقرات العضوية',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'bar-chart',
                'value' => '18',
                'title' => [
                    'en' => 'Pages in Top 2',
                    'ar' => 'صفحات في أول نتيجتين',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'zap',
                'value' => '8',
                'title' => [
                    'en' => 'Featured Snippets',
                    'ar' => 'Featured Snippets',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'target',
                'value' => '#1',
                'title' => [
                    'en' => 'Competitor Surpassed',
                    'ar' => 'التفوق على المنافس',
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
                    'en' => 'Created trust-building educational content for the industry.',
                    'ar' => 'إنشاء محتوى تعليمي يعزز الثقة في المجال.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'award',
                'title' => [
                    'en' => 'Authority Building',
                    'ar' => 'بناء الموثوقية',
                ],
                'description' => [
                    'en' => 'Strengthened the website authority within the industry.',
                    'ar' => 'تعزيز موثوقية الموقع داخل المجال.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'search',
                'title' => [
                    'en' => 'Informational SEO',
                    'ar' => 'السيو المعلوماتي',
                ],
                'description' => [
                    'en' => 'Targeted high-value informational keywords with strong search intent.',
                    'ar' => 'استهداف الكلمات المعلوماتية عالية القيمة.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'link',
                'title' => [
                    'en' => 'Internal Linking',
                    'ar' => 'الربط الداخلي',
                ],
                'description' => [
                    'en' => 'Built a strategic internal linking structure.',
                    'ar' => 'بناء هيكل ربط داخلي استراتيجي.',
                ],
                'sort_order' => 4,
            ],
        ]);
    }
}
