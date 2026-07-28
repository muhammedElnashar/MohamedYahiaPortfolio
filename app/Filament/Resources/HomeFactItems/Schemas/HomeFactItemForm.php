<?php

namespace App\Filament\Resources\HomeFactItems\Schemas;

use App\Support\Translation\Translation;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class HomeFactItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('icon')
                    ->required()
                    ->helperText('مثال: trending-up, dollar-sign, brain-circuit'),

                TextInput::make('value')
                    ->required()
                    ->maxLength(50),
                    Translation::text('label','Label',required: true)->columnSpanFull(),
                    Translation::text('description','Description')->columnSpanFull(),

                TextInput::make('source')
                    ->maxLength(255),

                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0)
                    ->required(),

                Toggle::make('is_active')
                    ->default(true),

            ]);
    }
}
