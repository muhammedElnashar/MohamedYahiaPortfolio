<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class SeoSpecialtyMethodology extends Model
{
    use HasTranslations;
    protected $fillable = [
        'seo_specialty_id',
        'number',
        'icon',
        'title',
        'description',
        'is_featured',
        'sort_order',
    ];
    public array $translatable = [
        'title',
        'description',
    ];
    protected function casts(): array
    {
        return [
            'number' => 'integer',
            'title' => 'array',
            'description' => 'array',
            'is_featured' => 'boolean',
            'sort_order' => 'integer',
        ];
    }

    public function specialty(): BelongsTo
    {
        return $this->belongsTo(
            SeoSpecialty::class,
            'seo_specialty_id'
        );
    }
}
