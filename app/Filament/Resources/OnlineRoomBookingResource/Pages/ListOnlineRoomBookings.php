<?php

namespace App\Filament\Resources\OnlineRoomBookingResource\Pages;

use App\Filament\Resources\OnlineRoomBookingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOnlineRoomBookings extends ListRecords
{
    protected static string $resource = OnlineRoomBookingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
