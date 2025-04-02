<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExpenseResource\Pages;
use App\Filament\Resources\ExpenseResource\RelationManagers;
use App\Models\Expense;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExpenseResource extends Resource
{
    protected static ?string $model = Expense::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('expense_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('expense_description')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('expense_amount')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('expense_currency')
                    ->required()
                    ->maxLength(255)
                    ->default('USD'),
                Forms\Components\TextInput::make('expense_category')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('expense_status')
                    ->required()
                    ->maxLength(255)
                    ->default('pending'),
                Forms\Components\TextInput::make('expense_invoice_number')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('expense_date'),
                Forms\Components\DatePicker::make('expense_due_date'),
                Forms\Components\TextInput::make('expense_reference')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('expense_notes')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('expense_terms')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('expense_tax')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('expense_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('expense_description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('expense_amount')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('expense_currency')
                    ->searchable(),
                Tables\Columns\TextColumn::make('expense_category')
                    ->searchable(),
                Tables\Columns\TextColumn::make('expense_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('expense_invoice_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('expense_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('expense_due_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('expense_reference')
                    ->searchable(),
                Tables\Columns\TextColumn::make('expense_notes')
                    ->searchable(),
                Tables\Columns\TextColumn::make('expense_terms')
                    ->searchable(),
                Tables\Columns\TextColumn::make('expense_tax')
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
            'index' => Pages\ListExpenses::route('/'),
            'create' => Pages\CreateExpense::route('/create'),
            'edit' => Pages\EditExpense::route('/{record}/edit'),
        ];
    }
}
