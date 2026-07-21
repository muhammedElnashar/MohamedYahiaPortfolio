<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ServicePainPoint extends Model

{
    use HasTranslations;
    protected $fillable = [
        'service_id',
        'icon',
        'title',
        'sort_order',
    ];
    public $translatable = [
        'title',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
