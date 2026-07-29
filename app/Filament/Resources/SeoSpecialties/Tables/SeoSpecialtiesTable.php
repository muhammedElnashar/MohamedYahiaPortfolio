<?php

namespace App\Filament\Resources\SeoSpecialties\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SeoSpecialtiesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('slug')
                    ->label('Slug')
                    ->searchable()
                    ->copyable(),

                TextColumn::make('title')
                    ->label('Page Title')
                    ->limit(45)
                    ->tooltip(fn ($record) => $record->title['ar'] ?? null),

                TextColumn::make('challenges_count')
                    ->label('Challenges')
                    ->counts('challenges')
                    ->badge(),

                TextColumn::make('services_count')
                    ->label('Services')
                    ->counts('services')
                    ->badge(),

                TextColumn::make('processes_count')
                    ->label('Process')
                    ->counts('processes')
                    ->badge(),

                TextColumn::make('faqs_count')
                    ->label('FAQs')
                    ->counts('faqs')
                    ->badge(),

                TextColumn::make('sort_order')
                    ->label('Order')
                    ->sortable(),

                IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),
            ])
            ->defaultSort('sort_order')
            ->reorderable('sort_order')
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
