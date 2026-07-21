<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class SkillTool extends Model
{
    use HasTranslations;

    protected $fillable = [
        'skill_id',

        'icon',

        'title',
        'description',

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
