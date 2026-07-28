<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class HomeFactItem extends Model
{
    use HasTranslations;
    protected $fillable = [
        'icon',
        'value',
        'label',
        'description',
        'source',
        'sort_order',
        'is_active',
    ];

public array $translatable = [
    'label',
    'description',
];
}
