<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ServiceComparison extends Model
{
    use HasTranslations;

    protected $fillable = [
        'service_id',
        'feature',
        'expert_value',
        'traditional_value',
        'sort_order',
    ];
    public array $translatable = [
        'feature',
    ];

    protected $casts = [
        'expert_value' => 'boolean',
        'traditional_value' => 'boolean',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
