<?php

namespace App\Filament\Resources\SeoTools\Schemas;

use App\Support\Translation\Translation;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SeoToolForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Seo Data')->columnSpanFull()
                ->schema([
                    Translation::text('title','Title',required: true)->columnSpanFull(),

                ])
            ]);
    }
}
