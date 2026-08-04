<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Spatie\Translatable\HasTranslations;

class SeoMeta extends Model
{
     use HasTranslations;
    protected $fillable = [
        'meta_title',
        'meta_description',
        'meta_keywords',

        'canonical_url',

        'og_title',
        'og_description',
        'og_image',

        'twitter_title',
        'twitter_description',
        'twitter_image',

        'robots',
        'focus_keyword',

        'is_in_sitemap',
    ];
    public array $translatable = [
        'meta_title',
        'meta_description',
        'meta_keywords',
        'og_title',
        'og_description',
        'twitter_title',
        'twitter_description',
        'focus_keyword',
    ];
    protected $casts = [
        'is_in_sitemap' => 'boolean',
        'meta_title' => 'array',
        'meta_description' => 'array',
        'meta_keywords' => 'array',
        'og_title' => 'array',
        'og_description' => 'array',
        'twitter_title' => 'array',
        'twitter_description' => 'array',
        'focus_keyword' => 'array',
    ];

    public function seoable(): MorphTo
    {
        return $this->morphTo();
    }
}
