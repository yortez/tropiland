<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    //

    // add fillable
    protected $fillable = [
        'expense_name',
        'expense_description',
        'expense_amount',
        'expense_currency',
        'expense_category',
        'expense_status',
        'expense_invoice_number',
        'expense_date',
        'expense_due_date',
        'expense_reference',
        'expense_notes',
        'expense_terms',
        'expense_tax',
    ];
    // add guaded
    protected $guarded = ['id'];
    // add hidden
    protected $hidden = ['created_at', 'updated_at'];
}
