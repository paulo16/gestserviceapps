<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    
    public function locaux()
    {
        return $this->hasMany('App\Models\Local');
    }
}
