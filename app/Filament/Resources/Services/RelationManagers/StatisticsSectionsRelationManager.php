<?php

namespace App\Filament\Resources\Services\RelationManagers;

use App\Enums\StatisticsSectionKey;
use App\Models\ServiceSection;
use App\Support\Filament\SortOrder;
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

class StatisticsSectionsRelationManager extends RelationManager
{
    protected static string $relationship = 'statisticsSections';

    protected static ?string $title = 'Statistics ';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([

                /*
                |--------------------------------------------------------------------------
                | Section
                |--------------------------------------------------------------------------
                */

                Section::make('Section Information')
                    ->schema([

                        TextInput::make('title')
                            ->label('Section Title')
                            ->required()
                            ->maxLength(255),

                        Select::make('key')
                            ->label('Section Key')
                            ->options(function (?ServiceSection $record): array {

                                $usedKeys = $this->getOwnerRecord()
                                    ->sections()
                                    ->when(
                                        $record,
                                        fn ($query) =>
                                        $query->whereKeyNot($record->getKey())
                                    )
                                    ->pluck('key')
                                    ->all();

                                return collect(StatisticsSectionKey::cases())
                                    ->reject(
                                        fn (StatisticsSectionKey $case) =>
                                        in_array($case->value, $usedKeys, true)
                                    )
                                    ->mapWithKeys(
                                        fn (StatisticsSectionKey $case) => [
                                            $case->value => method_exists($case, 'getLabel')
                                                ? $case->getLabel()
                                                : $case->name,
                                        ]
                                    )
                                    ->all();
                            })
                            ->required()
                            ->native(false),

                    ])
                    ->columns(2)
                    ->columnSpanFull(),


                /*
                |--------------------------------------------------------------------------
                | Statistics
                |--------------------------------------------------------------------------
                */

                Section::make('Statistics')
                    ->description('Manage statistics displayed in this section.')
                    ->schema([

                        Repeater::make('stats')
                            ->relationship()

                            // ترتيب الإحصائيات داخل السكشن
                            ->orderColumn('sort_order')
                            ->reorderable()

                            ->addActionLabel('Add Statistic')
                            ->collapsible()
                            ->collapsed()
                            ->cloneable()

                            ->itemLabel(
                                fn (array $state): string =>
                                    data_get($state, 'label.en')
                                    ?? data_get($state, 'label.ar')
                                    ?? 'New Statistic'
                            )

                            ->schema([

                                Translation::text(
                                    'label',
                                    'Label',
                                    required: true
                                )
                                    ->columnSpanFull(),

                                TextInput::make('value')
                                    ->label('Value')
                                    ->required()
                                    ->placeholder('300+'),

                                /*
                                 * عرض فقط.
                                 * Repeater هو المسؤول عن تحديث sort_order.
                                 */
                                TextInput::make('sort_order')
                                    ->label('Order')
                                    ->numeric()
                                    ->disabled()
                                    ->dehydrated(false),

                                Translation::textarea(
                                    'description',
                                    'Description'
                                )
                                    ->columnSpanFull(),

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
                    ->weight('medium')
                    ->searchable(),

                TextColumn::make('key')
                    ->label('Key')
                    ->badge(),

                TextColumn::make('stats_count')
                    ->label('Statistics')
                    ->counts('stats')
                    ->badge(),

                TextColumn::make('updated_at')
                    ->label('Updated')
                    ->since()
                    ->sortable(),

            ])

            ->headerActions([

                CreateAction::make()
                    ->label('Add Statistics Section')
                    ->mutateDataUsing(function (array $data): array {

                        $data['type'] = 'stat';

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
