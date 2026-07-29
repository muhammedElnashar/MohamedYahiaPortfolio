<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Skill extends Model
{
    use HasTranslations;

    protected $fillable = [
        'slug',
        'icon',
        'title',
        'has_page',
        'sort_order',
    ];

    public array $translatable = [
        'title',
    ];

    protected function casts(): array
    {
        return [
            'has_page' => 'boolean',
            'sort_order' => 'integer',
        ];
    }

    public function metrics()
    {
        return $this->hasMany(SkillMetric::class)
            ->orderBy('sort_order');
    }

    public function features()
    {
        return $this->hasMany(SkillFeature::class)
            ->orderBy('sort_order');
    }

    public function tools()
    {
        return $this->hasMany(SkillTool::class)
            ->orderBy('sort_order');
    }
    public function page()
    {
        return $this->hasOne(SkillPageData::class);
    }
}
