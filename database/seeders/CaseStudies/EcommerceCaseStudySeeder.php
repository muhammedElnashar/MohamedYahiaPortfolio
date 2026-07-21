<?php

namespace Database\Seeders\CaseStudies;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class EcommerceCaseStudySeeder extends Seeder
{
    public function run(): void
    {
        $case = CaseStudy::create([
            'slug' => 'ecommerce',

            'eyebrow' => [
                'en' => 'Case Study',
                'ar' => 'دراسة حالة',
            ],

            'title' => [
                'en' => '+430% Revenue Growth',
                'ar' => 'زيادة الإيرادات بنسبة +430%',
            ],

            'description' => [
                'en' => 'SEO campaign for an e-commerce store focused on increasing organic revenue and purchase intent traffic.',
                'ar' => 'حملة سيو لمتجر إلكتروني بهدف زيادة الإيرادات والزيارات العضوية ذات نية الشراء.',
            ],

            'industry' => [
                'en' => 'E-commerce',
                'ar' => 'التجارة الإلكترونية',
            ],

            'niche' => [
                'en' => 'E-commerce',
                'ar' => 'التجارة الإلكترونية',
            ],

            'period' => [
                'en' => '7 Months',
                'ar' => '7 أشهر',
            ],

            'focus' => [
                'en' => 'E-commerce SEO',
                'ar' => 'سيو المتاجر الإلكترونية',
            ],

            'challenge' => [
                'en' => 'The online store struggled to compete against major e-commerce brands, resulting in weak organic visibility and low revenue.',
                'ar' => 'كان المتجر يواجه منافسة قوية من المتاجر الكبرى مما أدى إلى ضعف الظهور العضوي وانخفاض الإيرادات.',
            ],

            'solution' => [
                'en' => 'Implemented a complete e-commerce SEO strategy, optimized hundreds of product pages, created buying-intent comparison content, and deployed Product & Offer Schema.',
                'ar' => 'تم تنفيذ استراتيجية سيو متكاملة للمتجر، وتحسين مئات صفحات المنتجات، وإنشاء محتوى مقارنات يستهدف نية الشراء، وتطبيق Product وOffer Schema.',
            ],

            'result' => [
                'en' => 'Achieved sustainable revenue growth from Google Search with a 5x increase in non-paid traffic.',
                'ar' => 'تحقيق نمو مستدام في الإيرادات من البحث العضوي مع زيادة الزيارات المجانية بمقدار 5 مرات.',
            ],

            'metric' => '+430%',
            'metric_color' => 'orange',

            'clicks' => '16.5K',
            'impressions' => '1.28M',
            'ctr' => '1.3%',
            'position' => '11.9',

            'image' => null,

            'sort_order' => 13,
            'is_active' => true,
        ]);

        $case->growths()->createMany([
            [
                'icon' => 'trending-up',
                'value' => '+430%',
                'title' => [
                    'en' => 'Organic Revenue',
                    'ar' => 'الإيرادات العضوية',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'bar-chart',
                'value' => '60+',
                'title' => [
                    'en' => 'Product Keywords Top 5',
                    'ar' => 'كلمات المنتجات في أول 5 نتائج',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'zap',
                'value' => '-25%',
                'title' => [
                    'en' => 'Cart Abandonment',
                    'ar' => 'التخلي عن السلة',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'target',
                'value' => '5x',
                'title' => [
                    'en' => 'Non-Paid Traffic',
                    'ar' => 'الزيارات المجانية',
                ],
                'sort_order' => 4,
            ],
        ]);

        $case->improvements()->createMany([
            [
                'icon' => 'shopping-cart',
                'title' => [
                    'en' => 'E-commerce SEO',
                    'ar' => 'سيو المتاجر الإلكترونية',
                ],
                'description' => [
                    'en' => 'Complete SEO strategy tailored for online stores.',
                    'ar' => 'استراتيجية سيو متكاملة مخصصة للمتاجر الإلكترونية.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'package',
                'title' => [
                    'en' => 'Product Pages',
                    'ar' => 'صفحات المنتجات',
                ],
                'description' => [
                    'en' => 'Comprehensive optimization for hundreds of product pages.',
                    'ar' => 'تحسين شامل لمئات صفحات المنتجات.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'bar-chart',
                'title' => [
                    'en' => 'Comparison Content',
                    'ar' => 'محتوى المقارنات',
                ],
                'description' => [
                    'en' => 'Commercial comparison content targeting buying intent.',
                    'ar' => 'إنشاء محتوى مقارنات يستهدف نية الشراء.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'code',
                'title' => [
                    'en' => 'E-commerce Schema',
                    'ar' => 'Schema المتجر',
                ],
                'description' => [
                    'en' => 'Implemented Product, Review and Offer Schema.',
                    'ar' => 'تطبيق Product وReview وOffer Schema.',
                ],
                'sort_order' => 4,
            ],
        ]);
    }
}
