<?php

namespace App\Filament\Resources\SeoSpecialties\RelationManagers;

use App\Support\Filament\SortOrder;
use App\Support\Translation\Translation;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class StatisticsRelationManager extends RelationManager
{
    protected static string $relationship = 'statistics';

    protected static ?string $title = 'Statistics';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('value')
                    ->label('Value')
                    ->placeholder('68%')
                    ->required()
                    ->maxLength(255),

                TextInput::make('badge')
                    ->label('Badge')
                    ->maxLength(255),
                Translation::textarea('description', 'Description')->columnSpanFull(),

                TextInput::make('source')
                    ->label('Source')
                    ->maxLength(255),

                TextInput::make('source_url')
                    ->label('Source URL')
                    ->url()
                    ->maxLength(2048),

                SortOrder::relationship(
                    fn () => $this->getOwnerRecord()->statistics()
                ),
            ])
            ->columns(2);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('value')
                    ->label('Value'),

                TextColumn::make('description.ar')
                    ->label('Description')
                    ->limit(60),

                TextColumn::make('source')
                    ->label('Source'),

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
