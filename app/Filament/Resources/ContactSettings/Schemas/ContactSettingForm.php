<?php

namespace App\Filament\Resources\ContactSettings\Schemas;

use App\Support\Translation\Translation;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ContactSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Personal Information')
                    ->description('Your personal information displayed in contact sections.')
                    ->columnSpanFull()
                    ->schema([
                        Translation::text('name','Name',required: true)->columnSpanFull(),
                        Translation::text('job_title','Job Title',required: true)->columnSpanFull(),
                        Translation::textarea('description','Description')->columnSpanFull(),

                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->maxLength(255),
                    ]),

                Section::make('Contact Information')
                    ->columnSpanFull()
                    ->schema([

                        TextInput::make('whatsapp')
                            ->label('WhatsApp Number')
                            ->placeholder('201123269452')
                            ->helperText('Use international format without + or spaces.')
                            ->tel(),
                        TextInput::make('linkedin_url')
                            ->label('LinkedIn URL')
                            ->url()
                            ->maxLength(500),
                        Translation::text('linkedin_label','LinkedIn Label',required: true)->columnSpanFull(),

                        TextInput::make('mostaql_url')
                            ->label('Mostaql URL')
                            ->url()
                            ->maxLength(500),
                        Translation::text('mostaql_label','Mostaql Label',required: true)->columnSpanFull(),
                        Translation::text('location','Location ',required: true)->columnSpanFull(),
                        Translation::text('consultation_title','Title ',required: true)->columnSpanFull(),
                        Translation::text('consultation_description','Description ',required: true)->columnSpanFull(),

                    ]),




            ]);
    }
}
