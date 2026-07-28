<?php

namespace App\Filament\Resources\HomeSections\Schemas;

use App\Enums\HomeSectionKey;
use App\Support\Translation\Translation;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class HomeSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('section_key')
                    ->options(HomeSectionKey::options())
                    ->required()
                    ->unique(ignoreRecord: true),
                Translation::text('eyebrow','Eyebrow')->columnSpanFull(),
                Translation::text('title','Title',required: true)->columnSpanFull(),
                Translation::text('subtitle','Subtitle')->columnSpanFull(),
                Translation::text('badge','Badge')->columnSpanFull(),
                Translation::text('button_text','Button Text')->columnSpanFull(),
                TextInput::make('button_url'),


            ]);
    }
}
