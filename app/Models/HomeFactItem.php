<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeFactItem extends Model
{
    protected $fillable = [
        'icon',
        'value',
        'label',
        'description',
        'source',
        'sort_order',
        'is_active',
    ];}
