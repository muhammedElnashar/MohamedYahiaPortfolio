<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class CertificateSection extends Model
{
    use HasTranslations;
    protected $fillable = [
        'linkedin_button_text',
        'linkedin_url',
        'gallery_hint',
        'is_active',
        'sort_order',
    ];
    public array $translatable = [
        'linkedin_button_text',
        'gallery_hint',

    ];
    protected function casts(): array
    {
        return [
            'linkedin_button_text' => 'array',
            'gallery_hint' => 'array',
            'is_active' => 'boolean',
        ];
    }

    public function stats(): HasMany
    {
        return $this->hasMany(CertificateStat::class)
            ->orderBy('sort_order');
    }

    public function highlights(): HasMany
    {
        return $this->hasMany(CertificateHighlight::class)
            ->orderBy('sort_order');
    }

    public function certificates(): HasMany
    {
        return $this->hasMany(Certificate::class)
            ->orderBy('sort_order');
    }
}
