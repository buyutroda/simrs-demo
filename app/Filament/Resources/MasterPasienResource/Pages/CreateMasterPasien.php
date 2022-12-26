<?php

namespace App\Filament\Resources\MasterPasienResource\Pages;

use App\Filament\Resources\MasterPasienResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMasterPasien extends CreateRecord
{
    protected static string $resource = MasterPasienResource::class;

    protected function getRedirectUrl(): string {
        return $this->getResource()::getUrl('index');
    }
}
