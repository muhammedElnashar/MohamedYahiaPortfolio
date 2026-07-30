<?php

namespace App\Filament\Resources\ProfilePages\RelationManagers;

use App\Support\Filament\SortOrder;
use App\Support\Translation\Translation;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class StatsRelationManager extends RelationManager
{
    protected static string $relationship = 'stats';

    protected static ?string $title = 'Statistics';

    public function form(Schema $schema): Schema
    {
        return $schema->components([
            Translation::text('label','Label')->columnSpanFull(),
            TextInput::make('value')
                ->required(),


            TextInput::make('icon')
                ->label('Icon'),

            SortOrder::relationship(
                fn () => $this->getOwnerRecord()->stats()
            ),

            Toggle::make('is_active')
                ->default(true),

        ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order')
            ->reorderable('sort_order')
            ->columns([

                TextColumn::make('value'),

                TextColumn::make('label')
                    ->label('Label'),

                TextColumn::make('sort_order')
                    ->sortable(),

                IconColumn::make('is_active')
                    ->boolean(),

            ])
            ->defaultSort('sort_order')
            ->reorderable('sort_order')
            ->headerActions([
                CreateAction::make(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ]);
    }
}
