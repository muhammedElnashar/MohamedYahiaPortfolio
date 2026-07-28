<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class SeoSpecialtyPhilosophy extends Model
{
    use HasTranslations;
    protected $fillable = [
        'seo_specialty_id',
        'title',
        'description',
        'sort_order',
        'is_active',
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
            'is_active' => 'boolean',
        ];
    }

    public function seoSpecialty()
    {
        return $this->belongsTo(SeoSpecialty::class);
    }
}
