<?php

namespace App\Filament\Resources\OnlineRoomBookingResource\Pages;

use App\Filament\Resources\OnlineRoomBookingResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOnlineRoomBooking extends CreateRecord
{
    protected static string $resource = OnlineRoomBookingResource::class;
    protected static bool $canCreateAnother = false;

    //customize redirect after create
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
