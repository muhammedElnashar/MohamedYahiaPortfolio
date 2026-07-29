<?php

namespace App\Filament\Resources\BlogCategories\Schemas;

use App\Models\BlogCategory;
use App\Support\Filament\SortOrder;
use App\Support\Translation\Translation;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class BlogCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Category')
                    ->schema([

                        TextInput::make('name.ar')
                            ->label('Name Arabic')
                            ->required(),

                        TextInput::make('name.en')
                            ->label('Name English')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(
                                fn ($state, $set) =>
                                $set('slug', Str::slug($state))
                            ),

                        TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true),

                        SortOrder::make(BlogCategory::class),
                            Translation::textarea('description','Description')->columnSpanFull(),

                        Toggle::make('is_active')
                            ->label('Active')
                            ->default(true),

                    ])
                    ->columns(2)
                    ->columnSpanFull(),

            ]);
    }
}
