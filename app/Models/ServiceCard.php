<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ServiceCard extends Model
{
    use HasTranslations;

    protected $fillable = [
        'service_section_id',
        'icon',
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
