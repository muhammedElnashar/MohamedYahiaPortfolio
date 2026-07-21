<?php

namespace App\Models;

use App\Enums\HomeSectionKey;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class HomeSection extends Model
{
    use HasTranslations;
    protected $fillable = [
        'section_key',
        'title',
        'subtitle',
        'eyebrow',
        'badge',
        'button_text',
        'button_url',

    ];
    public array $translatable = [
        'title',
        'subtitle',
        'eyebrow',
        'badge',
        'button_text',    ];

    protected $casts = [
        'section_key' => HomeSectionKey::class,
    ];

    public static function getSection(string $key): ?self
    {
        return self::where('section_key', $key)->first();
    }
}
