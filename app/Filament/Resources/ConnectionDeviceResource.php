<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConnectionDeviceResource\Pages;
use App\Filament\Resources\ConnectionDeviceResource\RelationManagers;
use App\Models\ConnectionDevice;
use App\Models\DevicePort;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ConnectionDeviceResource extends Resource
{
    protected static ?string $model = DevicePort::class;

    protected static ?string $label = 'Net Ports';

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';

    protected static ?string $navigationGroup = 'Network';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListConnectionDevices::route('/'),
            'create' => Pages\CreateConnectionDevice::route('/create'),
            'edit' => Pages\EditConnectionDevice::route('/{record}/edit'),
        ];
    }
}
