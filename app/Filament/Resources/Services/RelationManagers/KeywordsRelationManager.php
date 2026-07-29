<?php

namespace App\Filament\Resources\Services\RelationManagers;

use App\Support\Filament\SortOrder;
use App\Support\Translation\Translation;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class KeywordsRelationManager extends RelationManager
{
    protected static string $relationship = 'keywords';

    protected static ?string $title = 'SEO Keywords';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Keyword')
                    ->description('Add a keyword associated with this service.')
                    ->schema([

                        Translation::text(
                            'keyword',
                            'Keyword',
                            required: true
                        )
                            ->columnSpanFull(),

                        SortOrder::relationship(
                            fn () => $this->getOwnerRecord()->keywords()
                        ),

                    ])
                    ->columnSpanFull(),

            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('keyword')
                    ->label('Keyword')
                    ->searchable()
                    ->weight('medium'),

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
                    ->label('Add Keyword'),

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
