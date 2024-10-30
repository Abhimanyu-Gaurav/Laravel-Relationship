<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    //
    function productData(){
        return $this->hasOne('App\Models\Product'); # one to one relationship
    }
}
