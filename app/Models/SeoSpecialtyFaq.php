<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class SeoSpecialtyFaq extends Model
{
    use HasTranslations;
    protected $fillable = [
        'seo_specialty_id',
        'question',
        'answer',
        'sort_order',
    ];
    public array $translatable = [
        'question',
        'answer',
    ];

    protected function casts(): array
    {
        return [
            'question' => 'array',
            'answer' => 'array',
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
