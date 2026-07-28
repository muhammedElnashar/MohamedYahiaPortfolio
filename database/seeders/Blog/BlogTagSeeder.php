<?php

namespace Database\Seeders\Blog;

use App\Models\BlogTag;
use Illuminate\Database\Seeder;

class BlogTagSeeder extends Seeder
{
    public function run(): void
    {
        $tags = [
            [
                'name' => [
                    'ar' => 'SEO',
                    'en' => 'SEO',
                ],
                'slug' => 'seo',
            ],

            [
                'name' => [
                    'ar' => 'جوجل',
                    'en' => 'Google',
                ],
                'slug' => 'google',
            ],

            [
                'name' => [
                    'ar' => 'السيو التقني',
                    'en' => 'Technical SEO',
                ],
                'slug' => 'technical-seo',
            ],

            [
                'name' => [
                    'ar' => 'المحتوى',
                    'en' => 'Content',
                ],
                'slug' => 'content',
            ],

            [
                'name' => [
                    'ar' => 'الذكاء الاصطناعي',
                    'en' => 'AI',
                ],
                'slug' => 'ai',
            ],

            [
                'name' => [
                    'ar' => 'GEO',
                    'en' => 'GEO',
                ],
                'slug' => 'geo',
            ],
        ];

        foreach ($tags as $tag) {
            BlogTag::updateOrCreate(
                ['slug' => $tag['slug']],
                [
                    'name' => $tag['name'],
                    'is_active' => true,
                ]
            );
        }
    }
}
