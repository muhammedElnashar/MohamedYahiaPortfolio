<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Translatable\HasTranslations;

class BlogTag extends Model
{
    use HasTranslations;

    protected $fillable = [
        'name',
        'slug',
        'is_active',
    ];

    public array $translatable = [
        'name',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    public function blogs(): BelongsToMany
    {
        return $this->belongsToMany(Blog::class);
    }
}
