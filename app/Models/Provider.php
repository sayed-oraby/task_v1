<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use App\Notifications\ProviderResetPasswordNotification;


class Provider extends Authenticatable
{

    use Notifiable;
    
    protected  $table = 'provider';

    public $timestamps = true;

    protected $fillable = [ 
         
        'user_name', 'name', 'email', 'password'
            
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function locations() {
        return $this->hasMany('App\Models\Locations','provider_id');
    }

     
    
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ProviderResetPasswordNotification($token));
    }

    
    
    
}
