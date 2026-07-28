<?php

namespace App\Filament\Resources\HeroSections\Schemas;

use App\Support\Translation\Translation;
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
                            Translation::text('badge','Badge',required: true)->columnSpanFull(),
                            Translation::text('first_name','First Name',required: true)->columnSpanFull(),
                            Translation::text('last_name','Last Name',required: true)->columnSpanFull(),
                            Translation::text('position','Position',required: true)->columnSpanFull(),
                            Translation::text('title','Title',required: true)->columnSpanFull(),
                            Translation::text('hero_role','Role',required: true)->columnSpanFull(),
                            Translation::textarea('description','Description')->columnSpanFull(),
                            TextInput::make('whatsapp_url')->url()->required(),
                            TextInput::make('portfolio_url')->url()->required(),
                            FileUpload::make('avatar')
                                ->image()
                                ->disk('public')
                                ->directory('hero')
                                ->imageEditor()
                                ->required()->columnSpanFull(),
                            Translation::text('card_name','Card Name',required: true)->columnSpanFull(),
                            Translation::text('card_role','Card Role',required: true)->columnSpanFull(),
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
                            Translation::text('mostaql_projects','Projects',required: true)->columnSpanFull(),


                        ]),

                    ])->columnSpanFull(),

            ]);
    }
}
