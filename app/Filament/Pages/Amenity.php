<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Amenity extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-sparkles';
    protected static ?string $navigationGroup = 'Management';
    protected static ?string $navigationLabel = 'Amenities';

    protected static string $view = 'filament.pages.amenity';
}
