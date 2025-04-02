<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BillingResource\Pages;
use App\Filament\Resources\BillingResource\RelationManagers;
use App\Models\Billing;
use App\Models\CheckOut;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BillingResource extends Resource
{
    protected static ?string $model = Billing::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('check_out_id')
                    ->label('Check-Out')
                    ->options(function () {
                        return CheckOut::with(['onlineRoomBooking.user', 'check_in'])->get()->mapWithKeys(function ($checkOut) {
                            $bookingInfo = 'Check-Out #' . $checkOut->id;

                            if ($checkOut->onlineRoomBooking) {
                                $userName = $checkOut->onlineRoomBooking->user->name ?? 'Unknown User';
                                $bookingInfo = $userName . ' - ' . $bookingInfo;
                            } elseif ($checkOut->check_in) {
                                $bookingInfo = 'Check-In #' . $checkOut->check_in->id . ' - ' . $bookingInfo;
                            } else {
                                $bookingInfo = 'No Booking Info - ' . $bookingInfo;
                            }

                            return [$checkOut->id => $bookingInfo];
                        });
                    })
                    ->required()
                    ->searchable(),



                Forms\Components\TextInput::make('customer_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('customer_email')
                    ->email()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('customer_phone')
                    ->tel()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('billing_address')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('billing_city')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('billing_state')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('billing_zip')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('billing_country')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('billing_method')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('billing_amount')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('billing_currency')
                    ->required()
                    ->maxLength(255)
                    ->default('USD'),
                Forms\Components\TextInput::make('billing_status')
                    ->required()
                    ->maxLength(255)
                    ->default('pending'),
                Forms\Components\TextInput::make('billing_invoice_number')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('billing_date'),
                Forms\Components\DatePicker::make('billing_due_date'),
                Forms\Components\Textarea::make('billing_description')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('billing_reference')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('billing_notes')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('billing_terms')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('billing_tax')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('billing_discount')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('customer_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('customer_email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('customer_phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('billing_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('billing_city')
                    ->searchable(),
                Tables\Columns\TextColumn::make('billing_state')
                    ->searchable(),
                Tables\Columns\TextColumn::make('billing_zip')
                    ->searchable(),
                Tables\Columns\TextColumn::make('billing_country')
                    ->searchable(),
                Tables\Columns\TextColumn::make('billing_method')
                    ->searchable(),
                Tables\Columns\TextColumn::make('billing_amount')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('billing_currency')
                    ->searchable(),
                Tables\Columns\TextColumn::make('billing_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('billing_invoice_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('billing_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('billing_due_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('billing_reference')
                    ->searchable(),
                Tables\Columns\TextColumn::make('billing_notes')
                    ->searchable(),
                Tables\Columns\TextColumn::make('billing_terms')
                    ->searchable(),
                Tables\Columns\TextColumn::make('billing_tax')
                    ->searchable(),
                Tables\Columns\TextColumn::make('billing_discount')
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
            'index' => Pages\ListBillings::route('/'),
            'create' => Pages\CreateBilling::route('/create'),
            'edit' => Pages\EditBilling::route('/{record}/edit'),
        ];
    }
}
