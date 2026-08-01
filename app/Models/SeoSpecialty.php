<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Spatie\Translatable\HasTranslations;

class SeoSpecialty extends Model
{
    use HasTranslations;
    protected $fillable = [
        'slug',
        'name',
        'card_description',

        'badge',
        'title',
        'description',

        'challenges_badge',
        'challenges_title',

        'services_badge',
        'services_title',

        'process_badge',
        'process_title',

        'advantages_badge',
        'advantages_title',

        'methodology_badge',
        'methodology_title',
        'methodology_description',

        'statistics_badge',
        'statistics_title',
        'statistics_description',

        'comparison_badge',
        'comparison_title',
        'comparison_competitor_label',

        'faq_badge',
        'faq_title',

        'philosophy_badge',
        'philosophy_title',
        'philosophy_quote',
        'philosophy_points',

        'cta_title',
        'cta_description',
        'cta_button',
        'cta_url',


        'sort_order',
        'is_active',
    ];
    public array $translatable = [
        'name',
        'card_description',

        'badge',
        'title',
        'description',

        'challenges_badge',
        'challenges_title',

        'services_badge',
        'services_title',

        'process_badge',
        'process_title',

        'advantages_badge',
        'advantages_title',

        'methodology_badge',
        'methodology_title',
        'methodology_description',

        'statistics_badge',
        'statistics_title',
        'statistics_description',

        'comparison_badge',
        'comparison_title',
        'comparison_competitor_label',

        'faq_badge',
        'faq_title',

        'philosophy_badge',
        'philosophy_title',
        'philosophy_quote',

        'cta_title',
        'cta_description',
        'cta_button',

    ];

    public function challenges(): HasMany
    {
        return $this->hasMany(SeoSpecialtyChallenge::class)
            ->orderBy('sort_order');
    }

    public function services(): HasMany
    {
        return $this->hasMany(SeoSpecialtyService::class)
            ->orderBy('sort_order');
    }

    public function processes(): HasMany
    {
        return $this->hasMany(SeoSpecialtyProcess::class)
            ->orderBy('sort_order');
    }

    public function advantages(): HasMany
    {
        return $this->hasMany(SeoSpecialtyAdvantage::class)
            ->orderBy('sort_order');
    }

    public function methodologies(): HasMany
    {
        return $this->hasMany(SeoSpecialtyMethodology::class)
            ->orderBy('sort_order');
    }

    public function statistics(): HasMany
    {
        return $this->hasMany(SeoSpecialtyStatistic::class)
            ->orderBy('sort_order');
    }

    public function comparisons(): HasMany
    {
        return $this->hasMany(SeoSpecialtyComparison::class)
            ->orderBy('sort_order');
    }

    public function faqs(): HasMany
    {
        return $this->hasMany(SeoSpecialtyFaq::class)
            ->orderBy('sort_order');
    }
    public function heroStats(): HasMany
    {
        return $this->hasMany(SeoSpecialtyHeroStat::class)
            ->orderBy('sort_order');
    }
    public function philosophy(): HasMany
    {
        return $this->hasMany(SeoSpecialtyPhilosophy::class)
            ->orderBy('sort_order');
    }
    public function seo(): MorphOne
    {
        return $this->morphOne(SeoMeta::class, 'seoable');
    }
}
