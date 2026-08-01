<?php

namespace Database\Seeders;

use App\Enums\PageListEnum;
use App\Models\SeoDataPage;
use Illuminate\Database\Seeder;

class SeoDataPageSeeder extends Seeder
{
    public function run(): void
    {
        foreach (PageListEnum::cases() as $page) {

            SeoDataPage::updateOrCreate(

                [
                    'key' => $page->value,
                ],

                [
                    'robots' => 'index,follow',
                    'is_in_sitemap' => true,
                ]

            );
        }
    }
}
