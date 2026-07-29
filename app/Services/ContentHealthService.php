<?php

namespace App\Services;

use App\Models\Blog;
use App\Models\SeoSpecialty;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ContentHealthService
{
    /**
     * جميع السجلات التي تحتوي على مشاكل.
     */
    public function issues(): Collection
    {
        return collect()
            ->merge($this->blogIssues())
            ->merge($this->serviceIssues())
            ->merge($this->platformIssues())
            ->merge($this->skillIssues())
            ->sortByDesc('issues_count')
            ->values();
    }


    /*
    |--------------------------------------------------------------------------
    | Blogs
    |--------------------------------------------------------------------------
    */

    private function blogIssues(): Collection
    {
        return Blog::query()
            ->get()
            ->map(function (Blog $blog) {

                $issues = [];

                /*
                 * SEO
                 */

                $this->checkTranslation(
                    $blog,
                    'meta_title',
                    'Meta Title',
                    'seo',
                    $issues
                );

                $this->checkTranslation(
                    $blog,
                    'meta_description',
                    'Meta Description',
                    'seo',
                    $issues
                );


                /*
                 * Content / Translation
                 */

                $this->checkTranslation(
                    $blog,
                    'title',
                    'Title',
                    'translation',
                    $issues
                );

                $this->checkTranslation(
                    $blog,
                    'excerpt',
                    'Excerpt',
                    'translation',
                    $issues
                );

                $this->checkTranslation(
                    $blog,
                    'content',
                    'Content',
                    'translation',
                    $issues
                );


                /*
                 * Media
                 */

                if (blank($blog->featured_image)) {

                    $issues[] = [
                        'category' => 'media',
                        'field' => 'featured_image',
                        'locale' => null,
                        'label' => 'Featured Image',
                    ];
                }


                return $this->makeResult(
                    type: 'Blog',
                    model: $blog,
                    issues: $issues,
                );
            })
            ->filter()
            ->values();
    }


    /*
    |--------------------------------------------------------------------------
    | Services
    |--------------------------------------------------------------------------
    */

    private function serviceIssues(): Collection
    {
        return Service::query()
            ->get()
            ->map(function (Service $service) {

                $issues = [];

                /*
                 * SEO
                 */

                $this->checkTranslation(
                    $service,
                    'meta_title',
                    'Meta Title',
                    'seo',
                    $issues
                );

                $this->checkTranslation(
                    $service,
                    'meta_description',
                    'Meta Description',
                    'seo',
                    $issues
                );


                /*
                 * Content / Translation
                 */

                $this->checkTranslation(
                    $service,
                    'title',
                    'Title',
                    'translation',
                    $issues
                );

                $this->checkTranslation(
                    $service,
                    'short_description',
                    'Short Description',
                    'translation',
                    $issues
                );

                $this->checkTranslation(
                    $service,
                    'hero_title',
                    'Hero Title',
                    'translation',
                    $issues
                );

                $this->checkTranslation(
                    $service,
                    'hero_description',
                    'Hero Description',
                    'translation',
                    $issues
                );


                return $this->makeResult(
                    type: 'Service',
                    model: $service,
                    issues: $issues,
                );
            })
            ->filter()
            ->values();
    }

    /*
    |--------------------------------------------------------------------------
    | Skills
    |--------------------------------------------------------------------------
    */

    private function skillIssues(): Collection
    {
        return Skill::query()

            // نفحص فقط Skills التي لها صفحة فعلية
            ->where('has_page', true)

            ->with([
                'page',
                'features',
                'metrics',
                'tools',
            ])

            ->get()

            ->map(function (Skill $skill) {

                $issues = [];


                /*
                |--------------------------------------------------------------------------
                | Main Skill
                |--------------------------------------------------------------------------
                */

                $this->checkTranslation(
                    $skill,
                    'title',
                    'Title',
                    'translation',
                    $issues
                );


                /*
                |--------------------------------------------------------------------------
                | Page Data
                |--------------------------------------------------------------------------
                */

                if (! $skill->page) {

                    $issues[] = [
                        'category' => 'content',
                        'field' => 'page',
                        'locale' => null,
                        'label' => 'Page Data Missing',
                    ];

                } else {

                    /*
                    |--------------------------------------------------------------------------
                    | Hero
                    |--------------------------------------------------------------------------
                    */

                    $this->checkTranslation(
                        $skill->page,
                        'hero_title',
                        'Hero Title',
                        'translation',
                        $issues
                    );

                    $this->checkTranslation(
                        $skill->page,
                        'hero_description',
                        'Hero Description',
                        'translation',
                        $issues
                    );


                    /*
                    |--------------------------------------------------------------------------
                    | Section Titles
                    |--------------------------------------------------------------------------
                    */

                    $this->checkTranslation(
                        $skill->page,
                        'feature_title',
                        'Features Title',
                        'translation',
                        $issues
                    );

                    $this->checkTranslation(
                        $skill->page,
                        'metric_title',
                        'Metrics Title',
                        'translation',
                        $issues
                    );


                    /*
                    |--------------------------------------------------------------------------
                    | CTA
                    |--------------------------------------------------------------------------
                    */

                    $this->checkTranslation(
                        $skill->page,
                        'cta_title',
                        'CTA Title',
                        'translation',
                        $issues
                    );

                    $this->checkTranslation(
                        $skill->page,
                        'cta_description',
                        'CTA Description',
                        'translation',
                        $issues
                    );

                    $this->checkTranslation(
                        $skill->page,
                        'cta_button_text',
                        'CTA Button',
                        'translation',
                        $issues
                    );
                }


                /*
                |--------------------------------------------------------------------------
                | Relations
                |--------------------------------------------------------------------------
                */

                if ($skill->features->isEmpty()) {

                    $issues[] = [
                        'category' => 'content',
                        'field' => 'features',
                        'locale' => null,
                        'label' => 'No Features',
                    ];
                }


                if ($skill->metrics->isEmpty()) {

                    $issues[] = [
                        'category' => 'content',
                        'field' => 'metrics',
                        'locale' => null,
                        'label' => 'No Metrics',
                    ];
                }


                if ($skill->tools->isEmpty()) {

                    $issues[] = [
                        'category' => 'content',
                        'field' => 'tools',
                        'locale' => null,
                        'label' => 'No Tools',
                    ];
                }


                return $this->makeResult(
                    type: 'Skill',
                    model: $skill,
                    issues: $issues,
                );
            })

            ->filter()
            ->values();
    }
    /*
    |--------------------------------------------------------------------------
    | Platforms
    |--------------------------------------------------------------------------
    */

    private function platformIssues(): Collection
    {
        return SeoSpecialty::query()
            ->get()
            ->map(function (SeoSpecialty $platform) {

                $issues = [];

                /*
                 * SEO
                 */

                $this->checkTranslation(
                    $platform,
                    'meta_title',
                    'Meta Title',
                    'seo',
                    $issues
                );

                $this->checkTranslation(
                    $platform,
                    'meta_description',
                    'Meta Description',
                    'seo',
                    $issues
                );


                /*
                 * Content / Translation
                 */

                $this->checkTranslation(
                    $platform,
                    'title',
                    'Title',
                    'translation',
                    $issues
                );

                $this->checkTranslation(
                    $platform,
                    'description',
                    'Description',
                    'translation',
                    $issues
                );


                return $this->makeResult(
                    type: 'Platform',
                    model: $platform,
                    issues: $issues,
                );
            })
            ->filter()
            ->values();
    }


    /*
    |--------------------------------------------------------------------------
    | Check Translatable Field
    |--------------------------------------------------------------------------
    */

    private function checkTranslation(
        Model $model,
        string $field,
        string $label,
        string $category,
        array &$issues
    ): void {

        $translations = $model->getTranslations($field);

        foreach (['ar', 'en'] as $locale) {

            if (blank($translations[$locale] ?? null)) {

                $issues[] = [
                    'category' => $category,
                    'field' => $field,
                    'locale' => $locale,

                    'label' => sprintf(
                        '%s %s',
                        $label,
                        strtoupper($locale)
                    ),
                ];
            }
        }
    }


    /*
    |--------------------------------------------------------------------------
    | Build Result
    |--------------------------------------------------------------------------
    */

    private function makeResult(
        string $type,
        Model $model,
        array $issues
    ): ?array {

        if (empty($issues)) {
            return null;
        }

        $collection = collect($issues);

        return [

            'type' => $type,

            'id' => $model->getKey(),

            'title' => $this->getTitle($model),

            'slug' => $model->slug ?? null,

            'issues' => $issues,

            'issues_count' => count($issues),

            'seo_count' => $collection
                ->where('category', 'seo')
                ->count(),

            'translation_count' => $collection
                ->where('category', 'translation')
                ->count(),

            'media_count' => $collection
                ->where('category', 'media')
                ->count(),
            'content_count' => $collection
                ->where('category', 'content')
                ->count(),
        ];
    }


    /*
    |--------------------------------------------------------------------------
    | Record Title
    |--------------------------------------------------------------------------
    */

    private function getTitle(Model $model): string
    {
        foreach (['title', 'name'] as $field) {

            if (! array_key_exists(
                $field,
                $model->getAttributes()
            )) {
                continue;
            }

            if (method_exists($model, 'getTranslation')) {

                $value = $model->getTranslation(
                    $field,
                    'en',
                    false
                );

                if (filled($value)) {
                    return $value;
                }

                $value = $model->getTranslation(
                    $field,
                    'ar',
                    false
                );

                if (filled($value)) {
                    return $value;
                }
            }

            if (filled($model->{$field})) {
                return (string) $model->{$field};
            }
        }

        return $model->slug
            ?? '#'.$model->getKey();
    }


    /*
    |--------------------------------------------------------------------------
    | Stats
    |--------------------------------------------------------------------------
    */

    public function stats(): array
    {
        $records = $this->issues();

        $seo = $records->sum('seo_count');

        $translations = $records->sum('translation_count');

        $media = $records->sum('media_count');

        $content = $records->sum('content_count');

        return [

            'seo' => $seo,

            'translations' => $translations,

            'media' => $media,

            'content' => $content,

            'total' =>
                $seo +
                $translations +
                $media +
                $content,

            'affected_records' => $records->count(),
        ];
    }
}
