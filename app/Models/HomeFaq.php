<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class HomeFaq extends Model
{
    use HasTranslations;
    protected $fillable = [
        'question',
        'answer',
        'sort_order',
        'is_active',
    ];
    public array $translatable = [
        'question',
        'answer',
    ];
    protected function casts(): array
    {
        return [
            'question' => 'array',
            'answer' => 'array',
            'sort_order' => 'integer',
            'is_active' => 'boolean',
        ];
    }
}
