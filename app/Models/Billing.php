<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    //

    // add fillable
    protected $fillable = [
        'customer_name',
        'customer_email',
        'customer_phone',
        'billing_address',
        'billing_city',
        'billing_state',
        'billing_zip',
        'billing_country',
        'billing_method',
        'billing_amount',
        'billing_currency',
        'billing_status',
        'billing_invoice_number',
        'billing_date',
        'billing_due_date',
        'billing_description',
        'billing_reference',
        'billing_notes',
        'billing_terms',
        'billing_tax',
        'billing_discount'
    ];
    // add guaded
    protected $guarded = ['id'];
    // add hidden
    protected $hidden = ['created_at', 'updated_at'];
    public function check_out()
    {
        return $this->belongsTo(CheckOut::class);
    }
    public function check_in()
    {
        return $this->hasMany(CheckIn::class);
    }
    public function online_room_booking()
    {
        return $this->hasMany(OnlineRoomBooking::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function room()
    {
        return $this->hasOneThrough(Room::class, OnlineRoomBooking::class);
    }
    public function onlineRoomBooking()
    {
        return $this->hasMany(OnlineRoomBooking::class);
    }
}
