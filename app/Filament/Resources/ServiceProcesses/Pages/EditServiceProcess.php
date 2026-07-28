<?php

namespace App\Filament\Resources\ServiceProcesses\Pages;

use App\Filament\Resources\ServiceProcesses\ServiceProcessResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditServiceProcess extends EditRecord
{
    protected static string $resource = ServiceProcessResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
