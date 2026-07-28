<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ClientReview extends Model
{
    protected $fillable = [
        'client_name',
        'avatar_text',
        'client_subtitle',
        'rating',
        'rating_time',
        'review',
        'sort_order',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'rating' => 'integer',
            'sort_order' => 'integer',
            'is_active' => 'boolean',
        ];
    }
}
