<?php

namespace Database\Seeders\CaseStudies;

use App\Models\CaseStudySectionSetting;
use Illuminate\Database\Seeder;

class CaseStudySectionSettingSeeder extends Seeder
{
    public function run(): void
    {
        CaseStudySectionSetting::updateOrCreate(
            [
                'id' => 1,
            ],
            [
                /*
                |--------------------------------------------------------------------------
                | CTA Content
                |--------------------------------------------------------------------------
                */

                'title' => [
                    'ar' => 'هل تريد نتائج مشابهة لموقعك؟',
                    'en' => 'Want Similar Results for Your Website?',
                ],

                'description' => [
                    'ar' => 'هذه ليست صدفة — إنها منهجية مثبتة تعمل عبر قطاعات مختلفة. لنبدأ قصة نمو موقعك بخطة واضحة وشفافة.',
                    'en' => 'This isn\'t coincidence — it\'s a proven methodology that works across industries. Let\'s build your growth story with a clear, transparent plan.',
                ],

                'button_text' => [
                    'ar' => 'ابدأ العمل معي',
                    'en' => 'Start Working With Me',
                ],

                'button_url' => '#contact',

                /*
                |--------------------------------------------------------------------------
                | Proof Items 1 - 3
                |--------------------------------------------------------------------------
                */

                'icon_1' => 'circle-check',

                'text_1' => [
                    'ar' => 'نتائج حقيقية بدون تعديل',
                    'en' => 'Real, unaltered results',
                ],

                'icon_2' => 'clock-3',

                'text_2' => [
                    'ar' => 'فترات زمنية مختلفة',
                    'en' => 'Various timeframes',
                ],

                'icon_3' => 'map-pin',

                'text_3' => [
                    'ar' => 'قطاعات متعددة',
                    'en' => 'Multiple industries',
                ],

                /*
                |--------------------------------------------------------------------------
                | CTA Features 4 - 6
                |--------------------------------------------------------------------------
                */

                'icon_4' => 'circle-check',

                'text_4' => [
                    'ar' => 'بدون عقود ملزمة',
                    'en' => 'No binding contracts',
                ],

                'icon_5' => 'circle-check',

                'text_5' => [
                    'ar' => 'تقارير شفافة',
                    'en' => 'Transparent reports',
                ],

                'icon_6' => 'circle-check',

                'text_6' => [
                    'ar' => 'نتائج قابلة للقياس',
                    'en' => 'Measurable results',
                ],

                /*
                |--------------------------------------------------------------------------
                | Status
                |--------------------------------------------------------------------------
                */

                'is_active' => true,
            ]
        );
    }
}
