<?php

namespace Database\Seeders;

use App\Models\ServiceCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
           'Technical',
            'Content',
            'AI',
            'Ecommerce',
            'Local SEO',
            'YouTube SEO',
            'Advanced',
        ];

        foreach ($categories as $index => $name) {
            ServiceCategory::updateOrCreate(
                ['slug' => Str::slug($name)],
                [
                    'name' => $name,
                    'sort_order' => $index + 1,
                ]
            );
        }
    }
}
