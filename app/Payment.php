<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'request_id',
        'client_id',
        'service_id',
        'vendor_id',
        'payment_method',
        'amount',
        'status',
        'transaction_id',
        'transaction_reponse',
    ];

}
