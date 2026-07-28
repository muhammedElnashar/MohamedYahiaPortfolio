<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class Certificate extends Model
{
    use HasTranslations;
    protected $fillable = [
        'certificate_section_id',
        'title',
        'platform',
        'image',
        'url',
        'issued_at',
        'sort_order',
        'is_active',
    ];
    public array $translatable = [
        'title',
    ];
    protected function casts(): array
    {
        return [
            'title' => 'array',
            'issued_at' => 'date',
            'is_active' => 'boolean',
        ];
    }

    public function certificateSection(): BelongsTo
    {
        return $this->belongsTo(CertificateSection::class);
    }
}
