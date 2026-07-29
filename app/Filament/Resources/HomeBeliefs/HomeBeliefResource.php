<?php

namespace App\Filament\Resources\HomeBeliefs;

use App\Filament\Resources\HomeBeliefs\Pages\CreateHomeBelief;
use App\Filament\Resources\HomeBeliefs\Pages\EditHomeBelief;
use App\Filament\Resources\HomeBeliefs\Pages\ListHomeBeliefs;
use App\Filament\Resources\HomeBeliefs\Schemas\HomeBeliefForm;
use App\Filament\Resources\HomeBeliefs\Tables\HomeBeliefsTable;
use App\Models\HomeBelief;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HomeBeliefResource extends Resource
{
    protected static ?string $model = HomeBelief::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedLightBulb;

    protected static ?string $recordTitleAttribute = 'number';
    protected static string|\UnitEnum|null $navigationGroup = 'Home Page';

    protected static ?int $navigationSort = 7;
    public static function form(Schema $schema): Schema
    {
        return HomeBeliefForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HomeBeliefsTable::configure($table);
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
            'index' => ListHomeBeliefs::route('/'),
            'create' => CreateHomeBelief::route('/create'),
            'edit' => EditHomeBelief::route('/{record}/edit'),
        ];
    }
}
