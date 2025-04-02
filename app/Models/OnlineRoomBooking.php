<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineRoomBooking extends Model
{
    /** @use HasFactory<\Database\Factories\OnlineRoomBookingFactory> */
    use HasFactory;

    // add fillable
    protected $fillable = [
        'user_id',
        'room_id',
        'booking_date',
        'start_time',
        'end_time',
        'status',
        'payment_status',
        'payment_method',
        'transaction_id',
    ];
    // add guaded
    protected $guarded = ['id'];
    // add hidden
    protected $hidden = ['created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }
}
