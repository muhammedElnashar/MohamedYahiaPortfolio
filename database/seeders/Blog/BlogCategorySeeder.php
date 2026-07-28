<?php

namespace Database\Seeders\Blog;

use App\Models\BlogCategory;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => [
                    'ar' => 'تحسين محركات البحث',
                    'en' => 'SEO',
                ],
                'slug' => 'seo',
                'description' => [
                    'ar' => 'مقالات وأدلة حول تحسين محركات البحث.',
                    'en' => 'Articles and guides about search engine optimization.',
                ],
                'sort_order' => 1,
            ],

            [
                'name' => [
                    'ar' => 'السيو التقني',
                    'en' => 'Technical SEO',
                ],
                'slug' => 'technical-seo',
                'description' => [
                    'ar' => 'مقالات متخصصة في الجوانب التقنية لتحسين محركات البحث.',
                    'en' => 'Articles covering the technical aspects of SEO.',
                ],
                'sort_order' => 2,
            ],

            [
                'name' => [
                    'ar' => 'استراتيجية المحتوى',
                    'en' => 'Content Strategy',
                ],
                'slug' => 'content-strategy',
                'description' => [
                    'ar' => 'استراتيجيات المحتوى والنمو العضوي.',
                    'en' => 'Content strategy and organic growth.',
                ],
                'sort_order' => 3,
            ],

            [
                'name' => [
                    'ar' => 'البحث والذكاء الاصطناعي',
                    'en' => 'AI Search',
                ],
                'slug' => 'ai-search',
                'description' => [
                    'ar' => 'مقالات حول AEO وGEO وتطور البحث بالذكاء الاصطناعي.',
                    'en' => 'Articles about AEO, GEO and AI-powered search.',
                ],
                'sort_order' => 4,
            ],
        ];

        foreach ($categories as $category) {
            BlogCategory::updateOrCreate(
                ['slug' => $category['slug']],
                [
                    ...$category,
                    'is_active' => true,
                ]
            );
        }
    }
}
