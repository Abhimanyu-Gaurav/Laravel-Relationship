<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    //
    function productData(){
        return $this->hasOne('App\Models\Product'); # one to one relationship
    }

    function productManyData(){
        return $this->hasMany('App\Models\Product'); # one to many relationship.
    }

    public function products()
    {
        return $this->belongsToMany('App\Models\Product', 'product_seller', 'seller_id', 'product_id');
    }


    # profile:
    public function profile()
    {
        return $this->hasOne('App\Models\Profile'); // One seller has one profile
    }

}
