<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Product;

class SellerController extends Controller
{
    //
    function list(){
        return Seller::find(3)->productData ; #Here i use productData() as property
    }

    function manyRel(){
        return Seller::find(3)->productManyData; # calling the function, & Here i use productData() as property
    }

    function manyToOne(){
        return Product::all(); 
    }
    
}
