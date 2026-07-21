<?php

namespace App\Filament\Resources\Services\Schemas\Tabs;

use App\Support\Translation\Translation;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs\Tab;

class KeywordsTab
{
    public static function make(): Tab
    {
        return Tab::make('Keywords')
            ->icon('heroicon-o-tag')
            ->lazy()
            ->schema([

                Section::make('SEO Keywords')
                    ->description('Manage the keywords associated with this service.')
                    ->collapsible()
                    ->collapsed()
                    ->schema([

                        Repeater::make('keywords')
                            ->relationship()
                            ->schema([

                                Grid::make(2)
                                    ->schema([

                                        Translation::text('keyword','Keyword',required: true)->columnSpanFull(),


                                        TextInput::make('sort_order')
                                            ->numeric()
                                            ->default(0),

                                    ]),

                            ])
                            ->defaultItems(0)
                            ->orderColumn('sort_order')
                            ->reorderable()
                            ->collapsible()
                            ->collapsed()
                            ->addActionLabel('Add Keyword')
                            ->itemLabel(function (array $state): string {
                                return data_get($state, 'keyword.en')
                                    ?? data_get($state, 'keyword.ar')
                                    ?? 'New Keyword';
                            })



                    ]),

            ]);
    }
}
