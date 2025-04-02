<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OnlineRoomBookingResource\Pages;
use App\Filament\Resources\OnlineRoomBookingResource\RelationManagers;
use App\Models\OnlineRoomBooking;
use App\Models\Room;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OnlineRoomBookingResource extends Resource
{
    protected static ?string $model = OnlineRoomBooking::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Reservation';
    protected static ?string $navigationLabel = 'Bookings';
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('status', 'pending')->count();
    }
    protected static ?string $navigationBadgeTooltip = 'New Bookings';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\Select::make('room_id')
                    ->relationship('room', 'name')
                    ->required()
                    ->afterStateUpdated(function ($state, callable $set) {
                        if ($state) {
                            $room = Room::find($state);
                            if ($room) {
                                $room->update([
                                    'is_available' => false,
                                    'room_status' => 'booked',
                                ]);
                            }
                        }
                    }),
                Forms\Components\DatePicker::make('booking_date')
                    ->required(),
                Forms\Components\TimePicker::make('start_time')
                    ->required(),
                Forms\Components\TimePicker::make('end_time')
                    ->required(),
                Forms\Components\Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'confirmed' => 'Confirmed',
                        'cancelled' => 'Cancelled',
                    ])
                    ->required()
                    ->default('pending'),
                Forms\Components\Select::make('payment_status')
                    ->required()
                    ->options([
                        'paid' => 'Paid',
                        'unpaid' => 'Unpaid',
                    ])
                    ->default('unpaid'),
                Forms\Components\Select::make('payment_method')
                    ->options([
                        'cash' => 'Cash',
                        'credit_card' => 'Credit Card',
                        'e-wallet' => 'E-wallet',
                        'bank_transfer' => 'Bank Transfer',
                    ])
                    ->default(null),
                Forms\Components\TextInput::make('transaction_id')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('room.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('booking_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('start_time')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('end_time'),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('payment_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('payment_method')
                    ->searchable(),
                Tables\Columns\TextColumn::make('transaction_id')
                    ->searchable(),
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
            'index' => Pages\ListOnlineRoomBookings::route('/'),
            'create' => Pages\CreateOnlineRoomBooking::route('/create'),
            'edit' => Pages\EditOnlineRoomBooking::route('/{record}/edit'),
        ];
    }
}
