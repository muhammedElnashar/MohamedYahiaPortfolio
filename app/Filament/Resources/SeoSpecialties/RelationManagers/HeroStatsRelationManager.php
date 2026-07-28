<?php

namespace App\Filament\Resources\SeoSpecialties\RelationManagers;

use App\Support\Translation\Translation;
use Filament\Actions\AssociateAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DissociateAction;
use Filament\Actions\DissociateBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HeroStatsRelationManager extends RelationManager
{
    protected static string $relationship = 'heroStats';
    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([

                Translation::text('label', 'Label',required: true)->columnSpanFull(),
                TextInput::make('value')
                    ->label('Value')
                    ->required()
                    ->maxLength(50),
                TextInput::make('sort_order')
                    ->label('Sort Order')
                    ->numeric()
                    ->default(0)
                    ->required(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('value')
            ->columns([
                TextColumn::make('value')
                    ->label('Value'),

                TextColumn::make('label')
                    ->label(' Label'),



                TextColumn::make('sort_order')
                    ->label('Order')
                    ->sortable(),
            ])
            ->defaultSort('sort_order')
            ->headerActions([
                CreateAction::make(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ]);
    }}
