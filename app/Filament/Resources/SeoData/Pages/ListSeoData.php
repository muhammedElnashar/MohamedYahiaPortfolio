<?php

namespace App\Filament\Resources\SeoData\Pages;

use App\Filament\Resources\SeoData\SeoDataResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSeoData extends ListRecords
{
    protected static string $resource = SeoDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
