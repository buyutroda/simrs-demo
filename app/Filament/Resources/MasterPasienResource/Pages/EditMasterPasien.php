<?php

namespace App\Filament\Resources\MasterPasienResource\Pages;

use App\Filament\Resources\MasterPasienResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMasterPasien extends EditRecord
{
    protected static string $resource = MasterPasienResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
