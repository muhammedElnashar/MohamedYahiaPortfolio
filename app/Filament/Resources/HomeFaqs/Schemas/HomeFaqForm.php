<?php

namespace App\Filament\Resources\HomeFaqs\Schemas;

use App\Models\HomeFaq;
use App\Support\Filament\SortOrder;
use App\Support\Translation\Translation;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class HomeFaqForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Question')
                    ->schema([
                        Translation::textarea('question', 'Question',required: true)->columnSpanFull(),
                        Translation::textarea('answer', 'answer',required: true)->columnSpanFull(),
                        Grid::make(2)
            ->schema([
                SortOrder::make(HomeFaq::class),

                Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),
            ])


                    ])
                    ->columnSpanFull(),


            ]);
    }
}
