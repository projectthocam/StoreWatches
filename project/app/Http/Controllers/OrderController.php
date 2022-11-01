<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        $cus = Customer::all();
        return view('admin.order.index', compact('orders', 'cus'));
    }
    public function view($id)
    {
        $order = Order::find($id);
        return view('admin.order.view', compact('order'));
    }
    // public function create()
    // {
    //     $cus = Customer::all();
    //     return view('admin.order.create', compact('cus'));
    // }
    public function postCreate(Request $request)
    {
        // nhận tất cả tham số vào mảng Supplier
        $order = $request->all();
        // xử lý upload hình vào thư mục

        $orderNew = new Order($order);
        $orderNew->save();

        return redirect()->route('orderIndex');
    }
    public function delete($id)
    {
        $orderDelete = Order::find($id);
        $orderDelete->delete();
        return redirect()->route('orderIndex');
    }

    public function update($id)
    {
        $customer = Customer::all();
        $order = Order::find($id);
        return view('admin.order.update', compact('order', 'customer'));
    }
    public function postUpdate(Request $request, $id)
    {
        $od = Order::find($id);
        //Kiểm tra dữ liệu mới thay đỗi có khác dữ liệu cũ hay không
        $od->name = $request->input('name');
        $od->address = $request->input('address');
        $od->phone = $request->input('phone');
        $od->customer_id = $request->input('customer_id');
        $od->country = $request->input('country');
        $od->email = $request->input('email');
        $od->save(); //Cập nhật dữ liệu vào database
        return redirect()->route('orderIndex');
    }
}
