<?php

namespace Database\Seeders;

use App\Models\Platform;
use Illuminate\Database\Seeder;

class PlatformSeeder extends Seeder
{
    public function run(): void
    {
        $platforms = [

            [
                'name' => ['ar' => 'WordPress', 'en' => 'WordPress'],
                'icon' => 'wordpress',
                'background_color' => '#ffffff',
                'text_color' => '#21759B',
            ],

            [
                'name' => ['ar' => 'Shopify', 'en' => 'Shopify'],
                'icon' => 'shopify',
                'background_color' => '#96BF48',
                'text_color' => '#ffffff',
            ],

            [
                'name' => ['ar' => 'WooCommerce', 'en' => 'WooCommerce'],
                'icon' => 'woocommerce',
                'background_color' => '#7F54B3',
                'text_color' => '#ffffff',
            ],

            [
                'name' => ['ar' => 'سلة', 'en' => 'Salla'],
                'icon' => 'salla', // غير موجودة
                'background_color' => '#FF6B35',
                'text_color' => '#ffffff',
            ],

            [
                'name' => ['ar' => 'زد', 'en' => 'Zid'],
                'icon' => 'zid', // غير موجودة
                'background_color' => '#00897B',
                'text_color' => '#ffffff',
            ],

            [
                'name' => ['ar' => 'React', 'en' => 'React'],
                'icon' => 'react',
                'background_color' => '#20232A',
                'text_color' => '#61DAFB',
            ],

            [
                'name' => ['ar' => 'Next.js', 'en' => 'Next.js'],
                'icon' => 'nextdotjs',
                'background_color' => '#000000',
                'text_color' => '#ffffff',
            ],

            [
                'name' => ['ar' => 'Vue.js', 'en' => 'Vue.js'],
                'icon' => 'vuedotjs',
                'background_color' => '#41B883',
                'text_color' => '#ffffff',
            ],

            [
                'name' => ['ar' => 'Laravel', 'en' => 'Laravel'],
                'icon' => 'laravel',
                'background_color' => '#FF2D20',
                'text_color' => '#ffffff',
            ],

            [
                'name' => ['ar' => 'Magento', 'en' => 'Magento'],
                'icon' => 'megento',
                'background_color' => '#F46F25',
                'text_color' => '#ffffff',
            ],

            [
                'name' => ['ar' => 'Webflow', 'en' => 'Webflow'],
                'icon' => 'webflow',
                'background_color' => '#4353FF',
                'text_color' => '#ffffff',
            ],

            [
                'name' => ['ar' => 'HubSpot', 'en' => 'HubSpot'],
                'icon' => 'hubspot',
                'background_color' => '#FF7A59',
                'text_color' => '#ffffff',
            ],

            [
                'name' => ['ar' => 'Next.js App', 'en' => 'Next.js App'],
                'icon' => 'nextdotjs',
                'background_color' => '#0070F3',
                'text_color' => '#ffffff',
            ],

            [
                'name' => ['ar' => 'Google Play', 'en' => 'Google Play'],
                'icon' => 'googleplay',
                'background_color' => '#00C853',
                'text_color' => '#ffffff',
            ],

            [
                'name' => ['ar' => 'App Store', 'en' => 'App Store'],
                'icon' => 'appstore',
                'background_color' => '#0070C9',
                'text_color' => '#ffffff',
            ],

            [
                'name' => ['ar' => 'Wix', 'en' => 'Wix'],
                'icon' => 'wix',
                'background_color' => '#006EFF',
                'text_color' => '#ffffff',
            ],

            [
                'name' => ['ar' => '.NET & Django', 'en' => '.NET & Django'],
                'icon' => 'dotnet',
                'background_color' => '#092D4F',
                'text_color' => '#ffffff',
            ],

            [
                'name' => ['ar' => 'OpenCart', 'en' => 'OpenCart'],
                'icon' => 'opencart',
                'background_color' => '#CC0000',
                'text_color' => '#ffffff',
            ],

        ];

        foreach ($platforms as $index => $platform) {
            Platform::updateOrCreate(
                [
                    'name->en' => $platform['name']['en'],
                ],
                [
                    'name' => $platform['name'],
                    'icon' => $platform['icon'],
                    'background_color' => $platform['background_color'],
                    'text_color' => $platform['text_color'],
                    'sort_order' => $index + 1,
                ]
            );
        }
    }
}
