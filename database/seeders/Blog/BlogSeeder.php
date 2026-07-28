<?php

namespace Database\Seeders\Blog;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        $category = BlogCategory::where('slug', 'seo')->first();

        $blog = Blog::updateOrCreate(
            [
                'slug' => 'complete-seo-guide',
            ],
            [
                'blog_category_id' => $category?->id,

                'title' => [
                    'ar' => 'الدليل الشامل لتحسين محركات البحث SEO',
                    'en' => 'The Complete Guide to SEO',
                ],

                'excerpt' => [
                    'ar' => 'دليل عملي لفهم SEO وبناء استراتيجية تساعد موقعك على تحسين الظهور وزيادة الزيارات العضوية.',
                    'en' => 'A practical guide to SEO and building a strategy that improves search visibility and organic traffic.',
                ],

                'content' => [
                    'ar' => '
                        <h2>ما هو SEO؟</h2>

                        <p>
                            تحسين محركات البحث هو مجموعة من الاستراتيجيات
                            التي تساعد المواقع على تحسين ظهورها في نتائج البحث.
                        </p>

                        <h2>أهم عناصر SEO</h2>

                        <ul>
                            <li>السيو التقني</li>
                            <li>تحسين الصفحات</li>
                            <li>استراتيجية المحتوى</li>
                            <li>بناء السلطة والروابط</li>
                        </ul>
                    ',

                    'en' => '
                        <h2>What is SEO?</h2>

                        <p>
                            Search Engine Optimization includes strategies
                            designed to improve website visibility in
                            organic search results.
                        </p>

                        <h2>Core Areas of SEO</h2>

                        <ul>
                            <li>Technical SEO</li>
                            <li>On-Page SEO</li>
                            <li>Content Strategy</li>
                            <li>Authority and Link Building</li>
                        </ul>
                    ',
                ],

                'featured_image' => null,

                'author_name' => 'SEO Team',

                'reading_time' => 7,

                'published_at' => now(),

                'meta_title' => [
                    'ar' => 'الدليل الشامل لتحسين محركات البحث SEO',
                    'en' => 'Complete SEO Guide | Search Engine Optimization',
                ],

                'meta_description' => [
                    'ar' => 'دليل شامل لفهم تحسين محركات البحث وأهم استراتيجيات SEO لتحسين ظهور موقعك وزيادة الزيارات العضوية.',
                    'en' => 'A complete guide to SEO covering the strategies used to improve website visibility and grow targeted organic traffic.',
                ],

                'is_featured' => true,
                'is_active' => true,
            ]
        );

        $tagIds = BlogTag::query()
            ->whereIn('slug', [
                'seo',
                'google',
                'content',
            ])
            ->pluck('id');

        $blog->tags()->sync($tagIds);
    }
}
