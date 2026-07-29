<?php

namespace App\Filament\Resources\HomeFactItems;

use App\Filament\Resources\HomeFactItems\Pages\CreateHomeFactItem;
use App\Filament\Resources\HomeFactItems\Pages\EditHomeFactItem;
use App\Filament\Resources\HomeFactItems\Pages\ListHomeFactItems;
use App\Filament\Resources\HomeFactItems\Schemas\HomeFactItemForm;
use App\Filament\Resources\HomeFactItems\Tables\HomeFactItemsTable;
use App\Models\HomeFactItem;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HomeFactItemResource extends Resource
{
    protected static ?string $model = HomeFactItem::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';
    protected static string|\UnitEnum|null $navigationGroup = 'Home Page';

    protected static ?int $navigationSort = 3;
    public static function form(Schema $schema): Schema
    {
        return HomeFactItemForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HomeFactItemsTable::configure($table);
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
            'index' => ListHomeFactItems::route('/'),
            'create' => CreateHomeFactItem::route('/create'),
            'edit' => EditHomeFactItem::route('/{record}/edit'),
        ];
    }
}
