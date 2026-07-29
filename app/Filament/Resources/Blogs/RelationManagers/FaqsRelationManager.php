<?php

namespace App\Filament\Resources\Blogs\RelationManagers;

use App\Support\Filament\SortOrder;
use App\Support\Translation\Translation;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class FaqsRelationManager extends RelationManager
{
    protected static string $relationship = 'faqs';

    protected static ?string $title = 'Frequently Asked Questions';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Arabic')
                    ->schema([
                        Translation::textarea('question', 'Question',required: true)->columnSpanFull(),
                        Translation::textarea('answer', 'Answer',required: true)->columnSpanFull(),


                    ])
                    ->columnSpanFull(),


                Section::make('Settings')
                    ->schema([

                        SortOrder::relationship(
                            fn () => $this->getOwnerRecord()->faqs()
                        ),

                        Toggle::make('is_active')
                            ->label('Active')
                            ->default(true),

                    ])
                    ->columns(2)
                    ->columnSpanFull(),

            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('question')
            ->defaultSort('sort_order')
            ->reorderable('sort_order')
            ->columns([

                TextColumn::make('question')
                    ->label('Question')
                    ->limit(60)
                    ->searchable(),

                TextColumn::make('sort_order')
                    ->label('Order')
                    ->sortable(),

                IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),

                TextColumn::make('updated_at')
                    ->label('Updated')
                    ->dateTime()
                    ->sortable(),

            ])



            ->headerActions([
                CreateAction::make()
                    ->label('Add FAQ'),
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
