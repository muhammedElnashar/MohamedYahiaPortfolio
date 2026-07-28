<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class SeoSpecialtyChallenge extends Model
{
    use HasTranslations;
    protected $fillable = [
        'seo_specialty_id',
        'icon',
        'title',
        'description',
        'sort_order',
    ];
    public array $translatable = [
        'title',
        'description',
    ];
    protected function casts(): array
    {
        return [
            'title' => 'array',
            'description' => 'array',
        ];
    }

    public function specialty(): BelongsTo
    {
        return $this->belongsTo(SeoSpecialty::class, 'seo_specialty_id');
    }
}
