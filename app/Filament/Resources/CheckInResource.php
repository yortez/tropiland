<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CheckInResource\Pages;
use App\Filament\Resources\CheckInResource\RelationManagers;
use App\Models\CheckIn;
use App\Models\OnlineRoomBooking;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CheckInResource extends Resource
{
    protected static ?string $model = CheckIn::class;
    protected static ?int $navigationSort = 1;

    protected static ?string $navigationIcon = null;
    protected static ?string $navigationGroup = 'Reservation';
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('check_in_status', 'active')->count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('online_room_booking_id')
                    ->label('Booking')
                    ->options(function () {
                        return OnlineRoomBooking::with('user')->get()->mapWithKeys(function ($booking) {
                            return [$booking->id => $booking->user->name . ' - Booking #' . $booking->id];
                        });
                    })

                    ->required()
                    ->afterStateUpdated(function ($state, callable $set) {
                        if ($state) {
                            $booking = OnlineRoomBooking::find($state);
                            if ($booking) {
                                $booking->update(['status' => 'confirmed']);

                                // Optionally, you can set other fields based on the booking
                                // $set('check_in_date', $booking->booking_date);
                                // $set('check_in_time', $booking->start_time);
                            }
                        }
                    })
                    ->label('Booking ID'),
                Forms\Components\DatePicker::make('check_in_date')
                    ->format('Y-m-d')
                    ->required(),
                Forms\Components\TimePicker::make('check_in_time')
                    ->format('H:i:s')
                    ->required(),
                Forms\Components\Select::make('check_in_status')
                    ->options([
                        'active' => 'Active',
                        'checked-out' => 'Checked Out',
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('onlineRoomBooking.user.name')
                    ->label('User Name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('online_room_booking_id')
                    ->label('Booking ID')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('check_in_date')
                    ->searchable(),
                Tables\Columns\TextColumn::make('check_in_time')
                    ->searchable(),
                Tables\Columns\TextColumn::make('check_in_status'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),

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
            'index' => Pages\ListCheckIns::route('/'),
            'create' => Pages\CreateCheckIn::route('/create'),
            'edit' => Pages\EditCheckIn::route('/{record}/edit'),
        ];
    }
}
