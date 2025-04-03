<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class AvailableRoomsCalendar extends Widget
{
    protected int | string | array $columnSpan = 'full';
    protected static ?int $sort = 2;
    protected static string $view = 'filament.widgets.available-rooms-calendar';
}
