<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_id',
        'service_id',
        'vendor_id',
        'message_for_vendor',
        'status',
        'payment_method',
        'payment_detail',
        'payment_status',
        'payment_id',
        'service_history_id',
    ];


    /**
     * Get the vendor of this request.
     */
    public function vendor()
    {
        return $this->belongsTo('App\Vendor');
    }

    /**
     * Get the client of this request.
     */
    public function client()
    {
        return $this->belongsTo('App\Client');
    }

}
