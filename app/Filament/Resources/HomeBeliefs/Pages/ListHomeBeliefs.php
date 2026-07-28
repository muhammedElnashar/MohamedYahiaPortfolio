<?php

namespace App\Filament\Resources\HomeBeliefs\Pages;

use App\Filament\Resources\HomeBeliefs\HomeBeliefResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHomeBeliefs extends ListRecords
{
    protected static string $resource = HomeBeliefResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
