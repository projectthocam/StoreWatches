<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        // $products = $this->product->latest()->take(6)->get();
        // return view('client.layout.index', compact('products'));
        return view('client.wishlist.wishlist');
    }
}
