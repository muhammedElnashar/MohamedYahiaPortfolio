<?php

namespace App\Filament\Resources\HeroSkills\Schemas;

use App\Models\HeroSkill;
use App\Support\Filament\SortOrder;
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

                SortOrder::make(HeroSkill::class),
                Toggle::make('is_highlighted')
                    ->label('Highlighted')
                    ->default(false),
            ]);
    }
}
