<?php

namespace App\Filament\Resources\Services\Schemas\Tabs;

use App\Support\Translation\Translation;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs\Tab;

class ProblemsTab
{
    public static function make(): Tab
    {
        return Tab::make('Problems')
            ->icon('heroicon-o-exclamation-triangle')
            ->lazy()
            ->schema([

                Section::make('Problems Checklist')
                    ->description('Manage the common problems this service solves.')
                    ->collapsible()
                    ->collapsed()
                    ->schema([

                        Repeater::make('checklists')
                            ->relationship()
                            ->schema([

                                Hidden::make('section_key')
                                    ->default('problems')
                                    ->dehydrated(),

                                Grid::make(2)
                                    ->schema([
                                        Translation::text('item','Problem',required: true)->columnSpanFull(),




                                    ]),

                            ])
                            ->defaultItems(0)
                            ->orderColumn('sort_order')
                            ->reorderable()
                            ->collapsible()
                            ->collapsed()
                            ->cloneable()
                            ->addActionLabel('Add Problem')
                            ->itemLabel(function (array $state): string {
                                return data_get($state, 'item.en')
                                    ?? data_get($state, 'item.ar')
                                    ?? 'New Problem';
                            })


                    ]),

            ]);
    }
}
