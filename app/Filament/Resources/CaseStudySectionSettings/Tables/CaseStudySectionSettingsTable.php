<?php

namespace App\Filament\Resources\CaseStudySectionSettings\Tables;

use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CaseStudySectionSettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('title')
                    ->label('Title')
                    ->limit(50),

                TextColumn::make('button_text')
                    ->label('Button Text')
                    ->limit(30),

                TextColumn::make('icon_1')
                    ->label('Icon 1')
                    ->badge(),

                TextColumn::make('icon_2')
                    ->label('Icon 2')
                    ->badge(),

                TextColumn::make('icon_3')
                    ->label('Icon 3')
                    ->badge(),

                IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),

                TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime('d M Y - H:i')
                    ->sortable(),

            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ]);
    }
}
