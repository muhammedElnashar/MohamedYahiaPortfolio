<?php

namespace App\Filament\Resources\Services\Schemas;

use App\Filament\Resources\Services\Schemas\Tabs\BenefitsTab;
use App\Filament\Resources\Services\Schemas\Tabs\CardsTab;
use App\Filament\Resources\Services\Schemas\Tabs\ComparisonTab;
use App\Filament\Resources\Services\Schemas\Tabs\CtasTab;
use App\Filament\Resources\Services\Schemas\Tabs\DeliverablesTab;
use App\Filament\Resources\Services\Schemas\Tabs\FaqsTab;
use App\Filament\Resources\Services\Schemas\Tabs\GeneralTab;
use App\Filament\Resources\Services\Schemas\Tabs\HeadingTab;
use App\Filament\Resources\Services\Schemas\Tabs\KeywordsTab;
use App\Filament\Resources\Services\Schemas\Tabs\PainPointsTab;
use App\Filament\Resources\Services\Schemas\Tabs\ProblemsTab;
use App\Filament\Resources\Services\Schemas\Tabs\ProcessTab;
use App\Filament\Resources\Services\Schemas\Tabs\RelatedServicesTab;
use App\Filament\Resources\Services\Schemas\Tabs\StatisticsTab;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Tabs::make('ServiceTabs')
                    ->tabs([
                        GeneralTab::make(),
                        StatisticsTab::make(),
                        PainPointsTab::make(),
                        HeadingTab::make(),
                        BenefitsTab::make(),
                        DeliverablesTab::make(),
                        CardsTab::make(),
                        ProcessTab::make(),
                        KeywordsTab::make(),
                        RelatedServicesTab::make(),
                        ProblemsTab::make(),
                        ComparisonTab::make(),
                        FaqsTab::make(),
                        CtasTab::make(),

                        /*

                        */
                    ])->columnSpanFull(),

            ]);
    }
}
