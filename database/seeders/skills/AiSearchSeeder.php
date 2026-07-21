<?php

namespace Database\Seeders\skills;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class AiSearchSeeder extends Seeder
{
    public function run(): void
    {
        $skill = Skill::updateOrCreate(
            [
                'slug' => 'ai-search-optimization',
            ],
            [
                'icon' => 'bot',

                'title' => [
                    'en' => 'AI Search Optimization',
                    'ar' => 'AI Search Optimization',
                ],

                'sort_order' => 4,
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
                    'en' => 'Optimizing Visibility in ChatGPT, Gemini & Perplexity',
                    'ar' => 'تحسين الظهور في ChatGPT وGemini وPerplexity',
                ],

                'hero_description' => [
                    'en' => 'Search has changed. Customers no longer search only on Google — they ask ChatGPT, Gemini, and Perplexity. I help you build a strong presence inside these new engines through AEO, GEO, and AI Search Optimization.',
                    'ar' => 'البحث تغيّر. لم يعد العملاء يبحثون فقط في جوجل — بل يسألون ChatGPT وGemini وPerplexity. أساعدك تبني حضوراً قوياً داخل هذه المحركات الجديدة من خلال AEO وGEO وAI Search Optimization.',
                ],

                'cta_title' => [
                    'en' => 'The Future of Search Has Started — Be Part of It',
                    'ar' => 'مستقبل البحث بدأ الآن — كن جزءاً منه',
                ],

                'cta_description' => [
                    'en' => 'Contact now for a custom AI Search strategy for your brand and site.',
                    'ar' => 'تواصل الآن لاستراتيجية AI Search مخصصة لبراندك وموقعك.',
                ],

                'cta_button_text' => [
                    'en' => 'Contact via WhatsApp',
                    'ar' => 'تواصل عبر واتساب',
                ],

                'cta_button_url' => 'https://wa.me/201123269452',

                'feature_title' => [
                    'en' => 'What I Do to Optimize Your AI Search Visibility?',
                    'ar' => 'ماذا أفعل لتحسين ظهورك في AI Search؟',
                ],

                'metric_title' => [
                    'en' => 'Why Is AI Search Important Now?',
                    'ar' => 'لماذا AI Search مهم الآن؟',
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
                'value' => 'AEO',
                'title' => [
                    'en' => 'Answer Engine Optimization',
                    'ar' => 'Answer Engine Optimization',
                ],
                'sort_order' => 1,
            ],
            [
                'value' => 'GEO',
                'title' => [
                    'en' => 'Generative Engine Optimization',
                    'ar' => 'Generative Engine Optimization',
                ],
                'sort_order' => 2,
            ],
            [
                'value' => 'AI',
                'title' => [
                    'en' => 'Future of Search',
                    'ar' => 'مستقبل البحث',
                ],
                'sort_order' => 3,
            ],
            [
                'value' => '2025',
                'title' => [
                    'en' => 'Now Not Tomorrow',
                    'ar' => 'الآن وليس غداً',
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
                    'en' => 'Strong E-E-A-T',
                    'ar' => 'E-E-A-T قوي',
                ],
                'description' => [
                    'en' => 'Building Experience, Expertise, Authoritativeness, and Trustworthiness — core pillars of AI trust.',
                    'ar' => 'بناء Experience وExpertise وAuthoritativeness وTrustworthiness — المحاور الأساسية لثقة الـ AI.',
                ],
                'sort_order' => 1,
            ],
            [
                'title' => [
                    'en' => 'Answer-Focused Content',
                    'ar' => 'محتوى يُجيب على أسئلة',
                ],
                'description' => [
                    'en' => 'Optimizing content to directly answer audience questions (AEO).',
                    'ar' => 'تحسين المحتوى للإجابة المباشرة على أسئلة الجمهور (AEO).',
                ],
                'sort_order' => 2,
            ],
            [
                'title' => [
                    'en' => 'AI Structured Data',
                    'ar' => 'Structured Data للـ AI',
                ],
                'description' => [
                    'en' => 'Schema Markup that helps AI understand and process your content.',
                    'ar' => 'Schema Markup يساعد الـ AI على فهم ومعالجة محتواك.',
                ],
                'sort_order' => 3,
            ],
            [
                'title' => [
                    'en' => 'Brand Mentions Strategy',
                    'ar' => 'Brand Mentions Strategy',
                ],
                'description' => [
                    'en' => 'Building brand mentions across the web to increase AI answer visibility probability.',
                    'ar' => 'بناء ذكر البراند عبر الإنترنت لزيادة احتمالية الظهور في إجابات AI.',
                ],
                'sort_order' => 4,
            ],
            [
                'title' => [
                    'en' => 'AI Overviews Optimization',
                    'ar' => 'AI Overviews Optimization',
                ],
                'description' => [
                    'en' => 'Optimizing content to appear inside Google AI Overviews (SGE).',
                    'ar' => 'تحسين المحتوى للظهور داخل Google AI Overviews (SGE).',
                ],
                'sort_order' => 5,
            ],
            [
                'title' => [
                    'en' => 'Entity Building',
                    'ar' => 'Entity Building',
                ],
                'description' => [
                    'en' => "Building the brand's digital entity inside Google's Knowledge Graph.",
                    'ar' => 'بناء الكيان الرقمي للبراند داخل Knowledge Graph الخاص بجوجل.',
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
                'icon' => 'bot',
                'title' => [
                    'en' => 'ChatGPT Answers Instead of Google',
                    'ar' => 'ChatGPT يُجيب بدلاً من جوجل',
                ],
                'description' => [
                    'en' => 'Millions start their search on ChatGPT — does it mention your business?',
                    'ar' => 'ملايين الأشخاص يبدأون بحثهم من ChatGPT — هل يذكر بيزنسك؟',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'sparkles',
                'title' => [
                    'en' => 'Google AI Overviews',
                    'ar' => 'Google AI Overviews',
                ],
                'description' => [
                    'en' => 'Google displays AI summaries at the top of results — your content must be a source.',
                    'ar' => 'جوجل يعرض ملخصات AI في أعلى النتائج — يجب أن يكون محتواك مصدراً لها.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'trending-up',
                'title' => [
                    'en' => 'Perplexity & Gemini',
                    'ar' => 'Perplexity & Gemini',
                ],
                'description' => [
                    'en' => 'New AI search engines gaining millions of daily users.',
                    'ar' => 'محركات بحث AI جديدة تكسب ملايين المستخدمين يومياً.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'zap',
                'title' => [
                    'en' => 'Early Movers Win',
                    'ar' => 'المبكر يفوز',
                ],
                'description' => [
                    'en' => 'Those who optimize for AI Search now build a massive competitive advantage before competitors catch on.',
                    'ar' => 'من يحسّن لـ AI Search الآن يبني ميزة تنافسية ضخمة قبل أن يتنبّه المنافسون.',
                ],
                'sort_order' => 4,
            ],
        ]);
    }
}
