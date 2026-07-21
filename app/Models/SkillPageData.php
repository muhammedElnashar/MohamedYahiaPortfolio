<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class SkillPageData extends Model
{
    use HasTranslations;
    protected $fillable=[
        'hero_title',
        'hero_description',
        'cta_title',
        'cta_description',
        'cta_button_text',
        'feature_title',
        'metric_title',
    ];
    public array $translatable = [
        'title',
        'hero_title',
        'hero_description',
        'feature_title',
        'metric_title',
        'cta_title',
        'cta_description',
        'cta_button_text',
    ];
}
