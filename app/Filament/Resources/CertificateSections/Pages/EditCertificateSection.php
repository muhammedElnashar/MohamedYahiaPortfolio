<?php

namespace App\Filament\Resources\CertificateSections\Pages;

use App\Filament\Resources\CertificateSections\CertificateSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCertificateSection extends EditRecord
{
    protected static string $resource = CertificateSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
