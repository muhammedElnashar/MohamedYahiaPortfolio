<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
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
    ];
    public function skills()
    {
        return $this->hasMany(HeroSkill::class);
    }
}
