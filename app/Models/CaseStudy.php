<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class CaseStudy extends Model
{
    use HasTranslations;

    protected $fillable = [
        'slug',

        'eyebrow',
        'title',
        'description',

        'industry',
        'niche',

        'period',
        'focus',

        'challenge',
        'solution',
        'result',

        'metric',
        'metric_color',

        'clicks',
        'impressions',
        'ctr',
        'position',

        'image',

        'sort_order',
        'is_active',
    ];

    public array $translatable = [
        'eyebrow',
        'title',
        'description',
        'industry',
        'niche',
        'period',
        'focus',
        'challenge',
        'solution',
        'result',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    public function growths()
    {
        return $this->hasMany(CaseStudyGrowth::class)
            ->orderBy('sort_order');
    }

    public function improvements()
    {
        return $this->hasMany(CaseStudyImprovement::class)
            ->orderBy('sort_order');
    }


}
