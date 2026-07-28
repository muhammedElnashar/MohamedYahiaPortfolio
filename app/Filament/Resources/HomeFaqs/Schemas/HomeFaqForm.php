<?php

namespace App\Filament\Resources\HomeFaqs\Schemas;

use App\Support\Translation\Translation;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class HomeFaqForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Question')
                    ->schema([
                        Translation::textarea('question', 'Question',required: true)->columnSpanFull(),
                        Translation::textarea('answer', 'answer',required: true)->columnSpanFull(),
                        Grid::make(2)
            ->schema([
                TextInput::make('sort_order')
                    ->label('Sort Order')
                    ->numeric()
                    ->default(0)
                    ->required(),

                Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),
            ])


                    ])
                    ->columnSpanFull(),


            ]);
    }
}
