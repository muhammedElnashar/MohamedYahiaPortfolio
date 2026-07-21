<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class SkillMetric extends Model
{
    use HasTranslations;

    protected $fillable = [
        'skill_id',

        'value',

        'title',

        'sort_order',
    ];

    public array $translatable = [
        'title',
    ];

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
}
