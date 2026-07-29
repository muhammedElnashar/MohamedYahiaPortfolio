<?php

namespace App\Filament\Resources\ClientMessages;

use App\Filament\Resources\ClientMessages\Pages\CreateClientMessage;
use App\Filament\Resources\ClientMessages\Pages\EditClientMessage;
use App\Filament\Resources\ClientMessages\Pages\ListClientMessages;
use App\Filament\Resources\ClientMessages\Schemas\ClientMessageForm;
use App\Filament\Resources\ClientMessages\Tables\ClientMessagesTable;
use App\Models\ClientMessage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ClientMessageResource extends Resource
{
    protected static ?string $model = ClientMessage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChatBubbleLeftRight;

    protected static ?string $recordTitleAttribute = 'client_name';
    protected static string|\UnitEnum|null $navigationGroup = 'Reviews';

    protected static ?int $navigationSort = 1;
    public static function form(Schema $schema): Schema
    {
        return ClientMessageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ClientMessagesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListClientMessages::route('/'),
            'create' => CreateClientMessage::route('/create'),
            'edit' => EditClientMessage::route('/{record}/edit'),
        ];
    }
}
