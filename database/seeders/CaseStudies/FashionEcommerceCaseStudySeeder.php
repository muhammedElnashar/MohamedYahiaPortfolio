<?php

namespace Database\Seeders\CaseStudies;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class FashionEcommerceCaseStudySeeder extends Seeder
{
    public function run(): void
    {
        $case = CaseStudy::create([
            'slug' => 'fashion-ecommerce',

            'eyebrow' => [
                'en' => 'Case Study',
                'ar' => 'دراسة حالة',
            ],

            'title' => [
                'en' => '+465% Revenue Growth',
                'ar' => 'نمو الإيرادات بنسبة +465%',
            ],

            'description' => [
                'en' => 'Complete e-commerce SEO strategy that transformed organic search into the main revenue channel.',
                'ar' => 'استراتيجية SEO متكاملة لمتجر أزياء جعلت البحث العضوي المصدر الرئيسي للإيرادات.',
            ],

            'industry' => [
                'en' => 'Fashion E-commerce',
                'ar' => 'متجر أزياء',
            ],

            'niche' => [
                'en' => 'Fashion',
                'ar' => 'الأزياء',
            ],

            'period' => [
                'en' => '8 Months',
                'ar' => '8 أشهر',
            ],

            'focus' => [
                'en' => 'E-commerce SEO Full',
                'ar' => 'E-commerce SEO الكامل',
            ],

            'challenge' => [
                'en' => 'The fashion store depended almost entirely on social media with almost no search visibility despite strong products.',
                'ar' => 'كان متجر الأزياء يعتمد بشكل كامل على السوشيال ميديا مع ضعف شديد في الظهور بمحركات البحث.',
            ],

            'solution' => [
                'en' => 'Implemented full e-commerce SEO, optimized category pages, created buying-intent content, built fashion backlinks, and deployed Product Schema.',
                'ar' => 'تم تنفيذ SEO متكامل للمتجر، وتحسين صفحات الأقسام، وإنشاء محتوى شرائي، وبناء روابط متخصصة، وتطبيق Product Schema.',
            ],

            'result' => [
                'en' => 'Organic search became the #1 revenue source, outperforming social media with more than 25 keywords ranking first.',
                'ar' => 'أصبح البحث العضوي المصدر الأول للإيرادات متفوقًا على السوشيال ميديا مع أكثر من 25 كلمة في المركز الأول.',
            ],

            'metric' => '+465%',
            'metric_color' => 'orange',

            'clicks' => '22K',
            'impressions' => '1.74M',
            'ctr' => '1.3%',
            'position' => '9.1',

            'image' => null,

            'sort_order' => 19,
            'is_active' => true,
        ]);

        $case->growths()->createMany([
            [
                'icon' => 'trending-up',
                'value' => '+465%',
                'title' => [
                    'en' => 'Organic Revenue',
                    'ar' => 'الإيرادات العضوية',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'bar-chart',
                'value' => '25+',
                'title' => [
                    'en' => 'Product Keywords #1',
                    'ar' => 'كلمات المنتجات بالمركز الأول',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'zap',
                'value' => '-70%',
                'title' => [
                    'en' => 'Acquisition Cost',
                    'ar' => 'تكلفة الاكتساب',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'target',
                'value' => 'Organic > Social',
                'title' => [
                    'en' => 'Organic > Social',
                    'ar' => 'البحث العضوي > السوشيال',
                ],
                'sort_order' => 4,
            ],
        ]);

        $case->improvements()->createMany([
            [
                'icon' => 'grid',
                'title' => [
                    'en' => 'Category Pages SEO',
                    'ar' => 'تحسين صفحات الأقسام',
                ],
                'description' => [
                    'en' => 'Complete optimization for category pages.',
                    'ar' => 'تحسين شامل لجميع صفحات الأقسام.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'file-text',
                'title' => [
                    'en' => 'Content Strategy',
                    'ar' => 'استراتيجية المحتوى',
                ],
                'description' => [
                    'en' => 'Buying-intent fashion content targeting commercial keywords.',
                    'ar' => 'محتوى شرائي يستهدف كلمات الأزياء التجارية.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'link',
                'title' => [
                    'en' => 'Niche Backlinks',
                    'ar' => 'روابط متخصصة',
                ],
                'description' => [
                    'en' => 'Backlinks from fashion blogs and industry websites.',
                    'ar' => 'بناء روابط من مواقع ومدونات متخصصة بالأزياء.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'code',
                'title' => [
                    'en' => 'Product Schema',
                    'ar' => 'Product Schema',
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
