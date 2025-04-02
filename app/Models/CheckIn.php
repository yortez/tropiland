<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CheckIn extends Model
{
    //

    // add fillable
    protected $fillable = [
        'online_room_booking_id',
        'check_in_date',
        'check_in_time',
        'check_in_status',
    ];
    // add guaded
    protected $guarded = ['id'];
    // add hidden
    protected $hidden = ['created_at', 'updated_at'];
    public function onlineRoomBooking()
    {
        return $this->belongsTo(OnlineRoomBooking::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
