<?php

namespace App\Filament\Resources\Services\Schemas\Tabs;

use App\Support\Translation\Translation;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs\Tab;

class FaqsTab
{
    public static function make(): Tab
    {
        return Tab::make('FAQs')
            ->icon('heroicon-o-question-mark-circle')
            ->lazy()
            ->schema([

                Section::make('Frequently Asked Questions')
                    ->description('Manage the frequently asked questions for this service.')
                    ->collapsible()
                    ->collapsed()
                    ->schema([

                        Repeater::make('faqs')
                            ->relationship()
                            ->schema([

                                Grid::make(2)
                                    ->schema([
                                        Translation::text('question','Question',required: true)->columnSpanFull(),
                                        Translation::richEditor('answer','Answer',required: true)->columnSpanFull(),




                                    ]),

                            ])
                            ->defaultItems(0)
                            ->orderColumn('sort_order')
                            ->reorderable()
                            ->collapsible()
                            ->collapsed()
                            ->cloneable()
                            ->addActionLabel('Add FAQ')
                            ->itemLabel(function (array $state): string {
                                return data_get($state, 'question.en')
                                    ?? data_get($state, 'question.ar')
                                    ?? 'New FAQ';
                            })


                    ]),

            ]);
    }
}
