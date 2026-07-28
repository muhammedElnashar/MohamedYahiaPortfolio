<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class SeoSpecialtyComparison extends Model
{
    use HasTranslations;
    protected $fillable = [
        'seo_specialty_id',
        'criterion',
        'specialist_value',
        'competitor_value',
        'sort_order',
    ];
    public array $translatable = [
        'criterion',
        'specialist_value',
        'competitor_value',
    ];
    protected function casts(): array
    {
        return [
            'criterion' => 'array',
            'specialist_value' => 'array',
            'competitor_value' => 'array',
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
