<?php

namespace App\Filament\Resources\Services\RelationManagers;

use App\Enums\ProcessSectionKey;
use App\Support\Translation\Translation;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProcessSectionsRelationManager extends RelationManager
{
    protected static string $relationship = 'processSections';

    protected static ?string $title = 'Process ';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Section Information')
                    ->schema([

                        TextInput::make('title')
                            ->label('Section Title')
                            ->required()
                            ->maxLength(255),

                        Select::make('key')
                            ->label('Section Key')
                            ->options(ProcessSectionKey::class)
                            ->required()
                            ->native(false),

                    ])
                    ->columns(2)
                    ->columnSpanFull(),


                Section::make('Process Steps')
                    ->description('Manage the steps displayed in this process section.')
                    ->schema([

                        Repeater::make('processSteps')
                            ->relationship()

                            ->addActionLabel('Add Step')

                            ->orderColumn('sort_order')
                            ->reorderable()

                            ->collapsible()
                            ->collapsed()
                            ->cloneable()

                            ->itemLabel(
                                fn (array $state): string =>
                                    data_get($state, 'title.en')
                                    ?? data_get($state, 'title.ar')
                                    ?? 'New Step'
                            )

                            ->schema([

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

                                TextInput::make('number')
                                    ->label('Step Number')
                                    ->numeric()
                                    ->required(),

                            ])

                            ->columns(2)
                            ->columnSpanFull(),

                    ])
                    ->columnSpanFull(),

            ]);
    }


    public function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('title')
                    ->label('Section')
                    ->searchable()
                    ->weight('medium'),

                TextColumn::make('key')
                    ->label('Key')
                    ->badge(),

                TextColumn::make('process_steps_count')
                    ->label('Steps')
                    ->counts('processSteps')
                    ->badge(),

                TextColumn::make('updated_at')
                    ->label('Updated')
                    ->since()
                    ->sortable(),

            ])

            ->headerActions([

                CreateAction::make()
                    ->label('Add Process Section')
                    ->mutateDataUsing(function (array $data): array {

                        $data['type'] = 'process';

                        return $data;
                    }),

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
