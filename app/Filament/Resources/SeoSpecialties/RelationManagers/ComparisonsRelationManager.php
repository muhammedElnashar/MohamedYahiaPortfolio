<?php

namespace App\Filament\Resources\SeoSpecialties\RelationManagers;

use App\Support\Translation\Translation;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ComparisonsRelationManager extends RelationManager
{
    protected static string $relationship = 'comparisons';

    protected static ?string $title = 'Comparison';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Translation::text('criterion', 'Criterion',required: true)->columnSpanFull(),
                Translation::text('specialist_value', 'Specialist',required: true)->columnSpanFull(),
                Translation::text('competitor_value', 'Competitor',required: true)->columnSpanFull(),

                TextInput::make('sort_order')
                    ->label('Sort Order')
                    ->numeric()
                    ->default(0)
                    ->required(),
            ])
            ->columns(2);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('criterion')
                    ->label('Criterion')
                    ->searchable(),

                TextColumn::make('specialist_value')
                    ->label('Specialist'),

                TextColumn::make('competitor_value')
                    ->label('Competitor'),

                TextColumn::make('sort_order')
                    ->label('Order')
                    ->sortable(),
            ])
            ->defaultSort('sort_order')
            ->reorderable('sort_order')
            ->headerActions([
                CreateAction::make(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                DeleteBulkAction::make(),
            ]);
    }
}
