<?php

namespace App\Filament\Resources\ProfilePages\Schemas;

use App\Support\Translation\Translation;
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
                        Translation::text('hero_badge','Badge')->columnSpanFull(),
                        Translation::text('hero_title','Title')->columnSpanFull(),
                        Translation::text('hero_highlight','Highlight')->columnSpanFull(),
                        Translation::textarea('hero_description','Description')->columnSpanFull(),

                    ])
                    ->columns(2)
                    ->columnSpanFull(),

                Section::make('Story')
                    ->schema([
                        Translation::text('story_title','Story Title')->columnSpanFull(),
                        Translation::textarea('story_content','Story Content')->columnSpanFull(),


                    ])
                    ->columns(2)
                    ->columnSpanFull(),

                Section::make('Section Titles')
                    ->schema([
                        Translation::text('career_title','Career Title')->columnSpanFull()->columnSpanFull(),
                        Translation::text('education_title','Education Title')->columnSpanFull()->columnSpanFull(),
                        Translation::text('methodology_title','Methodology Title')->columnSpanFull()->columnSpanFull(),
                        Translation::text('skills_title','Skills Title')->columnSpanFull()->columnSpanFull(),
                    ])
                    ->columns(2)
                    ->columnSpanFull(),

                Section::make('CTA')
                    ->schema([
                            Translation::text('cta_title','CTA Title')->columnSpanFull(),
                            Translation::textarea('cta_description','CTA Description')->columnSpanFull(),
                        Translation::text('cta_button','CTA Button')->columnSpanFull(),

                        TextInput::make('cta_url')
                            ->label('CTA URL')
                            ->url(),

                    ])
                    ->columns(2)
                    ->columnSpanFull(),

                Section::make('SEO')
                    ->schema([
                        Translation::text('meta_title', 'Meta Title',required: true)->columnSpanFull(),
                        Translation::textarea('meta_description', 'Meta Description',required: true)->columnSpanFull(),
                        TextInput::make('canonical_url')->url()->required(),

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
