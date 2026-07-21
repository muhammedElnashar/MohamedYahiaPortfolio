<?php

namespace Database\Seeders\CaseStudies;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class HealthWellnessCaseStudySeeder extends Seeder
{
    public function run(): void
    {
        $case = CaseStudy::create([
            'slug' => 'health-wellness',

            'eyebrow' => [
                'en' => 'Case Study',
                'ar' => 'دراسة حالة',
            ],

            'title' => [
                'en' => '+160% Growth in 28 Days',
                'ar' => '+160% نمو خلال 28 يومًا',
            ],

            'description' => [
                'en' => 'Rapid SEO improvements for a health & wellness website before the peak season.',
                'ar' => 'تحسينات SEO سريعة لموقع صحي قبل موسم الذروة.',
            ],

            'industry' => [
                'en' => 'Health & Wellness',
                'ar' => 'الصحة والعافية',
            ],

            'niche' => [
                'en' => 'Health',
                'ar' => 'الصحة',
            ],

            'period' => [
                'en' => '28 Days',
                'ar' => '28 يومًا',
            ],

            'focus' => [
                'en' => 'E-E-A-T + Quick Wins',
                'ar' => 'E-E-A-T + Quick Wins',
            ],

            'challenge' => [
                'en' => 'Health & wellness site needing fast improvements before peak season with weak E-E-A-T signals.',
                'ar' => 'موقع صحي يحتاج إلى تحسينات سريعة قبل موسم الذروة مع ضعف إشارات E-E-A-T.',
            ],

            'solution' => [
                'en' => 'Implemented E-E-A-T improvements, quick technical fixes, medical content updates, Health Schema, and title/meta optimization.',
                'ar' => 'تم تحسين E-E-A-T، وتنفيذ إصلاحات تقنية سريعة، وتحديث المحتوى الطبي، وإضافة Health Schema، وتحسين العناوين والوصف.',
            ],

            'result' => [
                'en' => 'Website became ready for peak season with 5 new Featured Snippets and CTR improved significantly within 28 days.',
                'ar' => 'أصبح الموقع جاهزًا لموسم الذروة مع 5 Featured Snippets جديدة وتحسن كبير في CTR خلال 28 يومًا.',
            ],

            'metric' => '+160%',
            'metric_color' => 'green',

            'clicks' => '5.4K',
            'impressions' => '430K',
            'ctr' => '1.3%',
            'position' => '15.6',

            'image' => null,

            'sort_order' => 25,
            'is_active' => true,
        ]);

        $case->growths()->createMany([
            [
                'icon' => 'trending-up',
                'value' => '+160%',
                'title' => [
                    'en' => 'Organic Clicks',
                    'ar' => 'النقرات العضوية',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'bar-chart',
                'value' => '5',
                'title' => [
                    'en' => 'New Featured Snippets',
                    'ar' => 'Featured Snippets جديدة',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'zap',
                'value' => 'E-E-A-T ✓',
                'title' => [
                    'en' => 'Credibility Improved',
                    'ar' => 'تحسن الموثوقية',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'target',
                'value' => '1.2 → 3.8%',
                'title' => [
                    'en' => 'CTR',
                    'ar' => 'CTR',
                ],
                'sort_order' => 4,
            ],
        ]);

        $case->improvements()->createMany([
            [
                'icon' => 'shield',
                'title' => [
                    'en' => 'E-E-A-T Signals',
                    'ar' => 'إشارات E-E-A-T',
                ],
                'description' => [
                    'en' => 'Medical credibility & expertise building.',
                    'ar' => 'بناء الموثوقية والخبرة الطبية.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'activity',
                'title' => [
                    'en' => 'Quick Technical Fixes',
                    'ar' => 'إصلاحات تقنية سريعة',
                ],
                'description' => [
                    'en' => 'High-impact quick technical fixes.',
                    'ar' => 'إصلاحات تقنية سريعة عالية التأثير.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'code',
                'title' => [
                    'en' => 'Health Schema',
                    'ar' => 'Health Schema',
                ],
                'description' => [
                    'en' => 'Specialized medical content Schema.',
                    'ar' => 'Schema متخصص للمحتوى الطبي.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'file-text',
                'title' => [
                    'en' => 'Content Update',
                    'ar' => 'تحديث المحتوى',
                ],
                'description' => [
                    'en' => 'Medical content updates & source additions.',
                    'ar' => 'تحديث المحتوى الطبي وإضافة المصادر.',
                ],
                'sort_order' => 4,
            ],
        ]);
    }
}
