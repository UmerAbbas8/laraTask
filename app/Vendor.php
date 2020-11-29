<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Vendor extends Model
{
    use Notifiable;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'business_name',
        'email',
        'phone',
        'password',
        'profile_image',
        'business_detail_id',
        'status',
    ];

    /**
     * Get the services of this vendor.
     */
    public function services()
    {
        return $this->hasMany('App\Service');
    }

    /**
     * Get the requests of this vendor.
     */
    public function requests()
    {
        return $this->hasMany('App\Request');
    }

}
