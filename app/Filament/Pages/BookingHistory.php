<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class BookingHistory extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-clock';
    protected static ?int $navigationSort = 3;

    protected static ?string $navigationGroup = 'Reservation';
    protected static string $view = 'filament.pages.booking-history';
}
