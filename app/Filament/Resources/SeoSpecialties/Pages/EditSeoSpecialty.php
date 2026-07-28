<?php

namespace App\Filament\Resources\SeoSpecialties\Pages;

use App\Filament\Resources\SeoSpecialties\SeoSpecialtyResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSeoSpecialty extends EditRecord
{
    protected static string $resource = SeoSpecialtyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
