<?php

namespace App\Filament\Resources\HomeSections\Schemas;

use App\Enums\HomeSectionKey;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class HomeSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('section_key')
                    ->options(HomeSectionKey::options())
                    ->required()
                    ->unique(ignoreRecord: true),
                TextInput::make('eyebrow'),
                TextInput::make('title')
                    ->required(),
                TextInput::make('subtitle'),
                Textarea::make('badge'),
                TextInput::make('button_text'),
                TextInput::make('button_url'),


            ]);
    }
}
