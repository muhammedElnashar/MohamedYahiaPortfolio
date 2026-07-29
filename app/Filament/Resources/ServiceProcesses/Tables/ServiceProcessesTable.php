<?php

namespace App\Filament\Resources\ServiceProcesses\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class ServiceProcessesTable
{
    public static function configure(Table $table): Table
    {
        return $table  ->defaultSort('sort_order')
            ->reorderable('sort_order')
            ->columns([

                TextColumn::make('sort_order')
                    ->label('Sort Order')
                    ->sortable(),

                TextColumn::make('title')
                    ->label('Title')
                    ->searchable(),

                IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),

                TextColumn::make('updated_at')
                    ->label('Updated')
                    ->dateTime('d M Y - H:i')
                    ->sortable(),

            ])
            ->filters([

                TernaryFilter::make('is_active')
                    ->label('Active'),

            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('sort_order');
    }
}
