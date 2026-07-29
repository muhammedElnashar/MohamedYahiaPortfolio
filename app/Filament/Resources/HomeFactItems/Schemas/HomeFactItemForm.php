<?php

namespace App\Filament\Resources\HomeFactItems\Schemas;

use App\Models\HomeFactItem;
use App\Support\Filament\SortOrder;
use App\Support\Translation\Translation;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class HomeFactItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

              Section::make('Facts')
                  ->columnSpanFull()
                ->schema([
                    Grid::make(2)->schema([
                        TextInput::make('icon')
                            ->required()
                            ->helperText('مثال: trending-up, dollar-sign, brain-circuit'),

                        TextInput::make('value')
                            ->required()
                            ->maxLength(50),
                    ]),

                    Translation::text('label','Label',required: true)->columnSpanFull(),
                    Translation::text('description','Description')->columnSpanFull(),
                    Grid::make(2)->schema([
                        TextInput::make('source')
                            ->maxLength(255),

                        SortOrder::make(HomeFactItem::class),

                        Toggle::make('is_active')
                            ->default(true),
                    ]),



                ])

            ]);
    }
}
