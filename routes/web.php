<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('list', [SellerController::class, 'list']);

Route::get('manyRel', [SellerController::class,'manyRel']);

Route::get('manyToOne', [SellerController::class,'manyToOne']);


# Many to Many Relationship:
Route::get('seller-products/{id}', [SellerController::class,'sellerProducts']);

Route::get('product-sellers/{id}', [SellerController::class,'productSellers']);

