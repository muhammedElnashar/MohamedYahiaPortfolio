<?php

namespace Database\Seeders\skills;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class KeywordResearchSeeder extends Seeder
{
    public function run(): void
    {
        $skill = Skill::updateOrCreate(
            [
                'slug' => 'keyword-research',
            ],
            [
                'icon' => 'search',

                'title' => [
                    'en' => 'Keyword Research',
                    'ar' => 'Keyword Research',
                ],

                'sort_order' => 3,
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
                    'en' => "The Right Keyword Determines Your Site's Fate",
                    'ar' => 'الكلمة الصحيحة تُحدد مصير موقعك',
                ],

                'hero_description' => [
                    'en' => "Keyword research is not just finding words — it's a deep understanding of what your customer searches for, what they want, and what will drive them to buy. I build a comprehensive keyword strategy covering every stage of the customer journey.",
                    'ar' => 'بحث الكلمات المفتاحية ليس مجرد إيجاد كلمات — بل فهم عميق لما يبحث عنه عميلك، ماذا يريد، وما الذي سيدفعه للشراء. أبني استراتيجية كلمات مفتاحية شاملة تغطي كل مرحلة من رحلة العميل.',
                ],

                'cta_title' => [
                    'en' => 'The Right Keywords Start Now',
                    'ar' => 'الكلمة الصحيحة تبدأ الآن',
                ],

                'cta_description' => [
                    'en' => 'Contact now for comprehensive keyword research for your website or store.',
                    'ar' => 'تواصل الآن لإجراء بحث شامل عن الكلمات المفتاحية لموقعك أو متجرك.',
                ],

                'cta_button_text' => [
                    'en' => 'Contact via WhatsApp',
                    'ar' => 'تواصل عبر واتساب',
                ],

                'cta_button_url' => 'https://wa.me/201123269452',

                'feature_title' => [
                    'en' => 'My Keyword Research Methodology',
                    'ar' => 'منهجيتي في بحث الكلمات المفتاحية',
                ],

                'metric_title' => [
                    'en' => 'Keyword Research Tools I Use',
                    'ar' => 'أدوات بحث الكلمات التي أستخدمها',
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
                'value' => '10K+',
                'title' => [
                    'en' => 'Keywords analyzed per client',
                    'ar' => 'كلمة محللة لعميل واحد',
                ],
                'sort_order' => 1,
            ],
            [
                'value' => 'Ahrefs',
                'title' => [
                    'en' => 'Primary analysis tool',
                    'ar' => 'أداة التحليل الرئيسية',
                ],
                'sort_order' => 2,
            ],
            [
                'value' => 'KSA',
                'title' => [
                    'en' => 'Saudi market specialist',
                    'ar' => 'متخصص في السوق السعودي',
                ],
                'sort_order' => 3,
            ],
            [
                'value' => 'Arabic',
                'title' => [
                    'en' => 'Bilingual expertise',
                    'ar' => 'ثنائي اللغة',
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
                    'en' => 'Search Intent Analysis',
                    'ar' => 'Search Intent Analysis',
                ],
                'description' => [
                    'en' => 'Understanding searcher intent — Informational, Transactional, or Navigational.',
                    'ar' => 'فهم نية الباحث — Informational أم Transactional أم Navigational.',
                ],
                'sort_order' => 1,
            ],
            [
                'title' => [
                    'en' => 'Competitor Gap Analysis',
                    'ar' => 'Competitor Gap Analysis',
                ],
                'description' => [
                    'en' => "Discovering keywords your competitors rank for that you don't appear in.",
                    'ar' => 'اكتشاف الكلمات التي يتصدر بها منافسوك ولا تظهر فيها.',
                ],
                'sort_order' => 2,
            ],
            [
                'title' => [
                    'en' => 'Long-tail Keywords',
                    'ar' => 'Long-tail Keywords',
                ],
                'description' => [
                    'en' => 'Targeting long-tail keywords with lower competition and higher conversion rates.',
                    'ar' => 'استهداف كلمات طويلة الذيل أقل منافسة وأعلى تحويلاً.',
                ],
                'sort_order' => 3,
            ],
            [
                'title' => [
                    'en' => 'Arabic Keyword Nuances',
                    'ar' => 'Arabic Keyword Nuances',
                ],
                'description' => [
                    'en' => 'Understanding the subtle differences between Arabic dialects — Saudi, UAE, Kuwaiti, and Egyptian.',
                    'ar' => 'فهم الفروق الدقيقة بين اللهجات — السعودية والإماراتية والكويتية والمصرية.',
                ],
                'sort_order' => 4,
            ],
            [
                'title' => [
                    'en' => 'Topic Clusters',
                    'ar' => 'Topic Clusters',
                ],
                'description' => [
                    'en' => 'Building comprehensive topic groups (Pillar Pages + Cluster Pages).',
                    'ar' => 'بناء مجموعات موضوعية متكاملة (Pillar Pages + Cluster Pages).',
                ],
                'sort_order' => 5,
            ],
            [
                'title' => [
                    'en' => 'Seasonal Keywords',
                    'ar' => 'Seasonal Keywords',
                ],
                'description' => [
                    'en' => 'Targeting seasonal keywords (Ramadan, Back to School, Summer season).',
                    'ar' => 'استهداف الكلمات الموسمية (رمضان، العودة للمدارس، موسم الصيف).',
                ],
                'sort_order' => 6,
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
                    'en' => 'Ahrefs Keywords Explorer',
                    'ar' => 'Ahrefs Keywords Explorer',
                ],
                'description' => [
                    'en' => 'Deep analysis of search volume, difficulty, and ranking opportunities in the Arab market.',
                    'ar' => 'التحليل المعمّق لحجم البحث والصعوبة وفرص الترتيب في السوق العربي.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'search',
                'title' => [
                    'en' => 'SEMrush & Google KW Planner',
                    'ar' => 'SEMrush & Google KW Planner',
                ],
                'description' => [
                    'en' => 'Additional data and competitor analysis for a comprehensive picture.',
                    'ar' => 'بيانات إضافية وتحليل المنافسين للحصول على صورة شاملة.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'search',
                'title' => [
                    'en' => 'Google Search Console',
                    'ar' => 'Google Search Console',
                ],
                'description' => [
                    'en' => "Leveraging actual GSC data to discover keywords you appear in but don't dominate.",
                    'ar' => 'استغلال بيانات GSC الفعلية لاكتشاف كلمات تظهر بها لكن لا تتصدرها.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'file-spreadsheet',
                'title' => [
                    'en' => 'Organized Excel/Sheets Delivery',
                    'ar' => 'تسليم Excel/Sheets منظم',
                ],
                'description' => [
                    'en' => 'Organized keyword table with search volume, difficulty, Search Intent, and implementation priority.',
                    'ar' => 'جدول كلمات مفتاحية مرتب ومنظم مع حجم البحث والصعوبة وSearch Intent وأولوية التنفيذ.',
                ],
                'sort_order' => 4,
            ],
        ]);
    }
}
