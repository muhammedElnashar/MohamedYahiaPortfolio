<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ServiceCategory extends Model
{
    use HasTranslations;

    protected $fillable = [
        'name',
        'slug',
        'sort_order',
    ];
    public array $translatable = [
        'name'
    ];

/*    protected $casts = [
        'is_active' => 'boolean',
    ];*/

    public function services()
    {
        return $this->hasMany(Service::class,'category_id');
    }
}
