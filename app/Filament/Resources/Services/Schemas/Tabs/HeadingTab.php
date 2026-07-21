<?php

namespace App\Filament\Resources\Services\Schemas\Tabs;

use App\Enums\ServiceSectionHeadingKey;
use App\Support\Translation\Translation;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs\Tab;

class HeadingTab
{
    public static function make(): Tab
    {


        return Tab::make('Content')
            ->icon('heroicon-o-document-text')
            ->lazy()
            ->schema([

                Section::make('Content Sections')
                    ->description('Manage all content sections.')
                    ->collapsible()
                    ->collapsed()
                    ->schema([

                        Repeater::make('contentSections')
                            ->relationship()
                            ->schema([

                                Grid::make(2)
                                    ->schema([

                                        Select::make('section_key')
                                            ->label('Section')
                                            ->options(ServiceSectionHeadingKey::options())
                                            ->required()
                                            ->disableOptionsWhenSelectedInSiblingRepeaterItems()
                                            ->searchable(),

                                       Translation::text('eyebrow','Eyebrow'),
                                       Translation::text('title','Title',required: true)->columnSpanFull(),



                                      Translation::richEditor('content','Content')
                                            ->columnSpanFull(),

                                    ]),

                            ])
                            ->collapsible()
                            ->collapsed()
                            ->cloneable()
                            ->addActionLabel('Add Section')
                            ->itemLabel(
                                fn(array $state): ?string => ServiceSectionHeadingKey::options()[$state['section_key'] ?? '']
                                    ?? 'New Section'
                            ),

                    ]),

            ]);


    }
}
