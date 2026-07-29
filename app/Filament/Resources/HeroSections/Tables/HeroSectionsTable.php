<?php

namespace App\Filament\Resources\HeroSections\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HeroSectionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('avatar')
                    ->disk('public')
                    ->label('Avatar')
                  ,
                TextColumn::make('badge')
                    ->limit(30),

                TextColumn::make('card_name')
                    ->searchable(),

                TextColumn::make('position')
                    ->searchable(),

                TextColumn::make('projects_count')
                    ->label('Projects'),

                TextColumn::make('years_count')
                    ->label('Years'),

                TextColumn::make('completion_count')
                    ->label('Completion'),

                TextColumn::make('rating_count')
                    ->label('Rating'),

                TextColumn::make('updated_at')
                    ->since(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                ]),
            ]);
    }
}
