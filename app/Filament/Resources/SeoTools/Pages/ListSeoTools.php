<?php

namespace App\Filament\Resources\SeoTools\Pages;

use App\Filament\Resources\SeoTools\SeoToolResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSeoTools extends ListRecords
{
    protected static string $resource = SeoToolResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
