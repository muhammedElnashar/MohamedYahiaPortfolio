<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class CertificateHighlight extends Model
{
    use HasTranslations;
    protected $fillable = [
        'certificate_section_id',
        'platform',
        'title',
        'subtitle',
        'category',
        'url',
        'sort_order',
        'is_active',
    ];
    public array $translatable = [
        'title',
        'subtitle',
    ];
    protected function casts(): array
    {
        return [
            'title' => 'array',
            'subtitle' => 'array',
            'is_active' => 'boolean',
        ];
    }

    public function certificateSection(): BelongsTo
    {
        return $this->belongsTo(CertificateSection::class);
    }
}
