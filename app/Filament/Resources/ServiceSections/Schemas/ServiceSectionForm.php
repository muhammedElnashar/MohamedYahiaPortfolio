<?php

namespace App\Filament\Resources\ServiceSections\Schemas;

use App\Enums\ServiceSectionType;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ServiceSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Select::make('service_id')
                    ->relationship('service', 'title')
                    ->searchable()
                    ->preload()
                    ->required(),

                TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),

                Select::make('type')
                    ->options(ServiceSectionType::class)
                    ->required()
                    ->native(false),

                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),

            ])
            ->columns(2);
    }
}
