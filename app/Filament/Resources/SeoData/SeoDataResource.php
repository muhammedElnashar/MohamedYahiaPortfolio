<?php

namespace App\Filament\Resources\SeoData;

use App\Filament\Resources\SeoData\Pages\CreateSeoData;
use App\Filament\Resources\SeoData\Pages\EditSeoData;
use App\Filament\Resources\SeoData\Pages\ListSeoData;
use App\Filament\Resources\SeoData\Schemas\SeoDataForm;
use App\Filament\Resources\SeoData\Tables\SeoDataTable;
use App\Models\SeoData;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SeoDataResource extends Resource
{
    protected static ?string $model = SeoData::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return SeoDataForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SeoDataTable::configure($table);
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
            'index' => ListSeoData::route('/'),
            'create' => CreateSeoData::route('/create'),
            'edit' => EditSeoData::route('/{record}/edit'),
        ];
    }
}
