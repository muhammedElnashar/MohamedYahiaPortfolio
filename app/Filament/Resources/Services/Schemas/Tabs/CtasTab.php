<?php

namespace App\Filament\Resources\Services\Schemas\Tabs;

use App\Enums\CtaTypeEnum;
use App\Support\Translation\Translation;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs\Tab;

class CtasTab
{
    public static function make(): Tab
    {
        return Tab::make('CTAs')
            ->icon('heroicon-o-hand-raised')
            ->lazy()
            ->schema([

                Section::make('Call to Actions')
                    ->description('Manage the call to actions for this service.')
                    ->collapsible()
                    ->collapsed()
                    ->schema([

                        Repeater::make('ctas')
                            ->relationship()
                            ->schema([

                                Grid::make(2)
                                    ->schema([

                                        Select::make('section_key')
                                            ->label('Section Key')
                                            ->options(CtaTypeEnum::class)
                                            ->required()
                                            ->native(false),
                                        TextInput::make('icon')
                                            ->label('Icon'),
                                        Translation::text('title','Title',required: true)->columnSpanFull(),
                                        Translation::textarea('description','description')->columnSpanFull(),
                                        Translation::text('button_text','Button Text')->columnSpanFull(),


                                        TextInput::make('button_url')
                                            ->label('Button URL'),

                                    ]),


                            ])
                            ->collapsible()
                            ->collapsed()
                            ->itemLabel(function (array $state): string {
                                return data_get($state, 'title.en')
                                    ?? data_get($state, 'title.ar')
                                    ?? 'New CTA';
                            })


                    ])



            ]);
    }
}
