<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    Public function seller(){
        return $this->belongsTo("App\models\Seller");
    }

    public function sellers(){
        return $this->belongsToMany("App\Models\Seller","product_seller","product_id","seller_id");
    }
}
