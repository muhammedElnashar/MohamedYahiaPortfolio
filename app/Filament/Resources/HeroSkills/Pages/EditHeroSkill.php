<?php

namespace App\Filament\Resources\HeroSkills\Pages;

use App\Filament\Resources\HeroSkills\HeroSkillResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHeroSkill extends EditRecord
{
    protected static string $resource = HeroSkillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
