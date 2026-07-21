<?php

namespace App\Filament\Resources\SeoData\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class SeoDataForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->live()
                    ->afterStateUpdated(fn ($state, callable $set) =>
                    $set('slug', Str::slug($state))
                    ),

        TextInput::make('slug')
            ->disabled()
            ->dehydrated()
            ->required()
            ->unique(ignoreRecord: true),

                TextInput::make('title'),
                TextInput::make('canonical_url'),


                Textarea::make('meta_description')
                    ->rows(3),

                Textarea::make('meta_keywords')
                    ->rows(3),


                TextInput::make('og_title'),

                Textarea::make('og_description')->rows(1),

                TextInput::make('og_image'),

                TextInput::make('twitter_title'),

                Textarea::make('twitter_description')->rows(3),

                Textarea::make('schema')
                    ->rows(3),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
