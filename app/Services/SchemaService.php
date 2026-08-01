<?php

namespace App\Services;

use App\Models\Blog;
use App\Models\SeoSpecialty;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class SchemaService
{
    /*
    |--------------------------------------------------------------------------
    | Organization (المرجع الأساسي لكل الصفحات)
    |--------------------------------------------------------------------------
    */

    public function organization(): array
    {
        $org = config('schema.organization');
        $locale = app()->getLocale();

        return $this->clean([
            '@context' => 'https://schema.org',
            '@type' => 'Organization',

            '@id' => url('/') . '#organization',

            'name' => $org['name'][$locale] ?? $org['name']['en'],

            'legalName' => $org['legal_name'] ?? null,

            'url' => url('/'),

            'logo' => [
                '@type' => 'ImageObject',
                'url' => asset($org['logo']),
            ],

            'image' => asset($org['logo']),

            'sameAs' => array_values(array_filter($org['same_as'] ?? [])),

            'contactPoint' => $this->clean([
                '@type' => 'ContactPoint',
                'telephone' => $org['phone'] ?? null,
                'email' => $org['email'] ?? null,
                'contactType' => 'customer service',
                'availableLanguage' => ['ar', 'en'],
            ]),
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | WebSite (لصفحة الهوم بس - بيفعّل Sitelinks Search Box)
    |--------------------------------------------------------------------------
    */

    public function website(): array
    {
        $locale = app()->getLocale();
        $org = config('schema.organization');

        return $this->clean([
            '@context' => 'https://schema.org',
            '@type' => 'WebSite',

            '@id' => url('/') . '#website',

            'url' => url('/'),

            'name' => $org['name'][$locale] ?? $org['name']['en'],

            'inLanguage' => $locale,

            'publisher' => [
                '@id' => url('/') . '#organization',
            ],

            'potentialAction' => [
                '@type' => 'SearchAction',
                'target' => [
                    '@type' => 'EntryPoint',
                    'urlTemplate' => route('blogs.index', ['locale' => $locale]) . '?search={search_term_string}',
                ],
                'query-input' => 'required name=search_term_string',
            ],
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | Home Page
    |--------------------------------------------------------------------------
    */

    public function home($homePage = null): array
    {
        // homePage: أي موديل عندك (Setting / HomePage / ...) لو محمّل معاه faqs
        $version = $homePage?->updated_at ?? now()->addHour();

        return $this->remember('home', $version, function () use ($homePage) {
            $schemas = [
                $this->organization(),
                $this->website(),
            ];

            return $this->withFaqs($homePage, $schemas);
        });
    }

    /*
    |--------------------------------------------------------------------------
    | About Page
    |--------------------------------------------------------------------------
    */

    public function about(): array
    {
        $locale = app()->getLocale();
        $url = route('about', ['locale' => $locale]);

        return $this->remember('about', now()->addHour(), function () use ($url, $locale) {
            return [
                $this->clean([
                    '@context' => 'https://schema.org',
                    '@type' => 'AboutPage',

                    '@id' => $url . '#webpage',

                    'url' => $url,

                    'isPartOf' => ['@id' => url('/') . '#website'],

                    'about' => ['@id' => url('/') . '#organization'],

                    'inLanguage' => $locale,
                ]),

                $this->breadcrumb([
                    ['name' => $this->homeLabel(), 'url' => $this->homeUrl()],
                    ['name' => $this->aboutLabel(), 'url' => $url],
                ]),
            ];
        });
    }

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

        return $this->remember("skill.{$skill->id}", $skill->updated_at, function () use ($skill, $url, $locale) {

            $page = $skill->page;

            $webPage = $this->clean([
                '@context' => 'https://schema.org',
                '@type' => 'WebPage',

                '@id' => $url . '#webpage',

                'url' => $url,

                'name' => $this->text($page?->hero_title ?: $skill->title),

                'description' => $this->text($page?->hero_description),

                'isPartOf' => ['@id' => url('/') . '#website'],

                'inLanguage' => $locale,
            ]);

            return [
                $webPage,

                $this->breadcrumb([
                    ['name' => $this->homeLabel(), 'url' => $this->homeUrl()],
                    ['name' => $skill->title, 'url' => $url],
                ]),
            ];
        });
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

        return $this->remember("service.{$service->id}", $service->updated_at, function () use ($service, $url, $locale) {

            $serviceSchema = $this->clean([
                '@context' => 'https://schema.org',
                '@type' => 'Service',

                '@id' => $url . '#service',

                'url' => $url,

                'name' => $this->text($service->title),

                'description' => $this->text(
                    $service->meta_description
                        ?: $service->hero_description
                        ?: $service->short_description
                ),

                'serviceType' => $service->category?->name,

                'provider' => ['@id' => url('/') . '#organization'],

                'areaServed' => $service->area_served ?? null,

                'inLanguage' => $locale,
            ]);

            $schemas = [
                $serviceSchema,

                $this->breadcrumb([
                    ['name' => $this->homeLabel(), 'url' => $this->homeUrl()],
                    ['name' => $service->title, 'url' => $url],
                ]),
            ];

            return $this->withFaqs($service, $schemas);
        });
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

        return $this->remember("platform.{$platform->id}", $platform->updated_at, function () use ($platform, $url, $locale) {

            $webPage = $this->clean([
                '@context' => 'https://schema.org',
                '@type' => 'WebPage',

                '@id' => $url . '#webpage',

                'url' => $url,

                'name' => $this->text($platform->meta_title ?: $platform->title ?: $platform->name),

                'description' => $this->text(
                    $platform->meta_description
                        ?: $platform->description
                        ?: $platform->card_description
                ),

                'about' => ['@id' => url('/') . '#organization'],

                'isPartOf' => ['@id' => url('/') . '#website'],

                'inLanguage' => $locale,
            ]);

            $schemas = [
                $webPage,

                $this->breadcrumb([
                    ['name' => $this->homeLabel(), 'url' => $this->homeUrl()],
                    ['name' => $platform->name, 'url' => $url],
                ]),
            ];

            return $this->withFaqs($platform, $schemas);
        });
    }

    /*
    |--------------------------------------------------------------------------
    | Blog
    |--------------------------------------------------------------------------
    */

    public function blog(Blog $blog): array
    {
        $locale = app()->getLocale();

        $url = route('blogs.show', ['locale' => $locale, 'slug' => $blog->slug]);
        $blogUrl = route('blogs.index', ['locale' => $locale]);

        return $this->remember("blog.{$blog->id}", $blog->updated_at, function () use ($blog, $url, $blogUrl, $locale) {

            $article = [
                '@context' => 'https://schema.org',
                '@type' => 'BlogPosting',

                '@id' => $url . '#article',

                'url' => $url,

                'headline' => $this->text($blog->title, 110), // Google بيهمل الزيادة عن 110 حرف تقريبًا

                'description' => $this->text($blog->meta_description ?: $blog->excerpt),

                'datePublished' => $blog->published_at?->toIso8601String(),

                'dateModified' => $blog->updated_at?->toIso8601String(),

                'inLanguage' => $locale,

                'isPartOf' => ['@id' => url('/') . '#website'],

                'publisher' => ['@id' => url('/') . '#organization'],

                'mainEntityOfPage' => [
                    '@type' => 'WebPage',
                    '@id' => $url,
                ],
            ];

            if ($blog->author_name) {
                $article['author'] = [
                    '@type' => 'Person',
                    'name' => $blog->author_name,
                ];
            } else {
                // مفيش مؤلف محدد؟ ارجع لصاحب الموقع بدل ما تسيبها فاضية (مطلوب من جوجل)
                $article['author'] = ['@id' => url('/') . '#organization'];
            }

            if ($blog->featured_image) {
                $article['image'] = [
                    '@type' => 'ImageObject',
                    'url' => asset('storage/' . $blog->featured_image),
                ];
            }

            if ($blog->category) {
                $article['articleSection'] = $blog->category->name;
            }

            if ($blog->relationLoaded('tags') && $blog->tags->isNotEmpty()) {
                $article['keywords'] = $blog->tags->pluck('name')->implode(', ');
            }

            $schemas = [
                $this->clean($article),

                $this->breadcrumb([
                    ['name' => $this->homeLabel(), 'url' => $this->homeUrl()],
                    ['name' => $this->blogLabel(), 'url' => $blogUrl],
                    ['name' => $blog->title, 'url' => $url],
                ]),
            ];

            return $this->withFaqs($blog, $schemas);
        });
    }

    public function blogIndex(Collection $blogs): array
    {
        $locale = app()->getLocale();
        $url = route('blogs.index', ['locale' => $locale]);

        $collectionPage = $this->clean([
            '@context' => 'https://schema.org',
            '@type' => 'CollectionPage',

            '@id' => $url . '#webpage',

            'url' => $url,

            'name' => $locale === 'ar' ? 'المدونة' : 'Blog',

            'description' => $locale === 'ar'
                ? 'استكشف أحدث المقالات والأدلة والنصائح المتخصصة.'
                : 'Explore the latest articles, guides, and expert insights.',

            'isPartOf' => ['@id' => url('/') . '#website'],

            'inLanguage' => $locale,
        ]);

        $itemList = [
            '@context' => 'https://schema.org',
            '@type' => 'ItemList',

            '@id' => $url . '#articles',

            'numberOfItems' => $blogs->count(),

            'itemListElement' => $blogs->values()->map(function ($blog, $index) use ($locale) {
                return [
                    '@type' => 'ListItem',
                    'position' => $index + 1,
                    'url' => route('blogs.show', ['locale' => $locale, 'slug' => $blog->slug]),
                    'name' => $blog->title,
                ];
            })->all(),
        ];

        $breadcrumb = $this->breadcrumb([
            ['name' => $this->homeLabel(), 'url' => $this->homeUrl()],
            ['name' => $locale === 'ar' ? 'المدونة' : 'Blog', 'url' => $url],
        ]);

        // ملحوظة: قائمة المدونة نفسها بتتغير كل ما مقال جديد ينزل، فمش هنكاشها زي باقي الصفحات
        return [$collectionPage, $itemList, $breadcrumb];
    }

    /*
    |--------------------------------------------------------------------------
    | إضافة FAQ لأي array من الـ schemas لو الموديل عنده faqs محمّلة
    |--------------------------------------------------------------------------
    | استخدمها بدل ما تكرر نفس الـ if في كل method (service/skill/platform/home)
    */

    private function withFaqs($model, array $schemas): array
    {
        if ($model && $model->relationLoaded('faqs') && $model->faqs->isNotEmpty()) {
            $schemas[] = $this->faq($model->faqs);
        }

        return $schemas;
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

            'mainEntity' => $faqs->map(function ($faq) {
                return [
                    '@type' => 'Question',
                    'name' => $this->text($faq->question),
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => $this->text($faq->answer),
                    ],
                ];
            })->values()->all(),
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

            'itemListElement' => collect($items)->values()->map(function ($item, $index) {
                return [
                    '@type' => 'ListItem',
                    'position' => $index + 1,
                    'name' => $item['name'],
                    'item' => $item['url'],
                ];
            })->all(),
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Caching (نفس فكرة الـ Sitemap - مفتاح مرتبط بآخر تحديث للريكورد)
    |--------------------------------------------------------------------------
    */

    private function remember(string $key, $ttlOrTimestamp, \Closure $callback): array
    {
        $locale = app()->getLocale();

        // لو استخدمنا updated_at كـ "مفتاح تحديث" بدل TTL ثابت، الكاش هيتجدد تلقائي
        // أي وقت الـ record يتغير، من غير ما تحتاج تعمل Cache::forget يدوي
        $version = $ttlOrTimestamp instanceof \Carbon\Carbon
            ? $ttlOrTimestamp->timestamp
            : 'ttl';

        $cacheKey = "schema.{$key}.{$locale}.{$version}";

        $ttl = $ttlOrTimestamp instanceof \Carbon\Carbon
            ? now()->addDay()
            : $ttlOrTimestamp;

        return Cache::remember($cacheKey, $ttl, $callback);
    }

    /*
    |--------------------------------------------------------------------------
    | Text sanitization (تنضيف موحّد لأي نص هيتحط في الـ schema)
    |--------------------------------------------------------------------------
    */

    private function text(?string $value, ?int $limit = null): ?string
    {
        if (blank($value)) {
            return null;
        }

        $clean = trim(strip_tags($value));

        if ($limit && mb_strlen($clean) > $limit) {
            $clean = mb_substr($clean, 0, $limit - 1) . '…';
        }

        return $clean ?: null;
    }

    /*
    |--------------------------------------------------------------------------
    | Remove null / empty values (recursive)
    |--------------------------------------------------------------------------
    */

    private function clean(array $data): array
    {
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $data[$key] = $this->clean($value);
            }
        }

        return array_filter(
            $data,
            static fn ($value) => $value !== null && $value !== '' && $value !== []
        );
    }

    /*
    |--------------------------------------------------------------------------
    | Shared URLs / Labels
    |--------------------------------------------------------------------------
    */

    private function homeUrl(): string
    {
        return route('home', ['locale' => app()->getLocale()]);
    }

    private function homeLabel(): string
    {
        return app()->isLocale('ar') ? 'الرئيسية' : 'Home';
    }

    private function blogLabel(): string
    {
        return app()->isLocale('ar') ? 'المدونة' : 'Blog';
    }

    private function aboutLabel(): string
    {
        return app()->isLocale('ar') ? 'من نحن' : 'About';
    }
}
