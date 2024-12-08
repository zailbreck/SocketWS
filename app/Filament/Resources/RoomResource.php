<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoomResource\Pages;
use App\Filament\Resources\RoomResource\RelationManagers;
use App\Models\Room;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

class RoomResource extends Resource
{
    protected static ?string $model = Room::class;

    protected static ?string $navigationGroup = 'Configuration';

    protected static ?int $navigationSort = 1;
    protected static ?string $navigationIcon = 'heroicon-o-cube';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(50)
                    ->autocomplete(false),
                TextInput::make('alt_name')
                    ->required()
                    ->maxLength(50)
                    ->autocomplete(false),
                TextInput::make('floor')
                    ->required()
                    ->numeric()
                    ->autocomplete(false),
                Select::make('building_code')
                    ->options([
                        'A' => 'A',
                        'B' => 'B',
                        'C' => 'C',
                    ])
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Room Name')
                    ->formatStateUsing(function ($state, Room $room) {
                        return $room->name. ' ('. $room->alt_name. ')';
                    }),
                TextColumn::make('floor')
                    ->label('Location')
                    ->formatStateUsing(function ($state, Room $room) {
                        return $room->building_code. ' (ft '. $room->floor. ')';
                    }),
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
            'index' => Pages\ListRooms::route('/'),
            'create' => Pages\CreateRoom::route('/create'),
            'edit' => Pages\EditRoom::route('/{record}/edit'),
        ];
    }
}
