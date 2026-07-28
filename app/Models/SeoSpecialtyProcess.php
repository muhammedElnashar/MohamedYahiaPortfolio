<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class SeoSpecialtyProcess extends Model
{
    use HasTranslations;
    protected $fillable = [
        'seo_specialty_id',
        'step',
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
            'step' => 'integer',
            'title' => 'array',
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
