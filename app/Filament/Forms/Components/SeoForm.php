<?php

namespace App\Filament\Forms\Components;


use App\Support\Translation\Translation;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;

class SeoForm
{
    public static function make(bool $withRelationship = true): Section
    {
        $section = Section::make('SEO');
        if ($withRelationship) {
            $section->relationship('seo');
        }
        return $section
            ->schema([

                Tabs::make('SeoTabs')
                    ->tabs([

                        Tabs\Tab::make('Meta')
                            ->schema([

                                Translation::text('meta_title', 'Meta Title',required: true)->columnSpanFull(),
                                Translation::textarea('meta_description', 'Meta Description',required: true)->columnSpanFull(),
                                Translation::textarea('meta_keywords', 'Meta Keywords')->columnSpanFull(),
                                Translation::text('focus_keyword', 'Focus Keyword')->columnSpanFull(),

                                TextInput::make('canonical_url')
                                    ->label('Canonical URL')
                                    ->url(),

                            ]),

                        Tabs\Tab::make('Open Graph')
                            ->schema([

                                Translation::text('og_title', 'Open Graph Title')->columnSpanFull(),
                                Translation::textarea('og_description', 'Open Graph Description')->columnSpanFull(),

                                FileUpload::make('og_image')
                                    ->directory('seo'),

                            ]),

                        Tabs\Tab::make('Twitter')
                            ->schema([

                                Translation::text('twitter_title', 'Twitter Title')->columnSpanFull(),
                                Translation::textarea('twitter_description', 'Twitter Description')->columnSpanFull(),

                                FileUpload::make('twitter_image')
                                    ->directory('seo'),

                            ]),

                        Tabs\Tab::make('Advanced')
                            ->schema([

                                Select::make('robots')
                                    ->options([
                                        'index,follow' => 'Index, Follow',
                                        'index,nofollow' => 'Index, No Follow',
                                        'noindex,follow' => 'No Index, Follow',
                                        'noindex,nofollow' => 'No Index, No Follow',
                                    ])
                                    ->default('index,follow'),

                                Toggle::make('is_in_sitemap'),

                            ]),

                    ])
                    ->columnSpanFull(),

            ])
            ->columnSpanFull();
    }
}
