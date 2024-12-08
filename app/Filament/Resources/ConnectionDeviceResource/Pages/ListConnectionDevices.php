<?php

namespace App\Filament\Resources\ConnectionDeviceResource\Pages;

use App\Filament\Resources\ConnectionDeviceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListConnectionDevices extends ListRecords
{
    protected static string $resource = ConnectionDeviceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
