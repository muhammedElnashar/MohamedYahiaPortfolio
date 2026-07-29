<?php

namespace App\Filament\Resources\Services\RelationManagers;

use App\Support\Filament\SortOrder;
use App\Support\Translation\Translation;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PainPointsRelationManager extends RelationManager
{
    protected static string $relationship = 'painPoints';

    protected static ?string $title = 'Pain Points';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Pain Point')
                    ->description('Add a problem or sign indicating the client needs this service.')
                    ->schema([

                        Translation::text(
                            'title',
                            'Title',
                            required: true
                        )
                            ->columnSpanFull(),

                        TextInput::make('icon')
                            ->label('Icon')
                            ->placeholder('search'),

                        /*
                        |--------------------------------------------------------------------------
                        | Sort Order
                        |--------------------------------------------------------------------------
                        */

                        SortOrder::relationship(
                            fn () => $this
                                ->getOwnerRecord()
                                ->painPoints()
                        ),

                    ])
                    ->columns(2)
                    ->columnSpanFull(),

            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('title')
                    ->label('Title')
                    ->limit(60)
                    ->searchable()
                    ->weight('medium'),

                TextColumn::make('icon')
                    ->label('Icon')
                    ->placeholder('—'),

                TextColumn::make('sort_order')
                    ->label('Order')
                    ->sortable(),

                TextColumn::make('updated_at')
                    ->label('Updated')
                    ->since()
                    ->sortable(),

            ])

            ->defaultSort('sort_order')

            ->reorderable('sort_order')

            ->headerActions([

                CreateAction::make()
                    ->label('Add Pain Point'),

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
