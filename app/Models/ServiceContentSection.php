<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ServiceContentSection extends Model
{
    use HasTranslations;
    protected $fillable = [
        'service_id',
        'section_key',
        'eyebrow',
        'title',
        'content',
    ];
    public array $translatable = [
        'eyebrow',
        'title',
        'content',
    ];
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
