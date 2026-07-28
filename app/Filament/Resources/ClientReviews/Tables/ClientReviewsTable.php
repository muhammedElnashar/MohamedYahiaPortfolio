<?php

namespace App\Filament\Resources\ClientReviews\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ClientReviewsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('client_name')
                    ->label('Client')
                    ->searchable(),

                TextColumn::make('rating')
                    ->label('Rating')
                    ->formatStateUsing(
                        fn ($state) => str_repeat('★', $state)
                    ),

                TextColumn::make('review')
                    ->label('Review')
                    ->limit(60),

                TextColumn::make('sort_order')
                    ->label('Order')
                    ->sortable(),

                IconColumn::make('is_active')
                    ->boolean(),

            ])
            ->defaultSort('sort_order')
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
