<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Translatable\HasTranslations;

class Blog extends Model
{
    use HasTranslations;

    protected $fillable = [
        'blog_category_id',

        'title',
        'slug',
        'excerpt',
        'content',

        'featured_image',

        'author_name',
        'reading_time',
        'published_at',

        'meta_title',
        'meta_description',

        'is_featured',
        'is_active',
    ];

    public array $translatable = [
        'title',
        'excerpt',
        'content',
        'meta_title',
        'meta_description',
    ];

    protected function casts(): array
    {
        return [
            'reading_time' => 'integer',
            'published_at' => 'datetime',
            'is_featured' => 'boolean',
            'is_active' => 'boolean',
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(
            BlogCategory::class,
            'blog_category_id'
        );
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(BlogTag::class);
    }
}
