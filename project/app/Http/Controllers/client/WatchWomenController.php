<?php

namespace App\Http\Controllers\client;

use App\Models\Product;
use Illuminate\Http\Request;

class WatchWomenController extends Controller
{
    public function index()
    {

        $products = Product::where("type_id", 2)->get();

        // $products = $this->product->latest()->take(6)->get();
        // return view('client.layout.index', compact('products'));


        return view('client.type.women', compact('products'));
    }
}
