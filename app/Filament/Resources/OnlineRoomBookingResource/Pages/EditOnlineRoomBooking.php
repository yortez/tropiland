<?php

namespace App\Filament\Resources\OnlineRoomBookingResource\Pages;

use App\Filament\Resources\OnlineRoomBookingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOnlineRoomBooking extends EditRecord
{
    protected static string $resource = OnlineRoomBookingResource::class;

    protected function getHeaderActions(): array
    {
        return [
        ];
    }

    //customize redirect after create
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
