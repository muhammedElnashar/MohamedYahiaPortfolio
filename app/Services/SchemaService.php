<?php

namespace App\Services;

use App\Models\Blog;
use App\Models\SeoSpecialty;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Support\Collection;

class SchemaService
{
    /*
    |--------------------------------------------------------------------------
    | Skill
    |--------------------------------------------------------------------------
    */

    public function skill(Skill $skill): array
    {
        $locale = app()->getLocale();

        $url = route('skills.show', [
            'locale' => $locale,
            'skill' => $skill,
        ]);

        $page = $skill->page;

        $webPage = $this->clean([
            '@context' => 'https://schema.org',
            '@type' => 'WebPage',

            '@id' => $url . '#webpage',

            'url' => $url,

            'name' =>
                $page?->hero_title
                    ?: $skill->title,

            'description' =>
                $page?->hero_description,

            'inLanguage' => $locale,
        ]);

        return [
            $webPage,

            $this->breadcrumb([
                [
                    'name' => $this->homeLabel(),
                    'url' => $this->homeUrl(),
                ],
                [
                    'name' => $skill->title,
                    'url' => $url,
                ],
            ]),
        ];
    }


    /*
    |--------------------------------------------------------------------------
    | Service
    |--------------------------------------------------------------------------
    */

    public function service(Service $service): array
    {
        $locale = app()->getLocale();

        $url = route('services.show', [
            'locale' => $locale,
            'service' => $service,
        ]);

        $serviceSchema = $this->clean([
            '@context' => 'https://schema.org',
            '@type' => 'Service',

            '@id' => $url . '#service',

            'url' => $url,

            'name' => $service->title,

            'description' =>
                $service->meta_description
                    ?: $service->hero_description
                    ?: $service->short_description,

            'serviceType' =>
                $service->category?->name,

            'inLanguage' => $locale,
        ]);

        $schemas = [
            $serviceSchema,

            $this->breadcrumb([
                [
                    'name' => $this->homeLabel(),
                    'url' => $this->homeUrl(),
                ],
                [
                    'name' => $service->title,
                    'url' => $url,
                ],
            ]),
        ];


        /*
        |--------------------------------------------------------------------------
        | FAQ
        |--------------------------------------------------------------------------
        */

        if (
            $service->relationLoaded('faqs')
            && $service->faqs->isNotEmpty()
        ) {
            $schemas[] = $this->faq(
                $service->faqs
            );
        }

        return $schemas;
    }


    /*
    |--------------------------------------------------------------------------
    | Platform / SEO Specialty
    |--------------------------------------------------------------------------
    */

    public function platform(SeoSpecialty $platform): array
    {
        $locale = app()->getLocale();

        $url = route('platforms.show', [
            'locale' => $locale,
            'platform' => $platform->slug,
        ]);

        $webPage = $this->clean([
            '@context' => 'https://schema.org',
            '@type' => 'WebPage',

            '@id' => $url . '#webpage',

            'url' => $url,

            'name' =>
                $platform->meta_title
                    ?: $platform->title
                    ?: $platform->name,

            'description' =>
                $platform->meta_description
                    ?: $platform->description
                    ?: $platform->card_description,

            'inLanguage' => $locale,
        ]);

        $schemas = [
            $webPage,

            $this->breadcrumb([
                [
                    'name' => $this->homeLabel(),
                    'url' => $this->homeUrl(),
                ],
                [
                    'name' => $platform->name,
                    'url' => $url,
                ],
            ]),
        ];


        /*
        |--------------------------------------------------------------------------
        | FAQ
        |--------------------------------------------------------------------------
        */

        if (
            $platform->relationLoaded('faqs')
            && $platform->faqs->isNotEmpty()
        ) {
            $schemas[] = $this->faq(
                $platform->faqs
            );
        }

        return $schemas;
    }


    /*
    |--------------------------------------------------------------------------
    | Blog
    |--------------------------------------------------------------------------
    */

