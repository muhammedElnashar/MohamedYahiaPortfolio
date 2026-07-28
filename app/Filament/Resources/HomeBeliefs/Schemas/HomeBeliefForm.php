<?php

namespace App\Filament\Resources\HomeBeliefs\Schemas;

use App\Support\Translation\Translation;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class HomeBeliefForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Belief')
                    ->description('Manage a belief displayed on the homepage.')
                    ->schema([

                        TextInput::make('number')
                            ->label('Belief Number')
                            ->numeric()
                            ->required()
                            ->minValue(1),

                        TextInput::make('sort_order')
                            ->label('Sort Order')
                            ->numeric()
                            ->required()
                            ->default(0),

                        Toggle::make('is_active')
                            ->label('Active')
                            ->default(true),

                    ])
                    ->columns(3),

                Section::make('Content')
                    ->schema([
                        Translation::text('title', 'Title',required: true)->columnSpanFull(),
                        Translation::text('description', 'Description')->columnSpanFull(),


                    ]),

            ]);
    }
}
