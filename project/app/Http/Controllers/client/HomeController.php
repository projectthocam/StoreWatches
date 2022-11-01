<?php

namespace App\Http\Controllers\client;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Order_details;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Type;

class HomeController extends Controller
{
    private $product;
    private $cart;
    private $customer;
    private $order;
    private $type;
    private $supplier;
    public function __construct(Product $product, Order_details $cart, Customer $customer, Order $order, Type $type, Supplier $supplier)
    {
        $this->$product = $product;
        $this->$cart = $cart;
        $this->$customer = $customer;
        $this->$order = $order;
        $this->$type = $type;
        $this->$supplier = $supplier;
    }
    public function index()
    {
        // $products = $this->product->latest()->take(6)->get();
        // return view('client.layout.index', compact('products'));
        return view('client.layout.index');
    }
}
