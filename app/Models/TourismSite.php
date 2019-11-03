<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourismSite extends Model
{
    public function photo(){
        return $this->hasMany('App\Models\Photo');
    }
}
