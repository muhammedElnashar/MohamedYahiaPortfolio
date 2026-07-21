<?php

namespace App\Filament\Resources\SeoTools\Pages;

use App\Filament\Resources\SeoTools\SeoToolResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSeoTool extends EditRecord
{
    protected static string $resource = SeoToolResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
