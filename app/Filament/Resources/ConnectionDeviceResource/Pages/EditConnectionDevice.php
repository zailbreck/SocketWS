<?php

namespace App\Filament\Resources\ConnectionDeviceResource\Pages;

use App\Filament\Resources\ConnectionDeviceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditConnectionDevice extends EditRecord
{
    protected static string $resource = ConnectionDeviceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
