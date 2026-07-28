<?php

namespace App\Filament\Resources\ServiceProcesses\Schemas;

use App\Support\Translation\Translation;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ServiceProcessForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Process Step')
                    ->schema([
                        Translation::text('title','Title',required: true)->columnSpanFull(),


                        TextInput::make('sort_order')
                            ->label('Order')
                            ->numeric()
                            ->required()
                            ->default(0)
                            ->minValue(0),

                        Toggle::make('is_active')
                            ->label('Active')
                            ->default(true),

                    ])
                    ->columns(2)
                    ->columnSpanFull(),

            ]);
    }
}
