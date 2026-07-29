<?php

namespace App\Filament\Resources\ProfilePages\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProfilePageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Hero')
                    ->schema([

                        TextInput::make('hero_badge.ar')
                            ->label('Badge Arabic'),

                        TextInput::make('hero_badge.en')
                            ->label('Badge English'),

                        TextInput::make('hero_title.ar')
                            ->label('Title Arabic')
                            ->required(),

                        TextInput::make('hero_title.en')
                            ->label('Title English')
                            ->required(),

                        TextInput::make('hero_highlight.ar')
                            ->label('Highlight Arabic'),

                        TextInput::make('hero_highlight.en')
                            ->label('Highlight English'),

                        Textarea::make('hero_description.ar')
                            ->label('Description Arabic')
                            ->rows(4),

                        Textarea::make('hero_description.en')
                            ->label('Description English')
                            ->rows(4),

                    ])
                    ->columns(2)
                    ->columnSpanFull(),

                Section::make('Story')
                    ->schema([

                        TextInput::make('story_title.ar')
                            ->label('Story Title Arabic'),

                        TextInput::make('story_title.en')
                            ->label('Story Title English'),

                        Textarea::make('story_content.ar')
                            ->label('Story Arabic')
                            ->rows(10),

                        Textarea::make('story_content.en')
                            ->label('Story English')
                            ->rows(10),

                    ])
                    ->columns(2)
                    ->columnSpanFull(),

                Section::make('Section Titles')
                    ->schema([

                        TextInput::make('career_title.ar')
                            ->label('Career Title Arabic'),

                        TextInput::make('career_title.en')
                            ->label('Career Title English'),

                        TextInput::make('education_title.ar')
                            ->label('Education Title Arabic'),

                        TextInput::make('education_title.en')
                            ->label('Education Title English'),

                        TextInput::make('methodology_title.ar')
                            ->label('Methodology Title Arabic'),

                        TextInput::make('methodology_title.en')
                            ->label('Methodology Title English'),

                        TextInput::make('skills_title.ar')
                            ->label('Skills Title Arabic'),

                        TextInput::make('skills_title.en')
                            ->label('Skills Title English'),

                    ])
                    ->columns(2)
                    ->columnSpanFull(),

                Section::make('CTA')
                    ->schema([

                        TextInput::make('cta_title.ar')
                            ->label('CTA Title Arabic'),

                        TextInput::make('cta_title.en')
                            ->label('CTA Title English'),

                        Textarea::make('cta_description.ar')
                            ->label('CTA Description Arabic')
                            ->rows(3),

                        Textarea::make('cta_description.en')
                            ->label('CTA Description English')
                            ->rows(3),

                        TextInput::make('cta_button.ar')
                            ->label('Button Arabic'),

                        TextInput::make('cta_button.en')
                            ->label('Button English'),

                        TextInput::make('cta_url')
                            ->label('CTA URL')
                            ->url(),

                    ])
                    ->columns(2)
                    ->columnSpanFull(),

                Section::make('SEO')
                    ->schema([

                        TextInput::make('meta_title.ar')
                            ->label('Meta Title Arabic')
                            ->maxLength(255),

                        TextInput::make('meta_title.en')
                            ->label('Meta Title English')
                            ->maxLength(255),

                        Textarea::make('meta_description.ar')
                            ->label('Meta Description Arabic')
                            ->rows(3),

                        Textarea::make('meta_description.en')
                            ->label('Meta Description English')
                            ->rows(3),

                    ])
                    ->columns(2)
                    ->columnSpanFull(),

                Section::make('Settings')
                    ->schema([

                        Toggle::make('is_active')
                            ->label('Active')
                            ->default(true),

                    ])
                    ->columnSpanFull(),

            ]);
    }
}
