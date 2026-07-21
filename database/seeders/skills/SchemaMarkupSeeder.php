<?php

namespace Database\Seeders\skills;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SchemaMarkupSeeder extends Seeder
{
    public function run(): void
    {
        $skill = Skill::updateOrCreate(
            [
                'slug' => 'schema-markup',
            ],
            [
                'icon' => 'braces',

                'title' => [
                    'en' => 'Schema Markup',
                    'ar' => 'Schema Markup',
                ],

                'sort_order' => 2,
                'has_page' => true,
            ]
        );

        /*
        |--------------------------------------------------------------------------
        | Page Data
        |--------------------------------------------------------------------------
        */

        $skill->page()->updateOrCreate(
            [],
            [
                'hero_title' => [
                    'en' => 'Structured Data for Rich Snippets Domination',
                    'ar' => 'البيانات الهيكلية لتصدر Rich Snippets',
                ],

                'hero_description' => [
                    'en' => 'Schema Markup makes your site understood by Google at a deeper level and appears in rich search results (Rich Snippets) that increase CTR by 20-30%. I implement all appropriate Schema types for your site with high technical precision.',
                    'ar' => 'Schema Markup يجعل موقعك يُفهَم من جوجل بشكل أعمق ويظهر في نتائج بحث مميزة (Rich Snippets) تزيد CTR بنسبة 20-30%. أطبّق جميع أنواع Schema المناسبة لموقعك بدقة تقنية عالية.',
                ],

                'cta_title' => [
                    'en' => 'Your Site Deserves Rich Snippets in Google',
                    'ar' => 'موقعك يستحق Rich Snippets في جوجل',
                ],

                'cta_description' => [
                    'en' => 'Contact now for correct Schema Markup implementation and CTR improvement.',
                    'ar' => 'تواصل الآن لتطبيق Schema Markup الصحيح لموقعك وزيادة CTR.',
                ],

                'cta_button_text' => [
                    'en' => 'Contact via WhatsApp',
                    'ar' => 'تواصل عبر واتساب',
                ],

                'cta_button_url' => 'https://wa.me/201123269452',

                'feature_title' => [
                    'en' => 'Schema Types I Implement',
                    'ar' => 'أنواع Schema التي أطبّقها',
                ],

                'metric_title' => [
                    'en' => 'How I Implement Schema Correctly',
                    'ar' => 'كيف أطبّق Schema بشكل صحيح',
                ],
            ]
        );

        $skill->metrics()->delete();
        $skill->features()->delete();
        $skill->tools()->delete();

        /*
        |--------------------------------------------------------------------------
        | Metrics
        |--------------------------------------------------------------------------
        */

        $skill->metrics()->createMany([
            [
                'value' => '+30%',
                'title' => [
                    'en' => 'Avg CTR Increase',
                    'ar' => 'متوسط زيادة CTR',
                ],
                'sort_order' => 1,
            ],
            [
                'value' => '15+',
                'title' => [
                    'en' => 'Schema Types Implemented',
                    'ar' => 'نوع Schema طبّقته',
                ],
                'sort_order' => 2,
            ],
            [
                'value' => 'Rich',
                'title' => [
                    'en' => 'Snippets Achieved',
                    'ar' => 'Snippets محققة',
                ],
                'sort_order' => 3,
            ],
            [
                'value' => '0',
                'title' => [
                    'en' => 'Schema Errors',
                    'ar' => 'أخطاء Schema',
                ],
                'sort_order' => 4,
            ],
        ]);

        /*
        |--------------------------------------------------------------------------
        | Features
        |--------------------------------------------------------------------------
        */

        $skill->features()->createMany([
            [
                'title' => [
                    'en' => 'Product Schema',
                    'ar' => 'Product Schema',
                ],
                'description' => [
                    'en' => 'Price, rating, availability, images — for Salla, Zid, Shopify, and WooCommerce stores.',
                    'ar' => 'سعر، تقييم، توفر، صور — لمتاجر سلة وزد وShopify وWooCommerce.',
                ],
                'sort_order' => 1,
            ],
            [
                'title' => [
                    'en' => 'FAQPage Schema',
                    'ar' => 'FAQPage Schema',
                ],
                'description' => [
                    'en' => 'Your Q&A appearing directly in Google search results.',
                    'ar' => 'ظهور أسئلتك وإجاباتها مباشرةً في نتائج جوجل.',
                ],
                'sort_order' => 2,
            ],
            [
                'title' => [
                    'en' => 'Article & NewsArticle',
                    'ar' => 'Article & NewsArticle',
                ],
                'description' => [
                    'en' => 'Rich Snippets for articles with date and author.',
                    'ar' => 'Rich Snippets للمقالات مع التاريخ والكاتب.',
                ],
                'sort_order' => 3,
            ],
            [
                'title' => [
                    'en' => 'LocalBusiness Schema',
                    'ar' => 'LocalBusiness Schema',
                ],
                'description' => [
                    'en' => 'Business information — address, hours, and ratings.',
                    'ar' => 'معلومات النشاط التجاري — العنوان والساعات والتقييمات.',
                ],
                'sort_order' => 4,
            ],
            [
                'title' => [
                    'en' => 'BreadcrumbList',
                    'ar' => 'BreadcrumbList',
                ],
                'description' => [
                    'en' => 'Showing navigation path in search results to improve CTR.',
                    'ar' => 'عرض مسار التنقل في نتائج البحث لتحسين CTR.',
                ],
                'sort_order' => 5,
            ],
            [
                'title' => [
                    'en' => 'HowTo Schema',
                    'ar' => 'HowTo Schema',
                ],
                'description' => [
                    'en' => 'Clear steps in search results for instructional content.',
                    'ar' => 'خطوات واضحة في نتائج البحث للمحتوى التعليمي.',
                ],
                'sort_order' => 6,
            ],
            [
                'title' => [
                    'en' => 'VideoObject Schema',
                    'ar' => 'VideoObject Schema',
                ],
                'description' => [
                    'en' => 'Thumbnail and video details in Google Video results.',
                    'ar' => 'Thumbnail وتفاصيل الفيديو في نتائج Google Video.',
                ],
                'sort_order' => 7,
            ],
        ]);

        /*
        |--------------------------------------------------------------------------
        | Tools
        |--------------------------------------------------------------------------
        */

        $skill->tools()->createMany([
            [
                'icon' => 'search',
                'title' => [
                    'en' => 'Analyze Site Type & Content',
                    'ar' => 'تحليل نوع الموقع والمحتوى',
                ],
                'description' => [
                    'en' => "Identifying appropriate Schema types based on your site type and goals.",
                    'ar' => 'نحدد أنواع Schema المناسبة بناءً على نوع موقعك وأهدافه.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'code',
                'title' => [
                    'en' => 'JSON-LD Implementation',
                    'ar' => 'JSON-LD Implementation',
                ],
                'description' => [
                    'en' => "Implementing Schema using Google's preferred JSON-LD method inside the head.",
                    'ar' => 'تطبيق Schema بطريقة JSON-LD المفضلة من جوجل داخل الـ head.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'badge-check',
                'title' => [
                    'en' => 'Rich Results Test',
                    'ar' => 'Rich Results Test',
                ],
                'description' => [
                    'en' => 'Complete testing using Rich Results Test and Schema Validator to ensure correct implementation.',
                    'ar' => 'اختبار كامل باستخدام Rich Results Test وSchema Validator للتأكد من صحة التطبيق.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'gauge',
                'title' => [
                    'en' => 'GSC Monitoring',
                    'ar' => 'GSC Monitoring',
                ],
                'description' => [
                    'en' => 'Monitoring Rich Results in GSC and fixing any errors immediately.',
                    'ar' => 'مراقبة Rich Results في GSC وإصلاح أي أخطاء فور ظهورها.',
                ],
                'sort_order' => 4,
            ],
        ]);
    }
}
