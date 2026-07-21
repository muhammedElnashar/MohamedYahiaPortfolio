<?php

namespace App\Filament\Resources\HomeFactItems\Pages;

use App\Filament\Resources\HomeFactItems\HomeFactItemResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHomeFactItems extends ListRecords
{
    protected static string $resource = HomeFactItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
