<?php

namespace App\Services;

use App\Enums\PageListEnum;
use App\Models\Blog;
use App\Models\SeoDataPage;
use App\Models\Service;
use App\Models\SeoSpecialty;
use App\Models\Skill;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class SitemapService
{
    protected array $locales = ['ar', 'en'];

    public function generate(): Collection
    {
        return collect()
            ->merge($this->staticPages())
            ->merge($this->services())
            ->merge($this->blogs())
            ->merge($this->skills())
            ->merge($this->platforms());
    }
    protected function shouldBeInSitemap($model): bool
    {
        return ! $model->seo || $model->seo->is_in_sitemap;
    }
    /*
    |--------------------------------------------------------------------------
    | Static Pages
    |--------------------------------------------------------------------------
    */
    protected function staticPages(): Collection
    {
        $pages = SeoDataPage::query()
            ->where('is_in_sitemap', true)
            ->whereIn('key', [
                PageListEnum::HOME->value,
                PageListEnum::ABOUT->value,
                PageListEnum::BLOGS->value,
            ])
            ->get();

        return $pages->map(function (SeoDataPage $page) {

            return match ($page->key) {

                PageListEnum::HOME->value => $this->makeUrl(
                    route: 'home',
                    params: [],
                    lastmod: $page->updated_at,
                    priority: '1.0',
                    changefreq: 'weekly',
                ),

                PageListEnum::ABOUT->value => $this->makeUrl(
                    route: 'about',
                    params: [],
                    lastmod: $page->updated_at,
                    priority: '0.7',
                    changefreq: 'monthly',
                ),

                PageListEnum::BLOGS->value => $this->makeUrl(
                    route: 'blogs.index',
                    params: [],
                    lastmod: $page->updated_at,
                    priority: '0.9',
                    changefreq: 'weekly',
                ),

            };

        });
    }

/*    protected function staticPages(): Collection
    {
        $pages = [

            [
                'route' => 'home',
                'priority' => '1.0',
                'changefreq' => 'weekly',
            ],

            [
                'route' => 'blogs.index',
                'priority' => '0.9',
                'changefreq' => 'weekly',
            ],

            [
                'route' => 'about',
                'priority' => '0.7',
                'changefreq' => 'monthly',
            ],

        ];

        return collect($pages)->map(function ($page) {

            return $this->makeUrl(

                route: $page['route'],

                params: [],

                lastmod: null,

                priority: $page['priority'],

                changefreq: $page['changefreq'],

            );

        });
    }*/

    /*
    |--------------------------------------------------------------------------
    | Services
    |--------------------------------------------------------------------------
    */

    protected function services(): Collection
    {
        return Service::query()
            ->with('seo')
            ->where('is_active', true)
            ->latest('updated_at')
            ->get()
            ->filter(fn (Service $service) => $this->shouldBeInSitemap($service))
            ->map(fn($service) =>

            $this->makeUrl(

                route: 'services.show',

                params: [

                    'service' => $service,

                ],

                lastmod: $service->updated_at,

                priority: '0.9',

                changefreq: 'monthly',

            )

            );
    }

    /*
    |--------------------------------------------------------------------------
    | Blogs
    |--------------------------------------------------------------------------
    */

    protected function blogs(): Collection
    {
        return Blog::query()
            ->with('seo')
            ->where('is_active', true)
            ->latest('updated_at')
            ->get()
            ->filter(fn (Blog $blog) => $this->shouldBeInSitemap($blog))

            ->map(fn($blog) =>

            $this->makeUrl(

                route: 'blogs.show',

                params: [

                    'slug' => $blog->slug,

                ],

                lastmod: $blog->updated_at,

                priority: '0.8',

                changefreq: 'weekly',

            )

            );
    }

    /*
    |--------------------------------------------------------------------------
    | Skills
    |--------------------------------------------------------------------------
    */

    protected function skills(): Collection
    {
        return Skill::query()
            ->with('seo')
            ->where('is_active', true)
            ->where('has_page', true)
            ->latest('updated_at')
            ->get()
            ->filter(fn (Skill $skill) => $this->shouldBeInSitemap($skill))

            ->map(fn($skill) =>

            $this->makeUrl(

                route: 'skills.show',

                params: [

                    'skill' => $skill,

                ],

                lastmod: $skill->updated_at,

                priority: '0.8',

                changefreq: 'monthly',

            )

            );
    }

    /*
    |--------------------------------------------------------------------------
    | Platforms
    |--------------------------------------------------------------------------
    */

    protected function platforms(): Collection
    {
        return SeoSpecialty::query()
            ->with('seo')
            ->where('is_active', true)
            ->latest('updated_at')
            ->get()
            ->filter(fn (SeoSpecialty $platform) => $this->shouldBeInSitemap($platform))

            ->map(fn($platform) =>

            $this->makeUrl(

                route: 'platforms.show',

                params: [

                    'platform' => $platform,

                ],

                lastmod: $platform->updated_at,

                priority: '0.8',

                changefreq: 'monthly',

            )

            );
    }

    /*
    |--------------------------------------------------------------------------
    | URL Builder
    |--------------------------------------------------------------------------
    */

    protected function makeUrl(
        string $route,
        array $params,
               $lastmod,
        string $priority,
        string $changefreq
    ): array {

        $alternates = [];

        foreach ($this->locales as $locale) {

            $alternates[$locale] = route(
                $route,
                array_merge(
                    ['locale' => $locale],
                    $params
                )
            );

        }

        return [

            'loc' => $alternates['en'],

            'alternates' => $alternates,

            'lastmod' => $lastmod,

            'priority' => $priority,

            'changefreq' => $changefreq,

        ];
    }
}
