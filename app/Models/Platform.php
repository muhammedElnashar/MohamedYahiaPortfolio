<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Platform extends Model
{
    use HasTranslations;

    protected $fillable = [
        'name',
        'icon',
        'background_color',
        'text_color',
        'sort_order',
    ];

    public array $translatable = [
        'name',
    ];


}
