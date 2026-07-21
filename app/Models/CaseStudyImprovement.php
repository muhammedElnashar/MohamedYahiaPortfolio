<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class CaseStudyImprovement extends Model
{
    use HasTranslations;

    protected $fillable = [
        'case_study_id',
        'icon',
        'title',
        'description',
        'sort_order',
    ];

    public array $translatable = [
        'title',
        'description',
    ];

    public function caseStudy()
    {
        return $this->belongsTo(CaseStudy::class);
    }
}
