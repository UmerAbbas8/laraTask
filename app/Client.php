<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Client extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'phone',
        'password',
        'profile_image',
        'status',
    ];


    /**
     * Get the requests of this client.
     */
    public function requests()
    {
        return $this->hasMany('App\Request');
    }

}
