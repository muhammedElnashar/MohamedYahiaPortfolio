<?php

namespace App\Filament\Resources\Services\Schemas\Tabs;

use App\Support\Translation\Translation;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs\Tab;

class BenefitsTab
{
    public static function make(): Tab
    {
        return Tab::make('Benefits')
            ->icon('heroicon-o-sparkles')
            ->lazy()
            ->schema([

                Section::make('Why This Service')
                    ->description('Key benefits clients receive from this service.')
                    ->collapsible()
                    ->collapsed()
                    ->schema([

                        Repeater::make('benefits')
                            ->relationship()
                            ->schema([

                                Grid::make(2)
                                    ->schema([

                                        TextInput::make('icon')
                                            ->label('Icon')
                                            ->placeholder('shield-check'),
                                        Translation::text('title','Title',required: true),


                                        Translation::textarea('description','description')->columnSpanFull(),


                                    ]),

                            ])
                            ->defaultItems(0)
                            ->orderColumn('sort_order')
                            ->reorderable()
                            ->collapsible()
                            ->collapsed()
                            ->addActionLabel('Add Benefit')
                            ->itemLabel(function (array $state): string {
                                return data_get($state, 'title.en')
                                    ?? data_get($state, 'title.ar')
                                    ?? 'New Benefit';
                            })


                    ]),

            ]);
    }
}
