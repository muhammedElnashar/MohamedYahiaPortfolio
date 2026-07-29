<?php

namespace App\Filament\Resources\ClientMessages\Schemas;

use App\Models\ClientMessage;
use App\Support\Filament\SortOrder;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ClientMessageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Client')
                    ->schema([

                        TextInput::make('client_name')
                            ->label('Client Name')
                            ->required(),

                        TextInput::make('client_label')
                            ->label('English Label'),



                    ])
                    ->columns(2 ),
                Section::make('Settings')
                    ->schema([

                        SortOrder::make(ClientMessage::class),

                        Toggle::make('is_active')
                            ->default(true),

                    ])
                    ->columns(2),
                Section::make('Message')
                    ->schema([

                        FileUpload::make('image')
                            ->label('Conversation Screenshot')
                            ->image()
                            ->directory('client-messages')
                            ->imageEditor()
                            ->columnSpanFull(),

                        Textarea::make('message')
                            ->label('Text Message')
                            ->helperText(
                                'Use this when the card contains text instead of a screenshot.'
                            )
                            ->rows(5)
                            ->columnSpanFull(),
                        Textarea::make('my_reply')
                            ->label('Text Replay')
                            ->helperText(
                                'Use this when the card contains text instead of a screenshot.'
                            )
                            ->rows(5)
                            ->columnSpanFull(),

                    ])->columnSpanFull(),



            ]);
    }
}
