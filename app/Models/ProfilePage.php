<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class ProfilePage extends Model
{
    use HasTranslations;

    protected $fillable = [

        'hero_badge',
        'hero_title',
        'hero_highlight',
        'hero_description',

        'story_title',
        'story_content',

        'career_title',
        'education_title',
        'methodology_title',
        'skills_title',

        'cta_title',
        'cta_description',
        'cta_button',
        'cta_url',

        'meta_title',
        'meta_description',

        'is_active',
    ];

    public array $translatable = [

        'hero_badge',
        'hero_title',
        'hero_highlight',
        'hero_description',

        'story_title',
        'story_content',

        'career_title',
        'education_title',
        'methodology_title',
        'skills_title',

        'cta_title',
        'cta_description',
        'cta_button',

        'meta_title',
        'meta_description',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    public function stats(): HasMany
    {
        return $this->hasMany(ProfileStat::class)
            ->orderBy('sort_order');
    }

    public function careerItems(): HasMany
    {
        return $this->hasMany(ProfileCareerItem::class)
            ->orderBy('sort_order');
    }

    public function educationItems(): HasMany
    {
        return $this->hasMany(ProfileEducationItem::class)
            ->orderBy('sort_order');
    }

    public function methodologyItems(): HasMany
    {
        return $this->hasMany(ProfileMethodologyItem::class)
            ->orderBy('sort_order');
    }
}
