<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ServiceCta extends Model
{
    use HasTranslations;

    protected $fillable=[
        'service_id',
        'section_key',
        'icon',
        'button_text',
        'button_url',
        'title',
        'description',

    ];
    public array $translatable = [
        'title',
        'description',
        'button_text',
    ];
}
