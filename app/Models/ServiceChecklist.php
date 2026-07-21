<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ServiceChecklist extends Model
{
    use HasTranslations;

    protected $fillable = [
        'service_id',
        'section_key',
        'item',
    ];
    public array $translatable = [
        'item',
    ];
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
