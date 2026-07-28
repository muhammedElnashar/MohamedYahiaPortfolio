<?php

namespace App\Filament\Resources\CaseStudySectionSettings\Pages;

use App\Filament\Resources\CaseStudySectionSettings\CaseStudySectionSettingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCaseStudySectionSettings extends ListRecords
{
    protected static string $resource = CaseStudySectionSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
