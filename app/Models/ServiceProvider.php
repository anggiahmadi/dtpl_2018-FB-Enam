<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    public function photo(){
        return $this->hasMany('App\Models\Photo');
    }
}
