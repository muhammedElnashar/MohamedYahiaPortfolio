<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class CaseStudySectionSetting extends Model
{
    use HasTranslations;

    protected $fillable = [
        'title',
        'description',
        'button_text',
        'button_url',

        'icon_1',
        'text_1',

        'icon_2',
        'text_2',

        'icon_3',
        'text_3',

        'icon_4',
        'text_4',

        'icon_5',
        'text_5',

        'icon_6',
        'text_6',

        'is_active',
    ];

    public array $translatable = [
        'title',
        'description',
        'button_text',

        'text_1',
        'text_2',
        'text_3',
        'text_4',
        'text_5',
        'text_6',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }
}
