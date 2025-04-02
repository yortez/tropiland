<?php

namespace App\Filament\Resources\CheckOutResource\Pages;

use App\Filament\Resources\CheckOutResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCheckOut extends CreateRecord
{
    protected static string $resource = CheckOutResource::class;
    protected static bool $canCreateAnother = false;

    //customize redirect after create
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
