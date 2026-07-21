<?php

namespace App\Filament\Resources\HeroSections\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Nette\Utils\Image;

class HeroSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Hero Sections')
                    ->tabs([
                        Tab::make('General')->schema([
                            TextInput::make('badge')
                                ->required(),

                            TextInput::make('first_name')
                                ->required(),

                            TextInput::make('last_name')
                                ->required(),

                            TextInput::make('position')
                                ->required(),

                            TextInput::make('title')
                                ->required(),
                            Textarea::make('hero_role')
                                ->required(),
                            Textarea::make('description')
                                ->required()->rows(1),

                            TextInput::make('whatsapp_url')
                                ->url()
                                ->required(),

                            TextInput::make('portfolio_url')
                                ->url()
                                ->required(),

                            FileUpload::make('avatar')
                                ->image()
                                ->disk('public')
                                ->directory('hero')
                                ->imageEditor()
                                ->required()->columnSpanFull(),
                            TextInput::make('card_name')
                                ->required(),
                            TextInput::make('card_role')
                                ->required(),

                            TextInput::make('projects_count')
                                ->numeric()
                                ->required(),

                            TextInput::make('years_count')
                                ->numeric()
                                ->required(),

                            TextInput::make('completion_count')
                                ->numeric()
                                ->required(),

                            TextInput::make('rating_count')
                                ->numeric()
                                ->step(0.1)
                                ->required(),

                            TextInput::make('mostaql_projects')
                                ->numeric()
                                ->required(),
                        ]),
/*                        Tab::make('Skills')->schema([
                            Repeater::make('skills')
                                ->relationship()
                                ->schema([

                                    TextInput::make('name')
                                        ->required(),


                                    TextInput::make('sort_order')
                                        ->numeric()
                                        ->default(0),
                                    Toggle::make('is_highlighted')
                                        ->default(false),

                                ])
                                ->collapsible()
                                ->reorderable()
                                ->columnSpanFull(),
                        ]),*/

                    ])->columnSpanFull(),

            ]);
    }
}
