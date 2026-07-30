<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class HeroSection extends Model
{
    use HasTranslations;
    protected $fillable = [
        'badge',
        'first_name',
        'last_name',
        'position',
        'title',
        'hero_role',
        'description',
        'whatsapp_url',
        'portfolio_url',
        'avatar',
        'card_name',
        'card_role',
        'projects_count',
        'years_count',
        'completion_count',
        'rating_count',
        'mostaql_projects',
        'meta_title',
        'meta_description',
        'canonical_url',
    ];
    public array $translatable = [
        'badge',
        'first_name',
        'last_name',
        'position',
        'title',
        'hero_role',
        'description',
        'card_name',
        'card_role',
        'mostaql_projects',
        'meta_title',
        'meta_description',

    ];
    public function skills()
    {
        return $this->hasMany(HeroSkill::class);
    }
}
