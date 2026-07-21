<?php

namespace App\Filament\Resources\CaseStudies\RelationManagers;

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

class ImprovementsRelationManager extends RelationManager
{
    protected static string $relationship = 'improvements';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Translation::text('title','Title',required: true)->columnSpanFull(),
                Translation::textarea('description','Description')->columnSpanFull(),
                TextInput::make('icon')->label('Icon'),
                TextInput::make('sort_order')
                    ->label('Order')
                    ->numeric()
                    ->default(0),
                ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order')
            ->reorderable('sort_order')
            ->recordTitleAttribute('title')
            ->columns([
                TextColumn::make('title')
                    ->badge()
                    ->sortable(),

                TextColumn::make('description')
                    ->searchable(),

                TextColumn::make('sort_order')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                CreateAction::make(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
