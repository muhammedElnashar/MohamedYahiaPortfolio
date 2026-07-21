<?php

namespace App\Filament\Resources\Services\Schemas\Tabs;

use App\Enums\CardSectionKey;
use App\Support\Translation\Translation;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs\Tab;

class CardsTab
{
    public static function make(): Tab
    {
        return Tab::make('Cards')
            ->icon('heroicon-o-squares-2x2')
            ->lazy()
            ->schema([

                Repeater::make('cardSections')
                    ->relationship()
                    ->label('Card Sections')
                    ->addActionLabel('Add Section')
                    ->reorderable()
                    ->collapsible()
                    ->collapsed()
                    ->cloneable()
                    ->itemLabel(function (array $state): string {
                        return data_get($state, 'title');

                    })
                    ->schema([

                        Section::make('Section Information')
                            ->schema([

                                Hidden::make('type')
                                    ->default('card')
                                    ->dehydrated(),

                                Grid::make(1)
                                    ->schema([

                                        TextInput::make('title')
                                            ->label('Section Title')
                                            ->required()
                                            ->maxLength(255),

                                        Select::make('key')
                                            ->label('Section Key')
                                            ->options(CardSectionKey::class)
                                            ->required()
                                            ->native(false),


                                    ]),

                            ]),

                        Section::make('Cards')
                            ->schema([

                                Repeater::make('cards')
                                    ->relationship()
                                    ->grid([
                                        'default' => 1,
                                        'md' => 2,
                                    ])
                                    ->addActionLabel('Add Card')
                                    ->reorderable()
                                    ->collapsible()
                                    ->collapsed()
                                    ->cloneable()
                                    ->itemLabel(function (array $state): string {
                                        return data_get($state, 'title.en')
                                            ?? data_get($state, 'title.ar')
                                            ?? 'New Card';
                                    })

                                    ->schema([

                                        Grid::make(1)
                                            ->schema([

                                                TextInput::make('icon')
                                                    ->placeholder('shield-check'),

                                                Translation::text('title','Title',required: true)->columnSpanFull(),


                                                Translation::textarea('description','description')->columnSpanFull(),
                                                TextInput::make('sort_order')
                                                    ->label('Sort Order')
                                                    ->numeric()
                                                    ->default(0),
                                            ]),

                                    ]),

                            ]),

                    ]),

            ]);
    }
}
