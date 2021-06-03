<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'name',
        'email',
        'phone',
        'amount',
        'dynamic_url',
    ];
}
