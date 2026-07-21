<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ServiceProcessStep extends Model
{
    use HasTranslations;

    protected $fillable = [
        'service_section_id',
        'number',
        'title',
        'description',
        'sort_order',
    ];
    public array $translatable = [
        'title',
        'description',
    ];
    public function section()
    {
        return $this->belongsTo(ServiceSection::class);
    }
}
