<?php

namespace App\Filament\Resources\MasterPasienResource\Pages;

use App\Filament\Resources\MasterPasienResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMasterPasiens extends ListRecords
{
    protected static string $resource = MasterPasienResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
