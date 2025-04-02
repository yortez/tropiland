<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    //

    // add fillable
    protected $fillable = [
        'item_name',
        'item_code',
        'quantity',
        'unit',
        'price',
        'supplier',
        'expiry_date',
        'location',
        'status', // available, out_of_stock, expired
        'description',
        'category',
        'remarks',
    ];
    // add guaded
    protected $guarded = ['id'];
    // add hidden
    protected $hidden = ['created_at', 'updated_at'];
}
