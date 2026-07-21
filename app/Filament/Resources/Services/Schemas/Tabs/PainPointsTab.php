<?php

namespace App\Filament\Resources\Services\Schemas\Tabs;

use App\Support\Translation\Translation;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs\Tab;

class PainPointsTab
{
    public static function make(): Tab
    {
        return Tab::make('Pain Points')
            ->icon('heroicon-o-exclamation-triangle')
            ->lazy()
            ->schema([

                Section::make('Signs You Need This Service')
                    ->description('Common problems indicating the client needs this service.')
                    ->collapsible()
                    ->collapsed()
                    ->schema([

                        Repeater::make('painPoints')
                            ->relationship()
                            ->schema([

                                Grid::make(2)
                                    ->schema([
                                        Translation::text('title', 'Title',required: true)->columnSpanFull(),

                                        TextInput::make('icon')
                                            ->placeholder('search'),



                                    ]),

                            ])
                            ->defaultItems(0)
                            ->orderColumn('sort_order')
                            ->reorderable()
                            ->collapsible()
                            ->addActionLabel('Add Pain Point')
                            ->itemLabel(function (array $state): string {
                                return data_get($state, 'title.en')
                                    ?? data_get($state, 'title.ar')
                                    ?? 'New Section';
                            })
                    ]),

            ]);
    }
}
