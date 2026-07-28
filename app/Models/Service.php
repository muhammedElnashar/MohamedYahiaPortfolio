<?php

namespace App\Models;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasTranslations;
    protected $fillable = [
        'title',
        'slug',
        'icon',
        'category_id',
        'process_text_1',
        'process_text_2',
        'process_text_3',
        'process_text_4',
        'process_text_5',
        'short_description',

        'hero_title',
        'hero_description',

        'meta_title',
        'meta_description',

        'schema',
        'badge',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public array $translatable = [
        'title',
        'short_description',
        'hero_title',
        'hero_description',
        'meta_title',
        'meta_description',

    ];
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */
    public function sections()
    {
        return $this->hasMany(ServiceSection::class)
            ->orderBy('sort_order');
    }
    public function category()
    {
        return $this->belongsTo(ServiceCategory::class);
    }


    public function stats()
    {
        return $this->hasMany(ServiceStat::class)
            ->orderBy('sort_order');
    }
    public function processSteps()
    {
        return $this->hasMany(ServiceProcessStep::class)
            ->orderBy('sort_order');
    }

    public function contentSections()
    {
        return $this->hasMany(ServiceContentSection::class)
            ->orderBy('sort_order');
    }



    public function painPoints()
    {
        return $this->hasMany(ServicePainPoint::class)
            ->orderBy('sort_order');
    }

    public function benefits()
    {
        return $this->hasMany(ServiceBenefit::class)
            ->orderBy('sort_order');
    }

    public function deliverables()
    {
        return $this->hasMany(ServiceDeliverable::class)
            ->orderBy('sort_order');
    }

    public function comparisons()
    {
        return $this->hasMany(ServiceComparison::class)
            ->orderBy('sort_order');
    }

    public function checklists()
    {
        return $this->hasMany(ServiceChecklist::class)
            ->orderBy('sort_order');
    }

    public function keywords()
    {
        return $this->hasMany(ServiceKeyword::class)
            ->orderBy('sort_order');
    }

    public function faqs()
    {
        return $this->hasMany(ServiceFaq::class)
            ->orderBy('sort_order');
    }

    public function ctas()
    {
        return $this->hasMany(ServiceCta::class);
    }

    public function relatedServices()
    {
        return $this->belongsToMany(
            Service::class,
            'service_related',
            'service_id',
            'related_service_id'
        );
    }

    public function cardSections()
    {
        return $this->hasMany(ServiceSection::class)
            ->where('type', 'card')
            ->orderBy('sort_order');
    }

    public function statisticsSections()
    {
        return $this->hasMany(ServiceSection::class)
            ->where('type', 'stat')
            ->orderBy('sort_order');
    }

    public function processSections()
    {
        return $this->hasMany(ServiceSection::class)
            ->where('type', 'process')
            ->orderBy('sort_order');
    }

    public function section(string $key): ?ServiceSection
    {
        return $this->sections->firstWhere('key', $key);
    }
    public function contentSection(string $key): ?ServiceContentSection
    {
        return $this->contentSections->firstWhere('section_key', $key);
    }


    public function ctaSection(string $key)
    {
        return $this->ctas->firstWhere('section_key', $key);
    }
}
