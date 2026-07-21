<?php

namespace App\Filament\Resources\CaseStudies\Schemas;

use App\Support\Translation\Translation;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CaseStudyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('General Information')
                    ->schema([

                        Translation::text('eyebrow', 'Eyebrow'),
                        Translation::text('title', 'Title',required: true),
                        Translation::textarea('description', 'Description'),

                        Translation::text('industry', 'Industry'),

                        Translation::text('niche', 'Niche'),

                        Translation::text('period', 'Period'),

                        Translation::text('focus', 'Focus'),
                        Translation::textarea('challenge', 'Challenge'),
                        Translation::textarea('solution', 'Solution'),
                        Translation::textarea('result', 'Result'),


                    ]),
                Grid::make(1)->schema([
                    Section::make('Metrics')
                        ->schema([

                            Grid::make(2)
                                ->schema([

                                    TextInput::make('slug')
                                        ->required()
                                        ->unique(ignoreRecord: true),

                                    TextInput::make('metric')
                                        ->required(),

                                ]),

                            Grid::make(4)
                                ->schema([

                                    TextInput::make('clicks')
                                        ->numeric(),

                                    TextInput::make('impressions')
                                        ->numeric(),

                                    TextInput::make('ctr'),

                                    TextInput::make('position'),

                                ]),

                            Grid::make(2)
                                ->schema([

                                    ColorPicker::make('metric_color')
                                        ->default('#E86A1A'),

                                    FileUpload::make('image')
                                        ->image()
                                        ->disk('public')
                                        ->directory('case-studies')
                                        ->imageEditor()
                                        ->required(),

                                ]),

                        ]),

                    Section::make('Settings')
                        ->schema([

                            Grid::make(2)
                                ->schema([

                                    TextInput::make('sort_order')
                                        ->numeric()
                                        ->default(0),

                                    Toggle::make('is_active')
                                        ->default(true),

                                ]),

                        ]),
                ])

            ]);
    }
}
