<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class CaseStudyGrowth extends Model
{
    use HasTranslations;

    protected $fillable = [
        'case_study_id',
        'value',
        'title',
        'icon',
        'sort_order',
    ];

    public array $translatable = [
        'title',
    ];

    public function caseStudy()
    {
        return $this->belongsTo(CaseStudy::class);
    }
}
