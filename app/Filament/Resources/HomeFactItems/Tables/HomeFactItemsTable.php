<?php

namespace App\Filament\Resources\HomeFactItems\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HomeFactItemsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order')
            ->reorderable('sort_order')
            ->columns([

                TextColumn::make('icon')
                    ->searchable()
                    ->badge(),

                TextColumn::make('value')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('label')
                    ->searchable()
                    ->limit(40),

                TextColumn::make('source')
                    ->badge()
                    ->color('success'),

                TextColumn::make('sort_order')
                    ->sortable(),

                IconColumn::make('is_active')
                    ->boolean(),

                TextColumn::make('updated_at')
                    ->since()
                    ->sortable(),

            ])
            ->defaultSort('sort_order')
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
