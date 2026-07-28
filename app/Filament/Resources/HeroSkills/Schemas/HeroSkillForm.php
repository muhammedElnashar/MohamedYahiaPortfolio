<?php

namespace App\Filament\Resources\HeroSkills\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class HeroSkillForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),

                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),
                Toggle::make('is_highlighted')
                    ->label('Highlighted')
                    ->default(false),
            ]);
    }
}
