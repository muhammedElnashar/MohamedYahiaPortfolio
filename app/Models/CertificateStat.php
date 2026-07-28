<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class CertificateStat extends Model
{
    use HasTranslations;
    protected $fillable = [
        'certificate_section_id',
        'value',
        'label',
        'sort_order',
        'is_active',
    ];
    public array $translatable = [
        'label',

    ];
    protected function casts(): array
    {
        return [
            'label' => 'array',
            'is_active' => 'boolean',
        ];
    }

    public function certificateSection(): BelongsTo
    {
        return $this->belongsTo(CertificateSection::class);
    }
}
