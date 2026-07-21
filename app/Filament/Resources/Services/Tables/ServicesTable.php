<?php

namespace App\Filament\Resources\Services\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class ServicesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order')
            ->columns([

                TextColumn::make('sort_order')
                    ->label('#')
                    ->sortable(),

                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                TextColumn::make('category.name')
                    ->label('Category')
                    ->badge()
                    ->sortable(),

                TextColumn::make('slug')
                    ->searchable()
                    ->copyable()
                    ->toggleable(),

                TextColumn::make('faqs_count')
                    ->counts('faqs')
                    ->badge()
                    ->label('FAQs'),

                TextColumn::make('benefits_count')
                    ->counts('benefits')
                    ->badge()
                    ->label('Benefits'),

              /*  TextColumn::make('steps_count')
                    ->counts('processSteps')
                    ->badge()
                    ->label('Steps'),*/

                TextColumn::make('keywords_count')
                    ->counts('keywords')
                    ->badge()
                    ->label('Keywords'),

                IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),

                TextColumn::make('updated_at')
                    ->since()
                    ->sortable(),

            ])
            ->filters([

                SelectFilter::make('category')
                    ->relationship('category', 'name'),

                TernaryFilter::make('is_active'),

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
