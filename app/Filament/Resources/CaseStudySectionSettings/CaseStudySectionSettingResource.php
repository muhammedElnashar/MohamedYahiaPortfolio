<?php

namespace App\Filament\Resources\CaseStudySectionSettings;

use App\Filament\Resources\CaseStudySectionSettings\Pages\CreateCaseStudySectionSetting;
use App\Filament\Resources\CaseStudySectionSettings\Pages\EditCaseStudySectionSetting;
use App\Filament\Resources\CaseStudySectionSettings\Pages\ListCaseStudySectionSettings;
use App\Filament\Resources\CaseStudySectionSettings\Schemas\CaseStudySectionSettingForm;
use App\Filament\Resources\CaseStudySectionSettings\Tables\CaseStudySectionSettingsTable;
use App\Models\CaseStudySectionSetting;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CaseStudySectionSettingResource extends Resource
{
    protected static ?string $model = CaseStudySectionSetting::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';
    protected static string|\UnitEnum|null $navigationGroup = 'Case Studies';

    protected static ?int $navigationSort = 2;
    public static function form(Schema $schema): Schema
    {
        return CaseStudySectionSettingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CaseStudySectionSettingsTable::configure($table);
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
            'index' => ListCaseStudySectionSettings::route('/'),
            'create' => CreateCaseStudySectionSetting::route('/create'),
            'edit' => EditCaseStudySectionSetting::route('/{record}/edit'),
        ];
    }
}
