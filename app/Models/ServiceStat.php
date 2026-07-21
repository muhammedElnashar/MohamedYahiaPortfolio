<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ServiceStat extends Model
{
    use HasTranslations;

    protected $fillable = [
        'service_section_id',
        'value',
        'label',
        'description',
        'sort_order',
    ];

    public array $translatable = [
        'label',
        'description',
    ];

    public function section()
    {
        return $this->belongsTo(ServiceSection::class);
    }
}
