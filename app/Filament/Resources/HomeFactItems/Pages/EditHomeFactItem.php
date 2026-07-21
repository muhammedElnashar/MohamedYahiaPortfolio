<?php

namespace App\Filament\Resources\HomeFactItems\Pages;

use App\Filament\Resources\HomeFactItems\HomeFactItemResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHomeFactItem extends EditRecord
{
    protected static string $resource = HomeFactItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
