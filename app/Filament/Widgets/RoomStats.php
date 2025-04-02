<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class RoomStats extends BaseWidget
{
    protected static ?int $sort = 1;
    protected function getStats(): array
    {
        return [
            $this->getTotalRoomsStat(),
            $this->getTotalAvailableRoomsStat(),
            $this->getTotalOccupiedRoomsStat(),
            $this->getOnMaintenanceRoomsStat(),
        ];
    }
    protected function getTotalRoomsStat(): Stat
    {
        $totalRooms = \App\Models\Room::query()->count();

        return Stat::make('Total Rooms', number_format($totalRooms))
            ->description('Total number of rooms')
            ->chart([/* Add chart data here if needed */])
            ->color('success');
    }
    protected function getTotalAvailableRoomsStat(): Stat
    {
        $totalAvailableRooms = \App\Models\Room::query()->where('is_available', true)->count();

        return Stat::make('Total Available Rooms', number_format($totalAvailableRooms))
            ->description('Total number of available rooms')
            ->chart([/* Add chart data here if needed */])
            ->color('success');
    }
    protected function getTotalOccupiedRoomsStat(): Stat
    {
        $totalOccupiedRooms = \App\Models\Room::query()->where('is_available', false)->where('room_status', 'booked')->count();

        return Stat::make('Total Booked Rooms', number_format($totalOccupiedRooms))
            ->description('Total number of booked rooms')
            ->chart([/* Add chart data here if needed */])
            ->color('danger');
    }
    protected function getOnMaintenanceRoomsStat(): Stat
    {
        $totalOnMaintenanceRooms = \App\Models\Room::query()->where('is_available', false)->where('room_status', 'maintenance')->count();
        return Stat::make('Total On Maintenance Rooms', number_format($totalOnMaintenanceRooms))
            ->description('Total number of on maintenance rooms');
    }
}
