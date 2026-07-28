<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ContactSetting extends Model
{
    use HasTranslations;
    protected $fillable = [
        'name',
        'job_title',
        'description',

        'whatsapp',
        'email',

        'linkedin_url',
        'linkedin_label',

        'mostaql_url',
        'mostaql_label',

        'location',

        'consultation_title',
        'consultation_description',

        'is_active',
    ];
    public array $translatable = [
        'name',
        'job_title',
        'description',
        'linkedin_label',
        'mostaql_label',
        'location',
        'consultation_title',
        'consultation_description',
    ];
    protected function casts(): array
    {
        return [
            'name' => 'array',
            'job_title' => 'array',
            'description' => 'array',
            'linkedin_label' => 'array',
            'mostaql_label' => 'array',
            'location' => 'array',
            'consultation_title' => 'array',
            'consultation_description' => 'array',

            'is_active' => 'boolean',
        ];
    }
}
