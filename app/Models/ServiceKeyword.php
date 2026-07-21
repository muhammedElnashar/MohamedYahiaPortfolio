<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ServiceKeyword extends Model
{
    use HasTranslations;

    protected $fillable = [
        'service_id',
        'keyword',
        'sort_order',
    ];
    public array $translatable = [
        'keyword',
    ];
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
