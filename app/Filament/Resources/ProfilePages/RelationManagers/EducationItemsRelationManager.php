<?php

namespace App\Filament\Resources\ProfilePages\RelationManagers;

use App\Support\Filament\SortOrder;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class EducationItemsRelationManager extends RelationManager
{
    protected static string $relationship = 'educationItems';

    protected static ?string $title = 'Education';

    public function form(Schema $schema): Schema
    {
        return $schema->components([

            TextInput::make('title.ar')
                ->label('Title Arabic')
                ->required(),

            TextInput::make('title.en')
                ->label('Title English')
                ->required(),

            TextInput::make('subtitle.ar')
                ->label('Subtitle Arabic'),

            TextInput::make('subtitle.en')
                ->label('Subtitle English'),

            Textarea::make('description.ar')
                ->label('Description Arabic')
                ->rows(4),

            Textarea::make('description.en')
                ->label('Description English')
                ->rows(4),

            TextInput::make('icon'),

            TextInput::make('url')
                ->url(),

            SortOrder::relationship(
                fn () => $this->getOwnerRecord()->educationItems()
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

                TextColumn::make('title'),

                TextColumn::make('subtitle'),

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
