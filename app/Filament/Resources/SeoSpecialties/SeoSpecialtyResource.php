<?php

namespace App\Filament\Resources\SeoSpecialties;

use App\Filament\Resources\SeoSpecialties\Pages\CreateSeoSpecialty;
use App\Filament\Resources\SeoSpecialties\Pages\EditSeoSpecialty;
use App\Filament\Resources\SeoSpecialties\Pages\ListSeoSpecialties;
use App\Filament\Resources\SeoSpecialties\Schemas\SeoSpecialtyForm;
use App\Filament\Resources\SeoSpecialties\Tables\SeoSpecialtiesTable;
use App\Models\SeoSpecialty;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SeoSpecialtyResource extends Resource
{
    protected static ?string $model = SeoSpecialty::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return SeoSpecialtyForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SeoSpecialtiesTable::configure($table);
    }
    public static function getRelations(): array
    {
        return [
            RelationManagers\HeroStatsRelationManager::class,
            RelationManagers\ChallengesRelationManager::class,
            RelationManagers\ServicesRelationManager::class,
            RelationManagers\ProcessesRelationManager::class,
            RelationManagers\AdvantagesRelationManager::class,
            RelationManagers\MethodologiesRelationManager::class,
            RelationManagers\StatisticsRelationManager::class,
            RelationManagers\ComparisonsRelationManager::class,
            RelationManagers\FaqsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSeoSpecialties::route('/'),
            'create' => CreateSeoSpecialty::route('/create'),
            'edit' => EditSeoSpecialty::route('/{record}/edit'),
        ];
    }
}
