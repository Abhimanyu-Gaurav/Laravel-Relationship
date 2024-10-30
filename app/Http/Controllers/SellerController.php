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
        // return Product::all(); 
        $data = Product::with("Seller")->get();
        return $data;
    }

    public function sellerProducts($sellerId)
    {
        $seller = Seller::find($sellerId);
        return $seller->products;  // This will fetch all products linked to the seller
    }

    public function productSellers($productId)
    {
        $product = Product::find($productId);
        return $product->sellers;  // This will fetch all sellers linked to the product
    }

        
}
