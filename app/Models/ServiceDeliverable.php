<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ServiceDeliverable extends Model
{
    use HasTranslations;

    protected $fillable = [
        'service_id',
        'icon',
        'title',
        'description',
        'sort_order',
    ];
    public array $translatable = [
        'title',
        'description',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
