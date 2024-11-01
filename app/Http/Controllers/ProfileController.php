<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;

class ProfileController extends Controller
{
    //
    public function show($id){
        $seller = Seller::with('profile')->findOrFail($id); // Eager load profile
        return view('profiles.show', compact('seller')); // Pass to view
    }
}
