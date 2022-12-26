<?php

namespace App\Filament\Resources\DokterResource\Pages;

use App\Filament\Resources\DokterResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageDokters extends ManageRecords
{
    protected static string $resource = DokterResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
