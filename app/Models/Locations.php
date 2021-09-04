<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Locations extends Model
{

    protected  $table = 'locations';

    public $timestamp = true;
    
    protected $fillable = [
        'provider_id', 'latitude', 'longitude'
    ];

    public function provider() {
        return $this->belongsTo('App\Models\Provider','provider_id');
    }
     
    
    
    
}
