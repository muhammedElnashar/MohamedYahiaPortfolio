<?php

namespace App\Filament\Resources\Skills\Schemas;

use App\Models\Skill;
use App\Support\Filament\SortOrder;
use App\Support\Translation\Translation;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;

class SkillForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Basic Information')
                    ->schema([
                        Translation::text('title', 'Title', required: true),


                        TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true),

                        TextInput::make('icon'),

                        Toggle::make('has_page')
                            ->live(),



                       SortOrder::make(Skill::class)
                    ]),
                Section::make('Seo Data')

                    ->visible(
                        fn (Get $get): bool =>
                        (bool) $get('has_page')
                    )
                    ->schema([
                        Group::make()
                            ->relationship('page')
                            ->schema([
                                Translation::text('meta_title', 'Meta Title',required: true)->columnSpanFull(),
                                Translation::textarea('meta_description', 'Meta Description',required: true)->columnSpanFull(),
                                TextInput::make('canonical_url')->url()->required(),


                            ]),
                    ]),
                Section::make('Page Data')

                    ->visible(
                        fn (Get $get): bool =>
                        (bool) $get('has_page')
                    )
                    ->schema([
                        Group::make()
                            ->relationship('page')
            ->schema([

                Translation::text('hero_title', 'Hero Title',required: true)->columnSpanFull(),
                Translation::textarea('hero_description', 'Hero Description')->columnSpanFull(),
                Translation::text('feature_title', 'Feature Title',required: true)->columnSpanFull(),
                Translation::text('metric_title', 'Metric Title',required: true)->columnSpanFull(),
                Translation::text('cta_title', 'CTA Title',required: true)->columnSpanFull(),
                Translation::textarea('cta_description', 'CTA Description',required: true)->columnSpanFull(),

                Translation::text('cta_button_text', 'CTA Button Text',required: true)->columnSpanFull(),

                TextInput::make('cta_button_url'),

            ]),
                    ])->columnSpanFull(),



            ]);
    }
}
