<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function photo(){
        return $this->hasMany('App\Models\Photo');
    }

    public function package_detail(){
        return $this->hasMany('App\Models\PackageDetail');
    }
}
