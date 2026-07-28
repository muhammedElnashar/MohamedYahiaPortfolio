<?php

namespace App\Filament\Resources\CaseStudySectionSettings\Pages;

use App\Filament\Resources\CaseStudySectionSettings\CaseStudySectionSettingResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCaseStudySectionSetting extends EditRecord
{
    protected static string $resource = CaseStudySectionSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
