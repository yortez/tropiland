<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class MostReservedRoom extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Reservation';
    protected static string $view = 'filament.pages.most-reserved-room';
}
