<?php

namespace Database\Seeders\CaseStudies;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class RealEstateCaseStudySeeder extends Seeder
{
    public function run(): void
    {
        $case = CaseStudy::create([
            'slug' => 'real-estate',

            'eyebrow' => [
                'en' => 'Case Study',
                'ar' => 'دراسة حالة',
            ],

            'title' => [
                'en' => '+350% Lead Quality Growth',
                'ar' => 'نمو جودة العملاء المحتملين بنسبة +350%',
            ],

            'description' => [
                'en' => 'Intent-based SEO strategy focused on attracting serious real estate buyers instead of increasing traffic only.',
                'ar' => 'استراتيجية SEO تعتمد على نية البحث لجذب المشترين الحقيقيين وتحسين جودة العملاء المحتملين.',
            ],

            'industry' => [
                'en' => 'Real Estate',
                'ar' => 'العقارات',
            ],

            'niche' => [
                'en' => 'Real Estate',
                'ar' => 'العقارات',
            ],

            'period' => [
                'en' => '6 Months',
                'ar' => '6 أشهر',
            ],

            'focus' => [
                'en' => 'Intent-Based SEO',
                'ar' => 'Intent-Based SEO',
            ],

            'challenge' => [
                'en' => 'The real estate website had traffic but failed to generate serious buyers due to poor keyword targeting and weak conversion strategy.',
                'ar' => 'كان الموقع يحصل على زيارات ولكن دون عملاء جادين بسبب استهداف كلمات غير مناسبة وضعف استراتيجية التحويل.',
            ],

            'solution' => [
                'en' => 'Targeted high buying-intent keywords, created neighborhood-based content, implemented Real Estate Schema, and executed specialized Local SEO.',
                'ar' => 'تم استهداف الكلمات ذات نية الشراء، وإنشاء محتوى للأحياء والمناطق، وتطبيق Real Estate Schema، وتنفيذ Local SEO متخصص.',
            ],

            'result' => [
                'en' => 'Shifted from traffic-focused SEO to qualified lead generation, achieving six times better conversion rates with genuinely serious buyers.',
                'ar' => 'تحول الموقع من زيادة الزيارات إلى جذب عملاء جادين مع تحسين معدل التحويل بشكل كبير.',
            ],

            'metric' => '+350%',
            'metric_color' => 'orange',

            'clicks' => '10.4K',
            'impressions' => '820K',
            'ctr' => '1.3%',
            'position' => '11.6',

            'image' => null,

            'sort_order' => 21,
            'is_active' => true,
        ]);

        $case->growths()->createMany([
            [
                'icon' => 'trending-up',
                'value' => '+350%',
                'title' => [
                    'en' => 'Serious Leads',
                    'ar' => 'العملاء الجادون',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'bar-chart',
                'value' => '0.3 → 1.8%',
                'title' => [
                    'en' => 'Conversion Rate',
                    'ar' => 'معدل التحويل',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'zap',
                'value' => '4x',
                'title' => [
                    'en' => 'Lead Quality',
                    'ar' => 'جودة العملاء',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'target',
                'value' => '#1',
                'title' => [
                    'en' => 'Real Estate Niche KWs',
                    'ar' => 'الكلمات العقارية',
                ],
                'sort_order' => 4,
            ],
        ]);

        $case->improvements()->createMany([
            [
                'icon' => 'target',
                'title' => [
                    'en' => 'Intent-Based Keywords',
                    'ar' => 'الكلمات ذات نية الشراء',
                ],
                'description' => [
                    'en' => 'Targeted high buying-intent real estate keywords.',
                    'ar' => 'استهداف الكلمات العقارية ذات نية الشراء.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'map',
                'title' => [
                    'en' => 'Neighborhood Content',
                    'ar' => 'محتوى الأحياء',
                ],
                'description' => [
                    'en' => 'Created location-based neighborhood content.',
                    'ar' => 'إنشاء محتوى متخصص للأحياء والمناطق.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'code',
                'title' => [
                    'en' => 'Real Estate Schema',
                    'ar' => 'Real Estate Schema',
                ],
                'description' => [
                    'en' => 'Implemented Property and Real Estate Schema.',
                    'ar' => 'تطبيق Property وReal Estate Schema.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'map-pin',
                'title' => [
                    'en' => 'Real Estate Local SEO',
                    'ar' => 'Local SEO للعقارات',
                ],
                'description' => [
                    'en' => 'Optimized local visibility for real estate searches.',
                    'ar' => 'تحسين الظهور المحلي في نتائج البحث العقارية.',
                ],
                'sort_order' => 4,
            ],
        ]);
    }
}
