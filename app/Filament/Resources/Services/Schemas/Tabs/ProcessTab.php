<?php

namespace App\Filament\Resources\Services\Schemas\Tabs;

use App\Enums\ProcessSectionKey;
use App\Support\Translation\Translation;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs\Tab;

class ProcessTab
{
    public static function make(): Tab
    {
        return Tab::make('Process')
            ->icon('heroicon-o-list-bullet')
            ->lazy()
            ->schema([

                Repeater::make('processSections')
                    ->relationship()
                    ->label('Process Sections')
                    ->addActionLabel('Add Section')
                    ->reorderable()
                    ->collapsible()
                    ->collapsed()
                    ->cloneable()
                    ->itemLabel(function (array $state): string {
                        return data_get($state, 'title') ?? 'New Section';
                    })
                    ->schema([

                        Section::make('Section Information')
                            ->schema([

                                Hidden::make('type')
                                    ->default('process')
                                    ->dehydrated(),

                                Grid::make(2)
                                    ->schema([

                                        TextInput::make('title')
                                            ->label('Section Title')
                                            ->required(),

                                        Select::make('key')
                                            ->label('Section Key')
                                            ->options(ProcessSectionKey::class)
                                            ->required()
                                            ->native(false),



                                    ]),

                            ]),

                        Section::make('Steps')
                            ->schema([

                                Repeater::make('processSteps')
                                    ->relationship()
                                    ->grid([
                                        'default' => 1,
                                        'md' => 2,
                                    ])
                                    ->addActionLabel('Add Step')
                                    ->reorderable()
                                    ->collapsible()
                                    ->collapsed()
                                    ->cloneable()
                                    ->itemLabel(function (array $state): string {
                                        return data_get($state, 'title.en')
                                            ?? data_get($state, 'title.ar')
                                            ?? 'New Step';
                                    })

                                    ->schema([

                                        Grid::make(2)
                                            ->schema([
                                                Translation::text('title','Title',required: true)->columnSpanFull(),


                                                Translation::textarea('description','description')->columnSpanFull(),
                                                TextInput::make('number')
                                                    ->label('Step Number')
                                                    ->numeric()
                                                    ->required(),
                                                TextInput::make('sort_order')
                                                    ->numeric()
                                                    ->default(0),






                                            ]),

                                    ]),

                            ]),

                    ]),

            ]);
    }
}
