<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ServiceProcess extends Model
{
    use HasTranslations;

    protected $fillable = [
        'title',
        'sort_order',
        'is_active',
    ];

    public array $translatable = [
        'title',
    ];

    protected function casts(): array
    {
        return [
            'sort_order' => 'integer',
            'is_active' => 'boolean',
        ];
    }
}
