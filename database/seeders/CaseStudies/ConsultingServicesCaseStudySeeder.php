<?php

namespace Database\Seeders\CaseStudies;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class ConsultingServicesCaseStudySeeder extends Seeder
{
    public function run(): void
    {
        $case = CaseStudy::create([
            'slug' => 'consulting-services',

            'eyebrow' => [
                'en' => 'Case Study',
                'ar' => 'دراسة حالة',
            ],

            'title' => [
                'en' => '+285% Impressions Growth',
                'ar' => 'نمو مرات الظهور بنسبة +285%',
            ],

            'description' => [
                'en' => 'Thought Leadership SEO strategy that positioned the consulting firm as a trusted authority in its niche.',
                'ar' => 'استراتيجية Thought Leadership SEO جعلت شركة الاستشارات مرجعًا موثوقًا في مجالها.',
            ],

            'industry' => [
                'en' => 'Consulting Services',
                'ar' => 'الخدمات الاستشارية',
            ],

            'niche' => [
                'en' => 'Consulting',
                'ar' => 'الاستشارات',
            ],

            'period' => [
                'en' => '5 Months',
                'ar' => '5 أشهر',
            ],

            'focus' => [
                'en' => 'Thought Leadership SEO',
                'ar' => 'Thought Leadership SEO',
            ],

            'challenge' => [
                'en' => 'The consulting company wanted its digital presence to reflect its real expertise but had almost no visibility in Google.',
                'ar' => 'كانت شركة الاستشارات تمتلك خبرة قوية ولكنها كانت شبه غائبة عن نتائج البحث.',
            ],

            'solution' => [
                'en' => 'Created thought leadership content, executed PR backlink outreach, improved domain authority, and targeted high-value keywords.',
                'ar' => 'تم إنشاء محتوى Thought Leadership، وبناء روابط PR، ورفع Domain Authority، واستهداف الكلمات ذات القيمة العالية.',
            ],

            'result' => [
                'en' => 'The company became a trusted industry reference with more than 50 Featured Snippets and domain authority growing from 12 to 38.',
                'ar' => 'أصبحت الشركة مرجعًا موثوقًا في المجال مع أكثر من 50 Featured Snippet وارتفاع Domain Authority من 12 إلى 38.',
            ],

            'metric' => '+285%',
            'metric_color' => 'blue',

            'clicks' => '8.9K',
            'impressions' => '680K',
            'ctr' => '1.3%',
            'position' => '13.5',

            'image' => null,

            'sort_order' => 20,
            'is_active' => true,
        ]);

        $case->growths()->createMany([
            [
                'icon' => 'trending-up',
                'value' => '+285%',
                'title' => [
                    'en' => 'Impressions',
                    'ar' => 'مرات الظهور',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'bar-chart',
                'value' => '50+',
                'title' => [
                    'en' => 'Featured Snippets',
                    'ar' => 'Featured Snippets',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'zap',
                'value' => '12 → 38',
                'title' => [
                    'en' => 'Domain Authority',
                    'ar' => 'Domain Authority',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'target',
                'value' => '#1 Reference',
                'title' => [
                    'en' => 'Niche Reference',
                    'ar' => 'مرجع المجال',
                ],
                'sort_order' => 4,
            ],
        ]);

        $case->improvements()->createMany([
            [
                'icon' => 'star',
                'title' => [
                    'en' => 'Thought Leadership',
                    'ar' => 'Thought Leadership',
                ],
                'description' => [
                    'en' => 'Created expert-level authority content.',
                    'ar' => 'إنشاء محتوى احترافي يعكس الخبرة والريادة.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'external-link',
                'title' => [
                    'en' => 'PR & Media Backlinks',
                    'ar' => 'روابط PR والإعلام',
                ],
                'description' => [
                    'en' => 'Backlinks from trusted media and specialized publications.',
                    'ar' => 'الحصول على روابط من مواقع إعلامية ومنصات متخصصة.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'award',
                'title' => [
                    'en' => 'Domain Authority',
                    'ar' => 'Domain Authority',
                ],
                'description' => [
                    'en' => 'Increased domain authority from 12 to 38.',
                    'ar' => 'رفع قوة الدومين من 12 إلى 38.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'target',
                'title' => [
                    'en' => 'High-Value Keywords',
                    'ar' => 'الكلمات عالية القيمة',
                ],
                'description' => [
                    'en' => 'Targeted high-commercial-value niche keywords.',
                    'ar' => 'استهداف الكلمات المفتاحية الأعلى قيمة في المجال.',
                ],
                'sort_order' => 4,
            ],
        ]);
    }
}
