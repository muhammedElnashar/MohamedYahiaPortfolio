<?php

namespace Database\Seeders;

use App\Models\HomeFactItem;
use Illuminate\Database\Seeder;

class HomeFactItemSeeder extends Seeder
{
    public function run(): void
    {
        $items = [

            [
                'icon' => 'trending-up',
                'value' => '68%',
                'label' => 'of online experiences begin with a search engine',
                'description' => 'Not from ads or social media — Google is the main gateway to any potential client.',
                'source' => 'BrightEdge',
            ],

            [
                'icon' => 'cursor-click',
                'value' => '27%',
                'label' => "click-through rate for Google's first result",
                'description' => 'The first position gets 27% of all clicks — while position 10 gets less than 3%.',
                'source' => 'Backlinko',
            ],

            [
                'icon' => 'currency-dollar',
                'value' => '14.6%',
                'label' => 'organic traffic conversion rate',
                'description' => 'Compared to only 1.7% from paid ads — organic visitors are more trusting and purchase-ready.',
                'source' => 'Search Engine Journal',
            ],

            [
                'icon' => 'brain',
                'value' => '40%',
                'label' => 'of AI Overview citations come from Top 3 results',
                'description' => 'In the AI era, ranking high opens two doors: direct clicks + citations in AI answers.',
                'source' => 'Authoritas',
            ],

            [
                'icon' => 'eye-off',
                'value' => '0.6%',
                'label' => 'only go past page one',
                'description' => "If you're not on page one you don't exist — 99.4% of searchers never reach you.",
                'source' => 'Backlinko',
            ],

            [
                'icon' => 'chart-bar',
                'value' => '53%',
                'label' => 'of web traffic comes from organic search',
                'description' => 'Higher than social media, paid ads & email combined — search is the king channel.',
                'source' => 'BrightEdge',
            ],

            [
                'icon' => 'refresh',
                'value' => '5x',
                'label' => 'higher deal close rate from SEO',
                'description' => 'Visitors from search close deals at 5x the rate of traditional marketing — purchase intent is higher.',
                'source' => 'HubSpot',
            ],

            [
                'icon' => 'globe',
                'value' => '9B+',
                'label' => 'monthly searches on non-Google engines',
                'description' => 'Bing alone handles 9B+ monthly searches + Yahoo + DuckDuckGo + Yandex.',
                'source' => 'Microsoft / StatCounter',
            ],

        ];

        foreach ($items as $index => $item) {

            HomeFactItem::updateOrCreate(
                ['value' => $item['value']],
                array_merge($item, [
                    'sort_order' => $index + 1,
                    'is_active' => true,
                ])
            );
        }
    }
}
