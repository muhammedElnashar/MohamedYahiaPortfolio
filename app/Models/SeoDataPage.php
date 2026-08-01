<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class SeoDataPage extends Model
{
    use HasTranslations;

    protected $table = 'seo_data_pages';

    protected $fillable = [

        'key',

        'meta_title',
        'meta_description',
        'meta_keywords',

        'focus_keyword',

        'canonical_url',

        'og_title',
        'og_description',
        'og_image',

        'twitter_title',
        'twitter_description',
        'twitter_image',

        'robots',

        'custom_schema',

        'is_in_sitemap',

    ];

    public array $translatable = [

        'meta_title',
        'meta_description',
        'meta_keywords',

        'focus_keyword',

        'og_title',
        'og_description',

        'twitter_title',
        'twitter_description',

    ];

    protected function casts(): array
    {
        return [

            'is_in_sitemap' => 'boolean',

        ];
    }


}
