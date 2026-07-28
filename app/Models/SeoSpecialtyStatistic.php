<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class SeoSpecialtyStatistic extends Model
{
    use HasTranslations;
    protected $fillable = [
        'seo_specialty_id',
        'value',
        'badge',
        'description',
        'source',
        'source_url',
        'sort_order',
    ];
    public array $translatable = [
        'description',
    ];
    protected function casts(): array
    {
        return [
            'description' => 'array',
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
