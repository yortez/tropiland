<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CheckOutResource\Pages;
use App\Filament\Resources\CheckOutResource\RelationManagers;
use App\Models\CheckIn;
use App\Models\CheckOut;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Carbon\Carbon;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Support\Facades\Log;

class CheckOutResource extends Resource
{
    protected static ?string $model = CheckOut::class;
    protected static ?int $navigationSort = 2;

    protected static ?string $navigationIcon = null;
    protected static ?string $navigationGroup = 'Reservation';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('check_in_id')
                    ->label('Check-In')
                    ->options(function () {
                        return CheckIn::with('onlineRoomBooking.user')->get()->mapWithKeys(function ($checkIn) {
                            return [$checkIn->id => $checkIn->onlineRoomBooking->user->name . ' - Check-In #' . $checkIn->id];
                        });
                    })
                    ->required()
                    ->searchable()
                    ->afterStateUpdated(function (Get $get, Set $set) {
                        self::calculateTotalHours($get, $set);
                    })
                    ->live()
                    ->afterStateUpdated(function ($state, Set $set) {
                        if ($state) {
                            $checkIn = CheckIn::find($state);
                            if ($checkIn) {
                                $checkIn->update(['check_in_status' => 'checked-out']);

                                // Optionally, you can set other fields based on the booking
                                // $set('check_in_date', $booking->booking_date);
                                // $set('check_in_time', $booking->start_time);
                            }
                        }
                    }),
                Forms\Components\DatePicker::make('check_out_date')
                    ->required()
                    ->format('Y-m-d')
                    ->afterStateUpdated(function (Get $get, Set $set) {
                        self::calculateTotalHours($get, $set);
                    })
                    ->live(),
                Forms\Components\TimePicker::make('check_out_time')
                    ->required()
                    ->format('H:i:s')
                    ->afterStateUpdated(function (Get $get, Set $set) {
                        self::calculateTotalHours($get, $set);
                    })
                    ->live(),
                Forms\Components\TextInput::make('total_hours')
                    ->required()
                    ->numeric()
                    ->afterStateUpdated(function (Get $get, Set $set) {
                        self::calculateTotalHours($get, $set);
                    })
                    ->live(),
                Forms\Components\Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('check_in.onlineRoomBooking.user.name')
                    ->label('User Name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('check_in_id')
                    ->label('Check-In ID')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('check_out_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('check_out_time'),
                Tables\Columns\TextColumn::make('total_hours')
                    ->numeric()
                    ->sortable(),
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
    private static function calculateTotalHours(Get $get, Set $set): void
    {
        Log::info('calculateTotalHours method called');

        $checkInId = $get('check_in_id');
        $checkOutDate = $get('check_out_date');
        $checkOutTime = $get('check_out_time');

        Log::info('Input values:', [
            'checkInId' => $checkInId,
            'checkOutDate' => $checkOutDate,
            'checkOutTime' => $checkOutTime,
        ]);

        if ($checkInId && $checkOutDate && $checkOutTime) {
            $checkIn = CheckIn::find($checkInId);
            if ($checkIn) {
                Log::info('CheckIn found:', [
                    'checkInDate' => $checkIn->check_in_date,
                    'checkInTime' => $checkIn->check_in_time,
                ]);

                // Parse check-in date and time
                $checkInDateTime = Carbon::createFromFormat('Y-m-d H:i:s', $checkIn->check_in_date . ' ' . $checkIn->check_in_time);

                // Parse check-out date and time
                $checkOutDateTime = Carbon::createFromFormat('Y-m-d H:i:s', $checkOutDate . ' ' . $checkOutTime);

                Log::info('Parsed DateTimes:', [
                    'checkInDateTime' => $checkInDateTime->toDateTimeString(),
                    'checkOutDateTime' => $checkOutDateTime->toDateTimeString(),
                ]);

                $totalHours = abs($checkOutDateTime->diffInHours($checkInDateTime));
                $totalHours = round($totalHours);
                Log::info('Calculated total hours: ' . $totalHours);

                $set('total_hours', $totalHours);
            } else {
                Log::warning('CheckIn not found for ID: ' . $checkInId);
            }
        } else {
            Log::info('Not all required fields are filled');
        }
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
            'index' => Pages\ListCheckOuts::route('/'),
            'create' => Pages\CreateCheckOut::route('/create'),
            'edit' => Pages\EditCheckOut::route('/{record}/edit'),
        ];
    }
}
