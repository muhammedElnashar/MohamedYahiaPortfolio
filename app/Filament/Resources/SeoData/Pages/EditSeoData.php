<?php

namespace App\Filament\Resources\SeoData\Pages;

use App\Filament\Resources\SeoData\SeoDataResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSeoData extends EditRecord
{
    protected static string $resource = SeoDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
