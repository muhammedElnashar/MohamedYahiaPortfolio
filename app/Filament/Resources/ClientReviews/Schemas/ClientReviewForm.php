<?php

namespace App\Filament\Resources\ClientReviews\Schemas;

use App\Models\ClientReview;
use App\Support\Filament\SortOrder;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ClientReviewForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Client Information')
                    ->schema([

                        TextInput::make('client_name')
                            ->label('Client Name')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('client_subtitle')
                            ->label('Client Subtitle')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('avatar_text')
                            ->label('Avatar Text')
                            ->maxLength(5)
                            ->helperText('Example: A or WA'),

                        TextInput::make('rating')
                            ->label('Rating')
                            ->numeric()
                            ->minValue(1)
                            ->maxValue(5)
                            ->default(5)
                            ->required(),
                        TextInput::make('rating_time')
                            ->label('Rating Time')
                            ->required(),


                    ])
                    ->columns(2),

                Section::make('Review')
                    ->schema([

                        Textarea::make('review')
                            ->label('Client Review')
                            ->required()
                            ->rows(6)
                            ->columnSpanFull(),

                    ]),

                Section::make('Settings')
                    ->schema([

                       SortOrder::make(ClientReview::class),

                        Toggle::make('is_active')
                            ->label('Active')
                            ->default(true),

                    ])
                    ->columnSpanFull(),

            ]);
    }
}
