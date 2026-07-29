<?php

namespace App\Filament\Resources\ServiceProcesses;

use App\Filament\Resources\ServiceProcesses\Pages\CreateServiceProcess;
use App\Filament\Resources\ServiceProcesses\Pages\EditServiceProcess;
use App\Filament\Resources\ServiceProcesses\Pages\ListServiceProcesses;
use App\Filament\Resources\ServiceProcesses\Schemas\ServiceProcessForm;
use App\Filament\Resources\ServiceProcesses\Tables\ServiceProcessesTable;
use App\Models\ServiceProcess;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ServiceProcessResource extends Resource
{
    protected static ?string $model = ServiceProcess::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';
    protected static string|\UnitEnum|null $navigationGroup = 'Services';

    protected static ?int $navigationSort = 4;
    public static function form(Schema $schema): Schema
    {
        return ServiceProcessForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ServiceProcessesTable::configure($table);
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
            'index' => ListServiceProcesses::route('/'),
            'create' => CreateServiceProcess::route('/create'),
            'edit' => EditServiceProcess::route('/{record}/edit'),
        ];
    }
}
