<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class HouseKeeping extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-trash';
    protected static ?string $navigationGroup = 'Management';

    protected static string $view = 'filament.pages.house-keeping';
}