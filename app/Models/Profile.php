<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    public function seller(){
        return $this->belongsTo("App\Models\Seller"); // Each profile belongs to a single seller
    }
}
