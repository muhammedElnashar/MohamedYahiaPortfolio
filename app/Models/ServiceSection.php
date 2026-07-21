<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ServiceSection extends Model
{
    protected $fillable = [
        'service_id',
        'type',
        'key',
        'title',
        'icon',
        'sort_order',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function cards()
    {
        return $this->hasMany(ServiceCard::class)
            ->orderBy('sort_order');
    }
    public function processSteps()
    {
        return $this->hasMany(ServiceProcessStep::class)
            ->orderBy('sort_order');
    }
    public function stats()
    {
        return $this->hasMany(ServiceStat::class)
            ->orderBy('sort_order');
    }
}
