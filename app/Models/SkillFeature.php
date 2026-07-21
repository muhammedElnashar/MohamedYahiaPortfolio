<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class SkillFeature extends Model
{
    use HasTranslations;

    protected $fillable = [
        'skill_id',

        'title',
        'description',

        'icon',

        'sort_order',
    ];

    public array $translatable = [
        'title',
        'description',
    ];

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
}
