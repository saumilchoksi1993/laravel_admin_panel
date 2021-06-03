<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'payment_date',
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'payment_date',  
        'name',  
        'email',  
        'phone',  
        'card_number',  
        'amount',  
        'payment_status',  
    ];
}
