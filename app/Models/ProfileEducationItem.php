<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class ProfileEducationItem extends Model
{
    use HasTranslations;

    protected $fillable = [
        'profile_page_id',
        'title',
        'subtitle',
        'description',
        'icon',
        'url',
        'sort_order',
        'is_active',
    ];

    public array $translatable = [
        'title',
        'subtitle',
        'description',
    ];

    protected function casts(): array
    {
        return [
            'sort_order' => 'integer',
            'is_active' => 'boolean',
        ];
    }

    public function profilePage(): BelongsTo
    {
        return $this->belongsTo(ProfilePage::class);
    }
}
