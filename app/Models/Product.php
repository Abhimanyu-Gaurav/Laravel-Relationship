<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    Public function seller(){
        return $this->belongsTo("App\models\Seller");
    }
}
