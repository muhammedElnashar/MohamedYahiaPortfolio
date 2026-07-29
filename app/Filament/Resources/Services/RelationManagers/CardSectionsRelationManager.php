<?php

namespace App\Filament\Resources\Services\RelationManagers;

use App\Enums\CardSectionKey;
use App\Support\Filament\SortOrder;
use App\Support\Translation\Translation;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CardSectionsRelationManager extends RelationManager
{
    protected static string $relationship = 'cardSections';

    protected static ?string $title = 'Cards';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([

                /*
                |--------------------------------------------------------------------------
                | Section Information
                |--------------------------------------------------------------------------
                */

                Section::make('Section Information')
                    ->schema([

                        TextInput::make('title')
                            ->label('Section Title')
                            ->required()
                            ->maxLength(255),

                        Select::make('key')
                            ->label('Section Key')
                            ->options(CardSectionKey::class)
                            ->required()
                            ->native(false)

                    ])
                    ->columns(2)
                    ->columnSpanFull(),


                /*
                |--------------------------------------------------------------------------
                | Cards
                |--------------------------------------------------------------------------
                */

                Section::make('Cards')
                    ->description('Manage the cards displayed inside this section.')
                    ->schema([

                        Repeater::make('cards')
                            ->relationship()
                            ->addActionLabel('Add Card')
                            ->reorderable('sort_order')
                            ->collapsible()
                            ->collapsed()
                            ->cloneable()
                            ->itemLabel(
                                fn(array $state): string => data_get($state, 'title.en')
                                    ?? data_get($state, 'title.ar')
                                    ?? 'New Card'
                            )
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        TextInput::make('icon')
                                            ->label('Icon')
                                            ->placeholder('shield-check'),

                                        TextInput::make('sort_order')
                                            ->label('Sort Order')
                                            ->numeric()
                                            ->disabled()
                                            ->dehydrated(false),
                                    ]),


                                Translation::text(
                                    'title',
                                    'Title',
                                    required: true
                                )
                                    ->columnSpanFull(),

                                Translation::textarea(
                                    'description',
                                    'Description'
                                )
                                    ->columnSpanFull(),


                            ])
                            ->columnSpanFull(),

                    ])
                    ->columnSpanFull(),

            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('title')
                    ->label('Section')
                    ->searchable()
                    ->weight('medium'),

                TextColumn::make('key')
                    ->label('Key')
                    ->badge(),

                TextColumn::make('cards_count')
                    ->label('Cards')
                    ->counts('cards')
                    ->badge(),


                TextColumn::make('updated_at')
                    ->label('Updated')
                    ->since()
                    ->sortable(),

            ])
            ->defaultSort('sort_order')
            ->reorderable('sort_order')
            ->headerActions([

                CreateAction::make()
                    ->label('Add Card Section')
                    ->mutateDataUsing(function (array $data): array {

                        $data['type'] = 'card';

                        $data['sort_order'] = (
                                $this->getOwnerRecord()
                                    ->cardSections()
                                    ->max('sort_order')
                                ?? 0
                            ) + 1;

                        return $data;
                    }),

            ])
            ->recordActions([

                EditAction::make(),

                DeleteAction::make(),

            ])
            ->toolbarActions([

                DeleteBulkAction::make(),

            ]);
    }
}
