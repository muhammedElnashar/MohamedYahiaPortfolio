<?php

namespace App\Filament\Resources\Services\Schemas\Tabs;

use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs\Tab;

class RelatedServicesTab
{
    public static function make(): Tab
    {
        return Tab::make('Related Services')
            ->icon('heroicon-o-squares-plus')
            ->lazy()
            ->schema([

                Section::make('Related Services')
                    ->description('Select services that should appear as related services.')
                    ->collapsible()
                    ->collapsed()
                    ->schema([

                        Select::make('relatedServices')
                            ->label('Related Services')
                            ->relationship(
                                name: 'relatedServices',
                                titleAttribute: 'title',
                                modifyQueryUsing: fn ($query, $record) => $record
                                    ? $query->whereKeyNot($record->id)
                                    : $query,
                            )
                            ->multiple()
                            ->searchable()
                            ->preload()
                            ->columnSpanFull(),

                    ]),

            ]);
    }
}
