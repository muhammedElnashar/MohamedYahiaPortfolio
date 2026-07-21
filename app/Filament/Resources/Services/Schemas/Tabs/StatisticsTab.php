<?php

namespace App\Filament\Resources\Services\Schemas\Tabs;

use App\Enums\StatisticsSectionKey;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs\Tab;

class StatisticsTab
{
    public static function make(): Tab
    {
        return Tab::make('Statistics')
            ->icon('heroicon-o-chart-bar')
            ->lazy()
            ->schema([

                Repeater::make('statisticsSections')
                    ->relationship()
                    ->label('Statistics Sections')
                    ->addActionLabel('Add Section')
                    ->reorderable()
                    ->collapsible()
                    ->collapsed()
                    ->cloneable()
                    ->itemLabel(fn (array $state): ?string => $state['title'] ?? 'New Section')
                    ->schema([

                        Section::make('Section Information')
                            ->schema([

                                Hidden::make('type')
                                    ->default('stat')
                                    ->dehydrated(),

                                Grid::make(2)
                                    ->schema([

                                        TextInput::make('title')
                                            ->label(' Section Title')
                                            ->required(),



                                        Select::make('key')
                                            ->label('Section Key')
                                            ->options(StatisticsSectionKey::class)
                                            ->required()
                                            ->native(false)
                                            ,

                                    ]),

                            ]),

                        Section::make('Statistics')
                            ->schema([

                                Repeater::make('stats')
                                    ->relationship()
                                    ->grid([
                                        'default' => 1,
                                        'md' => 2,
                                    ])
                                    ->addActionLabel('Add Statistic')
                                    ->reorderable()
                                    ->collapsible()
                                    ->collapsed()
                                    ->cloneable()
                                    ->itemLabel(function (array $state): string {
                                        return data_get($state, 'title.en')
                                            ?? data_get($state, 'title.ar')
                                            ?? 'New Statistic';
                                    })

                                    ->schema([

                                        Grid::make(2)
                                            ->schema([

                                                TextInput::make('label.en')
                                                    ->label('English Label')
                                                    ->required(),

                                                TextInput::make('label.ar')
                                                    ->label('Arabic Label')
                                                    ->required(),

                                                TextInput::make('value')
                                                    ->label('Value')
                                                    ->required()
                                                    ->placeholder('300+'),

                                                TextInput::make('sort_order')
                                                    ->label('Sort Order')
                                                    ->numeric()
                                                    ->default(0),

                                                Textarea::make('description.en')
                                                    ->label('English Description')
                                                    ->rows(2)
                                                    ->columnSpanFull(),

                                                Textarea::make('description.ar')
                                                    ->label('Arabic Description')
                                                    ->rows(2)
                                                    ->columnSpanFull(),

                                            ]),

                                    ]),

                            ]),

                    ]),

            ]);
    }
}
