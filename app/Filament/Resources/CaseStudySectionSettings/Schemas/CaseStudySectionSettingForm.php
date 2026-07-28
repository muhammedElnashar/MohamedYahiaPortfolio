<?php

namespace App\Filament\Resources\CaseStudySectionSettings\Schemas;

use App\Support\Translation\Translation;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CaseStudySectionSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                /*
                |--------------------------------------------------------------------------
                | CTA Content
                |--------------------------------------------------------------------------
                */

                Section::make('CTA Content')
                    ->schema([
                        Translation::text('title','Title',required: true)->columnSpanFull(),
                        Translation::textarea('description','Description')->columnSpanFull(),
                        Translation::text('button_text','Button Text ',required: true)->columnSpanFull(),

                        TextInput::make('button_url')
                            ->label('Button URL')
                            ->placeholder('#contact')
                            ->maxLength(255)
                            ->columnSpanFull(),

                    ])
                    ->columns(2)
                    ->columnSpanFull(),


                /*
                |--------------------------------------------------------------------------
                | Proof Items 1 - 3
                |--------------------------------------------------------------------------
                */

                Section::make('Proof Items')
                    ->description('Items displayed below the Case Studies.')
                    ->schema([

                        // Item 1

                        Select::make('icon_1')
                            ->label('Icon 1')
                            ->options(self::iconOptions())
                            ->searchable()
                            ->required(),

                        Translation::text('text_1','Text 1 ',required: true)->columnSpanFull(),


                        // Item 2

                        Select::make('icon_2')
                            ->label('Icon 2')
                            ->options(self::iconOptions())
                            ->searchable()
                            ->required(),
                        Translation::text('text_2','Text 2 ',required: true)->columnSpanFull(),




                        // Item 3

                        Select::make('icon_3')
                            ->label('Icon 3')
                            ->options(self::iconOptions())
                            ->searchable()
                            ->required(),
                        Translation::text('text_3','Text 3 ',required: true)->columnSpanFull(),

                    ])
                    ->columns(3)
                    ->columnSpanFull(),


                /*
                |--------------------------------------------------------------------------
                | CTA Features 4 - 6
                |--------------------------------------------------------------------------
                */

                Section::make('CTA Features')
                    ->description('Items displayed inside the CTA.')
                    ->schema([

                        // Item 4

                        Select::make('icon_4')
                            ->label('Icon 4')
                            ->options(self::iconOptions())
                            ->searchable()
                            ->required(),
                        Translation::text('text_4','Text 4 ',required: true)->columnSpanFull(),


                        // Item 5

                        Select::make('icon_5')
                            ->label('Icon 5')
                            ->options(self::iconOptions())
                            ->searchable()
                            ->required(),
                        Translation::text('text_5','Text 5 ',required: true)->columnSpanFull(),

                        // Item 6

                        Select::make('icon_6')
                            ->label('Icon 6')
                            ->options(self::iconOptions())
                            ->searchable()
                            ->required(),
                        Translation::text('text_6','Text 6 ',required: true)->columnSpanFull(),


                    ])
                    ->columns(3)
                    ->columnSpanFull(),


                /*
                |--------------------------------------------------------------------------
                | Status
                |--------------------------------------------------------------------------
                */

                Section::make('Status')
                    ->schema([

                        Toggle::make('is_active')
                            ->label('Active')
                            ->default(true),

                    ])
                    ->columnSpanFull(),

            ]);
    }


    private static function iconOptions(): array
    {
        return [
            'circle-check' => 'Circle Check',
            'check' => 'Check',
            'badge-check' => 'Badge Check',

            'clock' => 'Clock',
            'clock-3' => 'Clock 3',
            'calendar' => 'Calendar',

            'map-pin' => 'Map Pin',
            'map' => 'Map',
            'globe' => 'Globe',

            'trending-up' => 'Trending Up',
            'chart-no-axes-column-increasing' => 'Growth Chart',
            'chart-column-increasing' => 'Column Chart',
            'chart-line' => 'Line Chart',

            'target' => 'Target',

            'award' => 'Award',
            'trophy' => 'Trophy',
            'medal' => 'Medal',

            'shield-check' => 'Shield Check',
            'shield' => 'Shield',

            'search' => 'Search',

            'briefcase-business' => 'Business',

            'rocket' => 'Rocket',
            'zap' => 'Zap',

            'star' => 'Star',

            'users' => 'Users',
            'user-check' => 'User Check',

            'lightbulb' => 'Lightbulb',
            'sparkles' => 'Sparkles',
        ];
    }
}
