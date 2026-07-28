<?php

namespace App\Filament\Resources\CertificateSections;

use App\Filament\Resources\CertificateSections\Pages\CreateCertificateSection;
use App\Filament\Resources\CertificateSections\Pages\EditCertificateSection;
use App\Filament\Resources\CertificateSections\Pages\ListCertificateSections;
use App\Filament\Resources\CertificateSections\RelationManagers\CertificatesRelationManager;
use App\Filament\Resources\CertificateSections\RelationManagers\HighlightRelationManager;
use App\Filament\Resources\CertificateSections\RelationManagers\StatsRelationManager;
use App\Filament\Resources\CertificateSections\Schemas\CertificateSectionForm;
use App\Filament\Resources\CertificateSections\Tables\CertificateSectionsTable;
use App\Models\CertificateSection;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CertificateSectionResource extends Resource
{
    protected static ?string $model = CertificateSection::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Schema $schema): Schema
    {
        return CertificateSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CertificateSectionsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            StatsRelationManager::class,
            HighlightRelationManager::class,
            CertificatesRelationManager::class,
            ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCertificateSections::route('/'),
            'create' => CreateCertificateSection::route('/create'),
            'edit' => EditCertificateSection::route('/{record}/edit'),
        ];
    }
}
