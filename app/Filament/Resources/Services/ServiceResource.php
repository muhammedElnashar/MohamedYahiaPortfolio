<?php

namespace App\Filament\Resources\Services;

use App\Filament\Resources\Services\Pages\CreateService;
use App\Filament\Resources\Services\Pages\EditService;
use App\Filament\Resources\Services\Pages\ListServices;
use App\Filament\Resources\Services\RelationManagers\BenefitsRelationManager;
use App\Filament\Resources\Services\RelationManagers\CardSectionsRelationManager;
use App\Filament\Resources\Services\RelationManagers\DeliverablesRelationManager;
use App\Filament\Resources\Services\RelationManagers\KeywordsRelationManager;
use App\Filament\Resources\Services\RelationManagers\PainPointsRelationManager;
use App\Filament\Resources\Services\RelationManagers\ProcessSectionsRelationManager;
use App\Filament\Resources\Services\RelationManagers\StatisticsSectionsRelationManager;
use App\Filament\Resources\Services\RelationManagers\StatsRelationManager;
use App\Filament\Resources\Services\Schemas\ServiceForm;
use App\Filament\Resources\Services\Tables\ServicesTable;
use App\Models\Service;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';
    protected static string|\UnitEnum|null $navigationGroup = 'Services';

    protected static ?int $navigationSort = 1;
    public static function form(Schema $schema): Schema
    {
        return ServiceForm::configure($schema);
    }
    public static function getRelations(): array
    {
        return [
            CardSectionsRelationManager::class,
            StatisticsSectionsRelationManager::class,
            PainPointsRelationManager::class,
            BenefitsRelationManager::class,
            DeliverablesRelationManager::class,
            ProcessSectionsRelationManager::class,
            KeywordsRelationManager::class,

        ];
    }
    public static function table(Table $table): Table
    {
        return ServicesTable::configure($table);
    }



    public static function getPages(): array
    {
        return [
            'index' => ListServices::route('/'),
            'create' => CreateService::route('/create'),
            'edit' => EditService::route('/{record}/edit'),
        ];
    }
}
