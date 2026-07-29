<?php

namespace App\Filament\Resources\CertificateSections\Schemas;

use App\Models\CertificateSection;
use App\Support\Filament\SortOrder;
use App\Support\Translation\Translation;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CertificateSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('LinkedIn & Gallery Settings')
                    ->description('Settings for the certificates section.')
                    ->schema([
                        Translation::text('linkedin_button_text', 'LinkedIn Button',required: true)->columnSpanFull(),



                        Translation::textarea('gallery_hint', 'English Gallery',required: true)->columnSpanFull(),


                        TextInput::make('linkedin_url')
                            ->label('LinkedIn URL')
                            ->url()
                            ->maxLength(2048),
                        SortOrder::make(CertificateSection::class),

                        Toggle::make('is_active')
                            ->label('Active')
                            ->default(true),

                    ])
                    ->columnSpanFull(),

            ]);
    }
}
