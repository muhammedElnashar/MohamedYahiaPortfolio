<?php

namespace App\Filament\Resources\Platforms\Schemas;

use App\Support\Translation\Translation;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PlatformForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Platforms')

                ->schema([
                    Grid::make(2)
            ->schema([
                Translation::text('name','Name',required: true),
                TextInput::make('icon')
                    ->label('Icon'),
                ColorPicker::make('background_color')
                    ->label('Background Color'),
                ColorPicker::make('text_color')
                    ->label('Text Color'),
            ])

                ])->columnSpanFull()
            ]);
    }
}
