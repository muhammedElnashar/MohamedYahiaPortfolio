<?php

namespace App\Filament\Resources\Services\RelationManagers;

use App\Support\Filament\SortOrder;
use App\Support\Translation\Translation;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BenefitsRelationManager extends RelationManager
{
    protected static string $relationship = 'benefits';

    protected static ?string $title = 'Benefits';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Benefit')
                    ->description('Key benefit clients receive from this service.')
                    ->schema([

                        TextInput::make('icon')
                            ->label('Icon')
                            ->placeholder('shield-check'),

                        SortOrder::relationship(
                            fn () => $this->getOwnerRecord()->benefits()
                        ),

                        Translation::text(
                            'title',
                            'Title',
                            required: true
                        )
                            ->columnSpanFull(),

                        Translation::textarea(
                            'description',
                            'Description'
                        )
                            ->columnSpanFull(),

                    ])
                    ->columns(2)
                    ->columnSpanFull(),

            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('title')
                    ->label('Benefit')
                    ->limit(60)
                    ->searchable()
                    ->weight('medium'),

                TextColumn::make('icon')
                    ->label('Icon')
                    ->placeholder('—'),

                TextColumn::make('sort_order')
                    ->label('Order')
                    ->sortable(),

                TextColumn::make('updated_at')
                    ->label('Updated')
                    ->since()
                    ->sortable(),

            ])

            ->defaultSort('sort_order')

            ->reorderable('sort_order')

            ->headerActions([
                CreateAction::make()
                    ->label('Add Benefit'),
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
