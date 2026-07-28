<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ServiceCategory extends Model
{

    protected $fillable = [
        'name',
        'slug',
        'sort_order',
    ];


/*    protected $casts = [
        'is_active' => 'boolean',
    ];*/

    public function services()
    {
        return $this->hasMany(Service::class,'category_id');
    }
}
