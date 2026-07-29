<?php

namespace App\Filament\Resources\CertificateSections\Pages;

use App\Filament\Resources\CertificateSections\CertificateSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCertificateSections extends ListRecords
{
    protected static string $resource = CertificateSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
        ];
    }
}
