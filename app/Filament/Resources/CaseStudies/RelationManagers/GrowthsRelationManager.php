<?php

namespace App\Filament\Resources\CaseStudies\RelationManagers;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;

use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use App\Support\Translation\Translation;
class GrowthsRelationManager extends RelationManager
{
    protected static string $relationship = 'growths';



    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('value')
                    ->label('Value')
                    ->required()
                    ->maxLength(50),
                TextInput::make('icon')
                    ->label('Icon'),

                Translation::text(
                    'title',
                    'Title',
                    required: true,
                ),

                TextInput::make('sort_order')
                    ->label('Order')
                    ->numeric()
                    ->default(0),

            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order')
            ->reorderable('sort_order')
            ->recordTitleAttribute('value')
            ->columns([

                TextColumn::make('value')
                    ->badge()
                    ->sortable(),

                TextColumn::make('title')
                    ->searchable(),

                TextColumn::make('sort_order')
                    ->sortable(),

            ])
            ->filters([
                //
            ])
            ->headerActions([
                CreateAction::make(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }}
