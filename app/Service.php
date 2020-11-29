<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'vendor_id',
        'name',
        'detail',
        'type',
        'category',
        'sub_category',
        'price',
        'discount_type',
        'discount',
        'tax_type',
        'tax',
        'status',
        'service_history_id',
    ];


    /**
     * Get the vendor that provides this service.
     */
    public function vendor()
    {
        return $this->belongsTo('App\Vendor')->select(['id', 'business_name', 'profile_image', 'business_detail_id']);
    }

}
