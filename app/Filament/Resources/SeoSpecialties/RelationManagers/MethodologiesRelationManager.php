<?php

namespace App\Filament\Resources\SeoSpecialties\RelationManagers;

use App\Support\Translation\Translation;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MethodologiesRelationManager extends RelationManager
{
    protected static string $relationship = 'methodologies';

    protected static ?string $title = 'Methodology';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('number')
                    ->label('Number')
                    ->numeric()
                    ->required(),

                TextInput::make('icon')
                    ->label('Icon')
                    ->maxLength(255),
                Translation::text('title', 'Title',required: true)->columnSpanFull(),
                Translation::textarea('description', 'Description')->columnSpanFull(),

                Toggle::make('is_featured')
                    ->label('Featured')
                    ->default(false),

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
                TextColumn::make('number')
                    ->label('#')
                    ->sortable(),

                TextColumn::make('title')
                    ->label('Title')
                    ->searchable(),

                TextColumn::make('icon')
                    ->label('Icon'),

                IconColumn::make('is_featured')
                    ->label('Featured')
                    ->boolean(),

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
