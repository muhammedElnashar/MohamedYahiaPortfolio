<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSkill extends Model
{
    protected $table = 'hero_skills';
    protected $fillable = [
        'name',
        'is_highlighted',
        'sort_order',

    ];

}
