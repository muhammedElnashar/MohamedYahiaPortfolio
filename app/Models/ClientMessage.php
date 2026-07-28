<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientMessage extends Model
{
    protected $fillable = [
        'client_name',
        'client_label',
        'image',
        'message',
        'my_reply',
        'sort_order',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'client_label' => 'array',
            'sort_order' => 'integer',
            'is_active' => 'boolean',
        ];
    }
}
