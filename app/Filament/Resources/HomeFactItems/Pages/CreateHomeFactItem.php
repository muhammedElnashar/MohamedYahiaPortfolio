<?php

namespace App\Filament\Resources\HomeFactItems\Pages;

use App\Filament\Resources\HomeFactItems\HomeFactItemResource;
use Filament\Resources\Pages\CreateRecord;

class CreateHomeFactItem extends CreateRecord
{
    protected static string $resource = HomeFactItemResource::class;
}
