<?php

namespace App\Filament\Resources\Services\Schemas\Tabs;

use App\Filament\Forms\Components\SeoForm;
use App\Support\Translation\Translation;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs\Tab;
use Illuminate\Support\Str;

class GeneralTab
{
    public static function make(): Tab
    {
        return
            Tab::make('General')
                ->icon('heroicon-o-cog-6-tooth')
                ->lazy()
                ->schema([

                    Section::make('Basic Information')
                        ->description('Basic service information.')
                        ->schema([

                            Grid::make(2)
                                ->schema([
                                    Grid::make(2)
                                        ->schema([
                                            TextInput::make('title.en')
                                                ->label('English Title')
                                                ->required()
                                                ->live(onBlur: true)
                                                ->afterStateUpdated(
                                                    fn ($state, callable $set) => $set('slug', Str::slug($state))
                                                ),

                                            TextInput::make('title.ar')
                                                ->label('Arabic Title')
                                                ->required(),
                                        ]),
                                    TextInput::make('slug')
                                        ->required()
                                        ->unique(ignoreRecord: true),

                                    Select::make('category_id')
                                        ->relationship('category', 'name')
                                        ->required()
                                        ->searchable()
                                        ->preload(),

                                    TextInput::make('icon'),
                                    TextInput::make('badge')
                                        ->label('Badge')
                                        ->placeholder('🔥 NEW')
                                        ->maxLength(30),
                                    Toggle::make('is_active')
                                        ->default(true),

                                    TextInput::make('sort_order')
                                        ->numeric()
                                        ->default(0),

                                ]),
                            Translation::textarea(
                                'short_description',
                                'Short Description',
                                rows: 4
                            ),

                        ]),

                    Section::make('Hero Section')
                        ->collapsible()
                        ->collapsed()
                        ->schema([

                            Translation::text(
                                'hero_title',
                                'Hero Title',
                                required: true
                            ),

                            Translation::textarea(
                                'hero_description',
                                'Hero Description',
                                rows: 6
                            ),

                        ]),

                    Section::make('SEO')
                        ->collapsible()
                        ->collapsed()
                        ->schema([
                           SeoForm::make(),


                        ]),

                ]);
    }
}
