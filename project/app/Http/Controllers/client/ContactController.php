<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // $products = $this->product->latest()->take(6)->get();
        // return view('client.layout.index', compact('products'));
        return view('client.contact.contact');
    }
}
