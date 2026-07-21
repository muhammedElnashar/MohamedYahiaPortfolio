<?php

namespace App\Filament\Resources\Services\Schemas\Tabs;

use App\Support\Translation\Translation;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs\Tab;

class ComparisonTab
{
    public static function make(): Tab
    {
        return Tab::make('Comparison')
            ->icon('heroicon-o-scale')
            ->lazy()
            ->schema([

                Section::make('Comparison Table')
                    ->description('Compare your service with traditional methods.')
                    ->collapsible()
                    ->collapsed()
                    ->schema([

                        Repeater::make('comparisons')
                            ->relationship()
                            ->schema([

                                Grid::make(2)
                                    ->schema([
                                        Translation::text('feature','Feature',required: true)->columnSpanFull(),



                                        TextInput::make('sort_order')
                                            ->label('Sort Order')
                                            ->numeric()
                                            ->default(0),
                                        Toggle::make('expert_value')
                                            ->label('With Me')
                                            ->default(true)
                                            ->inline(false),

                                        Toggle::make('traditional_value')
                                            ->label('Traditional')
                                            ->default(false)
                                            ->inline(false),



                                    ]),

                            ])
                            ->defaultItems(0)
                            ->orderColumn('sort_order')
                            ->reorderable()
                            ->collapsible()
                            ->collapsed()
                            ->cloneable()
                            ->addActionLabel('Add Comparison')
                            ->itemLabel(function (array $state): string {
                                return data_get($state, 'feature.en')
                                    ?? data_get($state, 'feature.ar')
                                    ?? 'New Feature';
                            })


                    ]),

            ]);
    }
}
