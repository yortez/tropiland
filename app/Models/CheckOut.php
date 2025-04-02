<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CheckOut extends Model
{
    //

    // add fillable
    protected $fillable = [
        'check_in_id',
        'check_out_date',
        'check_out_time',
        'total_hours',
        'notes',
    ];
    // add guaded
    protected $guarded = ['id'];
    // add hidden
    protected $hidden = ['created_at', 'updated_at'];
    public function check_in()
    {
        return $this->belongsTo(CheckIn::class);
    }
    public function onlineRoomBooking()
    {
        return $this->belongsTo(OnlineRoomBooking::class);
    }
}
