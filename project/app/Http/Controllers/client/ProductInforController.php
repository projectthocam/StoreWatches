<?php

namespace App\Http\Controllers\client;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductInforController extends Controller
{
    public function index($id)
    {

        $product = Product::find($id);
        $productImages = ProductImage::where('product_id', $product->id)->get();

        // return view('client.layout.index', compact('products'));
        return view('client.infor', compact('product', 'productImages'));
    }
}
