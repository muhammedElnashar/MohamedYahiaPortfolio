<?php

namespace App\Filament\Resources\Services\Schemas\Tabs;

use App\Support\Translation\Translation;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs\Tab;

class DeliverablesTab
{
    public static function make(): Tab
    {
        return Tab::make('Deliverables')
            ->icon('heroicon-o-clipboard-document-check')
            ->lazy()
            ->schema([

                Section::make('What Clients Receive')
                    ->description('Everything included when purchasing this service.')
                    ->collapsible()
                    ->collapsed()
                    ->schema([

                        Repeater::make('deliverables')
                            ->relationship()
                            ->schema([

                                Grid::make(3)
                                    ->schema([

                                        TextInput::make('icon')
                                            ->label('Icon')
                                            ->placeholder('check'),

                                        Translation::text('title', 'Title', required: true)->columnSpan(2),
                                        Translation::textarea('description', 'Description')->columnSpanFull(),



                                    ]),

                            ])
                            ->defaultItems(0)
                            ->orderColumn('sort_order')
                            ->reorderable()
                            ->collapsible()
                            ->collapsed()
                            ->addActionLabel('Add Deliverable')
                            ->itemLabel(function (array $state): string {
                                return data_get($state, 'title.en')
                                    ?? data_get($state, 'title.ar')
                                    ?? 'New Deliverable';
                            })


                    ]),

            ]);
    }
}
