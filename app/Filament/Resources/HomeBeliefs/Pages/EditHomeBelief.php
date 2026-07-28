<?php

namespace App\Filament\Resources\HomeBeliefs\Pages;

use App\Filament\Resources\HomeBeliefs\HomeBeliefResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHomeBelief extends EditRecord
{
    protected static string $resource = HomeBeliefResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
