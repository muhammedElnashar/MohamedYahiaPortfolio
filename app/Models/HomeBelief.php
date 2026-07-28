<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class HomeBelief extends Model
{
    use HasTranslations;
    protected $fillable = [
        'number',
        'title',
        'description',
        'sort_order',
        'is_active',
    ];
    public array $translatable = [
        'title',
        'description',    ];
    protected function casts(): array
    {
        return [
            'number' => 'integer',
            'title' => 'array',
            'description' => 'array',
            'sort_order' => 'integer',
            'is_active' => 'boolean',
        ];
    }
}
