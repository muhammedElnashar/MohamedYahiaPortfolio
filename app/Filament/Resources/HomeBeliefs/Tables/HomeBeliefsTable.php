<?php

namespace App\Filament\Resources\HomeBeliefs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HomeBeliefsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order')
            ->reorderable('sort_order')
            ->columns([

                TextColumn::make('number')
                    ->label('Belief')
                    ->formatStateUsing(
                        fn ($state) => 'BELIEF #' . str_pad(
                                $state,
                                2,
                                '0',
                                STR_PAD_LEFT
                            )
                    )
                    ->sortable(),

                TextColumn::make('title')
                    ->label('English Title')
                    ->searchable()
                    ->limit(45),



                TextColumn::make('sort_order')
                    ->label('Order')
                    ->sortable(),

                IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),

                TextColumn::make('updated_at')
                    ->label('Updated')
                    ->dateTime()
                    ->sortable(),

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
