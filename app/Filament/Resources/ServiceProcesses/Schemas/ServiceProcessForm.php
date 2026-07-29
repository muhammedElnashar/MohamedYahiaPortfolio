<?php

namespace App\Filament\Resources\ServiceProcesses\Schemas;

use App\Models\ServiceProcessStep;
use App\Support\Filament\SortOrder;
use App\Support\Translation\Translation;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ServiceProcessForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Process Step')
                    ->schema([
                        Translation::text('title','Title',required: true)->columnSpanFull(),


                    SortOrder::make(ServiceProcessStep::class),

                        Toggle::make('is_active')
                            ->label('Active')
                            ->default(true),

                    ])
                    ->columns(2)
                    ->columnSpanFull(),

            ]);
    }
}
