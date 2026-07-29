<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class BlogFaq extends Model
{
    use HasTranslations;

    protected $fillable = [
        'blog_id',
        'question',
        'answer',
        'sort_order',
        'is_active',
    ];

    public array $translatable = [
        'question',
        'answer',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ];
    }

    public function blog(): BelongsTo
    {
        return $this->belongsTo(Blog::class);
    }
}
