<?php

namespace App\Filament\Resources\SeoPages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SeoPagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('key')
                    ->label('Page')
                    ->badge()
                    ->sortable()
                    ->searchable(),

                TextColumn::make('meta_title')
                    ->label('Meta Title')
                    ->limit(40),

                TextColumn::make('robots')
                    ->badge(),

                IconColumn::make('is_in_sitemap')
                    ->label('Sitemap')
                    ->boolean(),

                TextColumn::make('updated_at')
                    ->label('Updated')
                    ->since()
                    ->sortable(),

            ])

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
