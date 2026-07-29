<?php

namespace App\Filament\Resources\SeoTools;

use App\Filament\Resources\SeoTools\Pages\CreateSeoTool;
use App\Filament\Resources\SeoTools\Pages\EditSeoTool;
use App\Filament\Resources\SeoTools\Pages\ListSeoTools;
use App\Filament\Resources\SeoTools\Schemas\SeoToolForm;
use App\Filament\Resources\SeoTools\Tables\SeoToolsTable;
use App\Models\SeoTool;
use App\Models\SeoTools;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SeoToolResource extends Resource
{
    protected static ?string $model = SeoTools::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';
    protected static string|\UnitEnum|null $navigationGroup = 'Home Page';

    protected static ?int $navigationSort = 8;
    public static function form(Schema $schema): Schema
    {
        return SeoToolForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SeoToolsTable::configure($table);
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
            'index' => ListSeoTools::route('/'),
        ];
    }
}
