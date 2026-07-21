<?php

namespace App\Filament\Resources\HeroSkills\Pages;

use App\Filament\Resources\HeroSkills\HeroSkillResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHeroSkills extends ListRecords
{
    protected static string $resource = HeroSkillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
