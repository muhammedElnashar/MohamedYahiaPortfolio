<?php

namespace Database\Seeders\skills;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class CoreWebSeeder extends Seeder
{
    public function run(): void
    {
        $skill = Skill::updateOrCreate(
            [
                'slug' => 'core-web-vitals',
            ],
            [
                'icon' => 'gauge',

                'title' => [
                    'en' => 'Core Web Vitals',
                    'ar' => 'Core Web Vitals',
                ],

                'sort_order' => 1,
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
                    'en' => 'Site Performance Optimization for Top Google Rankings',
                    'ar' => 'تحسين أداء الموقع لتصدر نتائج جوجل',
                ],

                'hero_description' => [
                    'en' => 'Improve LCP, CLS and INP to achieve excellent performance and user experience.',
                    'ar' => 'تحسين LCP وCLS وINP لتحقيق أفضل أداء وتجربة مستخدم مميزة.',
                ],

                'cta_title' => [
                    'en' => 'Your Site Deserves 90+ PageSpeed',
                    'ar' => 'موقعك يستحق درجات PageSpeed 90+',
                ],

                'cta_description' => [
                    'en' => 'Get a free Core Web Vitals audit today.',
                    'ar' => 'احصل على تحليل مجاني لمؤشرات Core Web Vitals.',
                ],

                'cta_button_text' => [
                    'en' => 'Contact via WhatsApp',
                    'ar' => 'تواصل عبر واتساب',
                ],

                'cta_button_url' => 'https://wa.me/201123269452',

                'feature_title' => [
                    'en' => 'What Are Core Web Vitals & How I Optimize Them?',
                    'ar' => 'ما هي Core Web Vitals وكيف أحسّنها؟',
                ],

                'metric_title' => [
                    'en' => 'Core Web Vitals Measurement & Optimization Tools',
                    'ar' => 'أدوات قياس وتحسين Core Web Vitals',
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
                'value' => '+60%',
                'title' => [
                    'en' => 'Average Speed Improvement',
                    'ar' => 'تحسين متوسط السرعة',
                ],
                'sort_order' => 1,
            ],
            [
                'value' => '90+',
                'title' => [
                    'en' => 'PageSpeed Score Achieved',
                    'ar' => 'درجة PageSpeed محققة',
                ],
                'sort_order' => 2,
            ],
            [
                'value' => '200+',
                'title' => [
                    'en' => 'Sites Optimized',
                    'ar' => 'موقع تم تحسينه',
                ],
                'sort_order' => 3,
            ],
            [
                'value' => 'Good',
                'title' => [
                    'en' => 'CWV Assessment',
                    'ar' => 'تقييم Core Web Vitals',
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
                    'en' => 'Largest Contentful Paint (LCP)',
                    'ar' => 'Largest Contentful Paint (LCP)',
                ],
                'description' => [
                    'en' => 'Optimize images, server response time and render-blocking resources.',
                    'ar' => 'تحسين الصور ووقت استجابة الخادم وتقليل الموارد المعيقة للرسم.',
                ],
                'sort_order' => 1,
            ],
            [
                'title' => [
                    'en' => 'Cumulative Layout Shift (CLS)',
                    'ar' => 'Cumulative Layout Shift (CLS)',
                ],
                'description' => [
                    'en' => 'Prevent unexpected layout shifts.',
                    'ar' => 'منع تحرك العناصر أثناء تحميل الصفحة.',
                ],
                'sort_order' => 2,
            ],
            [
                'title' => [
                    'en' => 'Interaction to Next Paint (INP)',
                    'ar' => 'Interaction to Next Paint (INP)',
                ],
                'description' => [
                    'en' => 'Improve interaction responsiveness.',
                    'ar' => 'تحسين سرعة استجابة الصفحة للمستخدم.',
                ],
                'sort_order' => 3,
            ],
            [
                'title' => [
                    'en' => 'Image Optimization',
                    'ar' => 'تحسين الصور',
                ],
                'description' => [
                    'en' => 'WebP, Lazy Loading and responsive images.',
                    'ar' => 'WebP و Lazy Loading وتحسين الصور.',
                ],
                'sort_order' => 4,
            ],
            [
                'title' => [
                    'en' => 'JavaScript Optimization',
                    'ar' => 'تحسين JavaScript',
                ],
                'description' => [
                    'en' => 'Reduce blocking scripts and split bundles.',
                    'ar' => 'تقليل الملفات المعيقة وتقسيم الحزم.',
                ],
                'sort_order' => 5,
            ],
            [
                'title' => [
                    'en' => 'CDN & Caching',
                    'ar' => 'CDN و Caching',
                ],
                'description' => [
                    'en' => 'Improve global loading performance.',
                    'ar' => 'تحسين سرعة تحميل الموقع عالميًا.',
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
                    'en' => 'PageSpeed Insights',
                    'ar' => 'PageSpeed Insights',
                ],
                'description' => [
                    'en' => 'Analyze Mobile and Desktop performance.',
                    'ar' => 'قياس أداء الموقع على الهاتف وسطح المكتب.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'search',
                'title' => [
                    'en' => 'Lighthouse & CrUX',
                    'ar' => 'Lighthouse & CrUX',
                ],
                'description' => [
                    'en' => 'Real user experience metrics.',
                    'ar' => 'قياس بيانات المستخدمين الحقيقيين.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'search',
                'title' => [
                    'en' => 'WebPageTest',
                    'ar' => 'WebPageTest',
                ],
                'description' => [
                    'en' => 'Advanced waterfall analysis.',
                    'ar' => 'تحليل Waterfall بشكل احترافي.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'badge-check',
                'title' => [
                    'en' => 'GSC Core Web Vitals Report',
                    'ar' => 'GSC Core Web Vitals Report',
                ],
                'description' => [
                    'en' => 'Track Core Web Vitals improvements.',
                    'ar' => 'متابعة تحسن Core Web Vitals.',
                ],
                'sort_order' => 4,
            ],
        ]);
    }
}