    public function blog(Blog $blog): array
    {
        $locale = app()->getLocale();

        $url = route('blogs.show', [
            'locale' => $locale,
            'slug' => $blog->slug,
        ]);

        $blogUrl = route('blogs.index', [
            'locale' => $locale,
        ]);


        /*
        |--------------------------------------------------------------------------
        | BlogPosting
        |--------------------------------------------------------------------------
        */

        $article = [
            '@context' => 'https://schema.org',
            '@type' => 'BlogPosting',

            '@id' => $url . '#article',

            'url' => $url,

            'headline' => $blog->title,

            'description' =>
                $blog->meta_description
                    ?: $blog->excerpt,

            'datePublished' =>
                $blog->published_at?->toIso8601String(),

            'dateModified' =>
                $blog->updated_at?->toIso8601String(),

            'inLanguage' => $locale,

            'mainEntityOfPage' => [
                '@type' => 'WebPage',
                '@id' => $url,
            ],
        ];


        /*
        |--------------------------------------------------------------------------
        | Author
        |--------------------------------------------------------------------------
        */

        if ($blog->author_name) {
            $article['author'] = [
                '@type' => 'Person',
                'name' => $blog->author_name,
            ];
        }


        /*
        |--------------------------------------------------------------------------
        | Image
        |--------------------------------------------------------------------------
        */

        if ($blog->featured_image) {
            $article['image'] = asset(
                'storage/' . $blog->featured_image
            );
        }


        /*
        |--------------------------------------------------------------------------
        | Category
        |--------------------------------------------------------------------------
        */

        if ($blog->category) {
            $article['articleSection'] =
                $blog->category->name;
        }


        /*
        |--------------------------------------------------------------------------
        | Keywords from Tags
        |--------------------------------------------------------------------------
        */

        if (
            $blog->relationLoaded('tags')
            && $blog->tags->isNotEmpty()
        ) {
            $article['keywords'] = $blog->tags
                ->pluck('name')
                ->implode(', ');
        }


        $schemas = [
            $this->clean($article),

            $this->breadcrumb([
                [
                    'name' => $this->homeLabel(),
                    'url' => $this->homeUrl(),
                ],
                [
                    'name' => $this->blogLabel(),
                    'url' => $blogUrl,
                ],
                [
                    'name' => $blog->title,
                    'url' => $url,
                ],
            ]),
        ];


        /*
        |--------------------------------------------------------------------------
        | FAQ
        |--------------------------------------------------------------------------
        */

        if (
            $blog->relationLoaded('faqs')
            && $blog->faqs->isNotEmpty()
        ) {
            $schemas[] = $this->faq(
                $blog->faqs
            );
        }


        return $schemas;
    }

    public function blogIndex($blogs): array
    {
        $locale = app()->getLocale();

        $url = route('blogs.index', [
            'locale' => $locale,
        ]);

        /*
        |--------------------------------------------------------------------------
        | Collection Page
        |--------------------------------------------------------------------------
        */

        $collectionPage = [
            '@context' => 'https://schema.org',
            '@type' => 'CollectionPage',

            '@id' => $url . '#webpage',

            'url' => $url,

            'name' => $locale === 'ar'
                ? 'المدونة'
                : 'Blog',

            'description' => $locale === 'ar'
                ? 'استكشف أحدث المقالات والأدلة والنصائح المتخصصة.'
                : 'Explore the latest articles, guides, and expert insights.',

            'inLanguage' => $locale,
        ];


        /*
        |--------------------------------------------------------------------------
        | Articles List
        |--------------------------------------------------------------------------
        */

        $itemList = [
            '@context' => 'https://schema.org',
            '@type' => 'ItemList',

            '@id' => $url . '#articles',

            'numberOfItems' => $blogs->count(),

            'itemListElement' => $blogs
                ->values()
                ->map(function ($blog, $index) use ($locale) {

                    return [
                        '@type' => 'ListItem',

                        'position' => $index + 1,

                        'url' => route('blogs.show', [
                            'locale' => $locale,
                            'slug' => $blog->slug,
                        ]),

                        'name' => $blog->title,
                    ];

                })
                ->all(),
        ];


        /*
        |--------------------------------------------------------------------------
        | Breadcrumb
        |--------------------------------------------------------------------------
        */

        $breadcrumb = $this->breadcrumb([
            [
                'name' => $this->homeLabel(),
                'url' => $this->homeUrl(),
            ],

            [
                'name' => $locale === 'ar'
                    ? 'المدونة'
                    : 'Blog',

                'url' => $url,
            ],
        ]);


        return [
            $collectionPage,
            $itemList,
            $breadcrumb,
        ];
    }
    /*
    |--------------------------------------------------------------------------
    | FAQ Schema
    |--------------------------------------------------------------------------
    */

    private function faq(Collection $faqs): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',

            'mainEntity' => $faqs
                ->map(function ($faq) {
                    return [
                        '@type' => 'Question',

                        'name' => strip_tags(
                            (string) $faq->question
                        ),

                        'acceptedAnswer' => [
                            '@type' => 'Answer',

                            'text' => strip_tags(
                                (string) $faq->answer
                            ),
                        ],
                    ];
                })
                ->values()
                ->all(),
        ];
    }


    /*
    |--------------------------------------------------------------------------
    | Breadcrumb Schema
    |--------------------------------------------------------------------------
    */

    private function breadcrumb(array $items): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',

            'itemListElement' => collect($items)
                ->values()
                ->map(function ($item, $index) {
                    return [
                        '@type' => 'ListItem',

                        'position' => $index + 1,

                        'name' => $item['name'],

                        'item' => $item['url'],
                    ];
                })
                ->all(),
        ];
    }


    /*
    |--------------------------------------------------------------------------
    | Remove null / empty values
    |--------------------------------------------------------------------------
    */

    private function clean(array $data): array
    {
        return array_filter(
            $data,
            static fn ($value) =>
                $value !== null
                && $value !== ''
                && $value !== []
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Shared URLs / Labels
    |--------------------------------------------------------------------------
    */

    private function homeUrl(): string
    {
        return route('home', [
            'locale' => app()->getLocale(),
        ]);
    }


    private function homeLabel(): string
    {
        return app()->isLocale('ar')
            ? 'الرئيسية'
            : 'Home';
    }


    private function blogLabel(): string
    {
        return app()->isLocale('ar')
            ? 'المدونة'
            : 'Blog';
    }
}
