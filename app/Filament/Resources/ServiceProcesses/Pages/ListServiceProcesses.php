<?php

namespace App\Filament\Resources\ServiceProcesses\Pages;

use App\Filament\Resources\ServiceProcesses\ServiceProcessResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListServiceProcesses extends ListRecords
{
    protected static string $resource = ServiceProcessResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
