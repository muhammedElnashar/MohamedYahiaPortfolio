<?php

namespace App\Filament\Resources\SeoSpecialties\Schemas;

use App\Support\Translation\Translation;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SeoSpecialtyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                /*
                |--------------------------------------------------------------------------
                | Basic Information
                |--------------------------------------------------------------------------
                */

                Section::make('Basic Information')
                    ->description('Main information for the specialty page.')
                    ->schema([
                        Translation::text('name', 'Name',required: true)->columnSpanFull(),
                        Translation::textarea('card_description', 'Card Description ')->columnSpanFull(),

                        TextInput::make('name.ar')
                            ->label('Arabic Name')
                            ->required(),

                        TextInput::make('name.en')
                            ->label('English Name')
                            ->required(),
                        TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255),

                        TextInput::make('sort_order')
                            ->label('Sort Order')
                            ->numeric()
                            ->default(0)
                            ->required(),

                        Toggle::make('is_active')
                            ->label('Active')
                            ->default(true),
                    ])
                    ->columns(2),

                /*
                |--------------------------------------------------------------------------
                | Hero
                |--------------------------------------------------------------------------
                */

                Section::make('Hero Section')
                    ->schema([
                        Translation::text('badge', 'Badge',required: true)->columnSpanFull(),
                        Translation::text('title', 'Title',required: true)->columnSpanFull(),
                        Translation::textarea('description', 'Description')->columnSpanFull(),
                    ])
                    ->columns(2),

                /*
                |--------------------------------------------------------------------------
                | Challenges
                |--------------------------------------------------------------------------
                */

                Section::make('Challenges Section')
                    ->schema([
                        Translation::text('challenges_badge', 'Badge',required: true)->columnSpanFull(),
                        Translation::text('challenges_title', 'Title',required: true)->columnSpanFull(),
                    ])
                    ->columns(2)
                    ->collapsed(),

                /*
                |--------------------------------------------------------------------------
                | Services
                |--------------------------------------------------------------------------
                */

                Section::make('Services Section')
                    ->schema([
                        Translation::text('services_badge', 'Badge',required: true)->columnSpanFull(),
                        Translation::text('services_title', 'Title',required: true)->columnSpanFull(),
                    ])
                    ->columns(2)
                    ->collapsed(),

                /*
                |--------------------------------------------------------------------------
                | Process
                |--------------------------------------------------------------------------
                */

                Section::make('Process Section')
                    ->schema([
                        Translation::text('process_badge', 'Badge',required: true)->columnSpanFull(),
                        Translation::text('process_title', 'Title',required: true)->columnSpanFull(),

                    ])
                    ->columns(2)
                    ->collapsed(),

                /*
                |--------------------------------------------------------------------------
                | Advantages
                |--------------------------------------------------------------------------
                */

                Section::make('Advantages / Why Me Section')
                    ->schema([
                        Translation::text('advantages_badge', 'Badge',required: true)->columnSpanFull(),
                        Translation::text('advantages_title', 'Title',required: true)->columnSpanFull(),
                    ])
                    ->columns(2)
                    ->collapsed(),

                /*
                |--------------------------------------------------------------------------
                | Methodology
                |--------------------------------------------------------------------------
                */

                Section::make('Methodology Section')
                    ->schema([
                        Translation::text('methodology_badge', 'Badge',required: true)->columnSpanFull(),
                        Translation::text('methodology_title', 'Title',required: true)->columnSpanFull(),
                        Translation::text('methodology_description', 'Description')->columnSpanFull(),
                    ])
                    ->columns(2)
                    ->collapsed(),

                /*
                |--------------------------------------------------------------------------
                | Statistics
                |--------------------------------------------------------------------------
                */

                Section::make('Statistics Section')
                    ->schema([
                        Translation::text('statistics_badge', 'Badge',required: true)->columnSpanFull(),
                        Translation::text('statistics_title', 'Title',required: true)->columnSpanFull(),
                        Translation::text('statistics_description', 'Description')->columnSpanFull(),
                    ])
                    ->columns(2)
                    ->collapsed(),

                /*
                |--------------------------------------------------------------------------
                | Comparison
                |--------------------------------------------------------------------------
                */

                Section::make('Comparison Section')
                    ->schema([
                        Translation::text('comparison_badge', 'Badge',required: true)->columnSpanFull(),
                        Translation::text('comparison_title', 'Title',required: true)->columnSpanFull(),
                        Translation::text('comparison_competitor_label', 'label',required: true)->columnSpanFull(),

                    ])
                    ->columns(2)
                    ->collapsed(),

                /*
                |--------------------------------------------------------------------------
                | FAQ
                |--------------------------------------------------------------------------
                */

                Section::make('FAQ Section')
                    ->schema([
                        Translation::text('faq_badge', 'Badge',required: true)->columnSpanFull(),
                        Translation::text('faq_title', 'Title',required: true)->columnSpanFull(),
                    ])
                    ->columns(2)
                    ->collapsed(),

                /*
                |--------------------------------------------------------------------------
                | Philosophy
                |--------------------------------------------------------------------------
                */

                Section::make('Philosophy Section')
                    ->schema([
                        Translation::text('philosophy_badge', 'Badge',required: true)->columnSpanFull(),
                        Translation::text('philosophy_title', 'Title',required: true)->columnSpanFull(),
                        Translation::textarea('philosophy_quote', 'Quote')->columnSpanFull(),

                    ])
                    ->columns(2)
                    ->collapsed(),

                /*
                |--------------------------------------------------------------------------
                | CTA
                |--------------------------------------------------------------------------
                */

                Section::make('CTA Section')
                    ->schema([
                        Translation::text('cta_title', 'CTA Title',required: true)->columnSpanFull(),
                        Translation::textarea('cta_description', 'CTA Description')->columnSpanFull(),
                        Translation::text('cta_button', 'Button Text',required: true)->columnSpanFull(),

                        TextInput::make('cta_url')
                            ->label('CTA URL')
                            ->placeholder('/contact'),
                    ])
                    ->columns(2)
                    ->collapsed(),

                /*
                |--------------------------------------------------------------------------
                | SEO
                |--------------------------------------------------------------------------
                */

                Section::make('SEO')
                    ->description('Search engine metadata.')
                    ->schema([
                        Translation::text('meta_title', 'Meta Title')->columnSpanFull(),
                        Translation::textarea('meta_description', 'Meta Description')->columnSpanFull(),


                    ])
                    ->columns(2)
                    ->collapsed(),
            ]);
    }
}
