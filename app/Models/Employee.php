<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //

    // add fillable
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'position',
        'department',
        'salary',
        'status', // active, inactive, suspended
    ];
    // add guaded
    protected $guarded = ['id'];
    // add hidden
    protected $hidden = ['created_at', 'updated_at'];
}
