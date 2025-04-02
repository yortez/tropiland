<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /** @use HasFactory<\Database\Factories\RoomFactory> */
    use HasFactory;

    // add fillable
    protected $fillable = [
        'name',
        'description',
        'capacity',
        'is_available',
        'room_status',
        'price',
        'image',
    ];
    // add guaded
    protected $guarded = ['id'];
    // add hidden
    protected $hidden = ['created_at', 'updated_at'];

    public function bookings()
    {
        return $this->hasMany(OnlineRoomBooking::class);
    }
}
