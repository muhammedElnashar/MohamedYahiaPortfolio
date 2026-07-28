<?php

namespace Database\Seeders;

use App\Models\HomeBelief;
use Illuminate\Database\Seeder;

class HomeBeliefSeeder extends Seeder
{
    public function run(): void
    {
        $beliefs = [

            /*
            |--------------------------------------------------------------------------
            | BELIEF #01
            |--------------------------------------------------------------------------
            */

            [
                'number' => 1,

                'title' => [
                    'ar' => 'النتائج أهم من التقارير',
                    'en' => 'Results Matter More Than Reports',
                ],

                'description' => [
                    'ar' => 'كثير من وكالات SEO تبيع تقارير جميلة بدون نتائج حقيقية. أنا أؤمن أن المقياس الوحيد هو: هل زادت مبيعاتك؟ هل نما ترافيكك؟ هل تحسنت إيراداتك؟ باقي التفاصيل لا تهمني.',
                    'en' => 'Many SEO agencies sell beautiful reports without real results. I believe the only metrics that matter are whether your sales increased, your traffic grew, and your revenue improved.',
                ],

                'sort_order' => 1,
                'is_active' => true,
            ],

            /*
            |--------------------------------------------------------------------------
            | BELIEF #02
            |--------------------------------------------------------------------------
            */

            [
                'number' => 2,

                'title' => [
                    'ar' => 'SEO خبر + علم + بيانات',
                    'en' => 'SEO = Experience + Science + Data',
                ],

                'description' => [
                    'ar' => 'لا وعود سريعة ولا حلول سحرية. SEO الحقيقي يُبنى على تحليل عميق، قرارات مبنية على بيانات، وصبر استراتيجي. أرفض العمل مع من يريد نتائج فورية بأساليب مخالفة.',
                    'en' => 'No quick promises or magic solutions. Real SEO is built on deep analysis, data-driven decisions, and strategic patience. I refuse to work with those seeking instant results through questionable tactics.',
                ],

                'sort_order' => 2,
                'is_active' => true,
            ],

            /*
            |--------------------------------------------------------------------------
            | BELIEF #03
            |--------------------------------------------------------------------------
            */

            [
                'number' => 3,

                'title' => [
                    'ar' => 'المستقبل هو AI Search — وأنا مستعد',
                    'en' => 'The Future Is AI Search — And I Am Ready',
                ],

                'description' => [
                    'ar' => 'البحث يتغير. ChatGPT وPerplexity وAI Overviews أصبحت جزءًا من رحلة الشراء. من لا يبدأ من اليوم سيخسر غدًا. رؤيتي هي مساعدتك لتظهر في المحركات التقليدية وهذا العالم الجديد قبل منافسيك.',
                    'en' => 'Search is changing. ChatGPT, Perplexity, and AI Overviews are becoming part of the buying journey. Those who do not start today will fall behind tomorrow. My goal is to help you appear in traditional search and this new AI-driven landscape before your competitors.',
                ],

                'sort_order' => 3,
                'is_active' => true,
            ],

            /*
            |--------------------------------------------------------------------------
            | BELIEF #04
            |--------------------------------------------------------------------------
            */

            [
                'number' => 4,

                'title' => [
                    'ar' => 'كل بزنس يستحق فرصة حقيقية في Google',
                    'en' => 'Every Business Deserves a Real Opportunity on Google',
                ],

                'description' => [
                    'ar' => 'سواء كنت متجرًا ناشئًا أو شركة راسخة — كل بزنس يحتاج فرصة حقيقية قبل مشكلة حقيقية. فأنت تستحق أن يجدك العميل أولًا. هذا ما أعمل على تحقيقه كل يوم.',
                    'en' => 'Whether you are a growing store or an established company, every business deserves a real opportunity to be discovered. You deserve to be found by your customers first, and that is what I work toward every day.',
                ],

                'sort_order' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($beliefs as $belief) {
            HomeBelief::updateOrCreate(
                [
                    'number' => $belief['number'],
                ],
                $belief
            );
        }
    }
}
