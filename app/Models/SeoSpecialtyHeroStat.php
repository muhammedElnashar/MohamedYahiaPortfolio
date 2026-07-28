<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class SeoSpecialtyHeroStat extends Model
{
    use HasTranslations;
    protected $fillable = [
        'seo_specialty_id',
        'value',
        'label',
        'sort_order',
    ];
    public array $translatable = [
        'label',
    ];
    protected function casts(): array
    {
        return [
            'label' => 'array',
        ];
    }

    public function seoSpecialty(): BelongsTo
    {
        return $this->belongsTo(SeoSpecialty::class);
    }
}
