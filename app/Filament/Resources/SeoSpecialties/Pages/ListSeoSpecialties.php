<?php

namespace App\Filament\Resources\SeoSpecialties\Pages;

use App\Filament\Resources\SeoSpecialties\SeoSpecialtyResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSeoSpecialties extends ListRecords
{
    protected static string $resource = SeoSpecialtyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
