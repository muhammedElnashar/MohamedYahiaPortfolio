<?php

namespace App\Filament\Resources\HeroSkills;

use App\Filament\Resources\HeroSkills\Pages\CreateHeroSkill;
use App\Filament\Resources\HeroSkills\Pages\EditHeroSkill;
use App\Filament\Resources\HeroSkills\Pages\ListHeroSkills;
use App\Filament\Resources\HeroSkills\Schemas\HeroSkillForm;
use App\Filament\Resources\HeroSkills\Tables\HeroSkillsTable;
use App\Models\HeroSkill;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HeroSkillResource extends Resource
{
    protected static ?string $model = HeroSkill::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return HeroSkillForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HeroSkillsTable::configure($table);
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
            'index' => ListHeroSkills::route('/'),
            'create' => CreateHeroSkill::route('/create'),
            'edit' => EditHeroSkill::route('/{record}/edit'),
        ];
    }
}
