<?php

namespace App\Filament\Resources\SeoPages\Schemas;

use App\Enums\PageListEnum;
use App\Filament\Forms\Components\SeoForm;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SeoPageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('General')
                    ->schema([

                        Select::make('key')
                            ->required()
                            ->disabledOn('edit')
                            ->options(PageListEnum::class)

                    ]),

                SeoForm::make(false),
            ]);
    }
}
