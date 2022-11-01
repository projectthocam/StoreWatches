<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('admin.customer.index', compact('customers'));
    }
    public function view($id)
    {
        $customer = Customer::find($id);
        return view('admin.customer.view', compact('type'));
    }
    public function create()
    {
        return view('admin.customer.create');
    }
    public function postCreate(Request $request)
    {
        // nhận tất cả tham số vào mảng Supplier
        $customer = $request->all();
        // xử lý upload hình vào thư mục
        $customer['password'] = Hash::make($customer['password']);
        $customerNew = new Customer($customer);
        $customerNew->save();

        return redirect()->route('customerIndex');
    }
    public function delete($id)
    {
        $typeDelete = Customer::find($id);
        $typeDelete->delete();
        return redirect()->route('customerIndex');
    }
    public function update($id)
    {
        $customer = Customer::find($id);
        return view('admin.customer.update', compact('customer'));
    }
    public function postUpdate(Request $request, $id)
    {
        $cus = Customer::find($id);
        //Kiểm tra dữ liệu mới thay đỗi có khác dữ liệu cũ hay không
        $cus->pass_word = $request->input('pass_word');
        $cus->user_name = $request->input('user_name');
        $cus->name = $request->input('name');
        $cus->phone = $request->input('phone');
        $cus->address = $request->input('address');
        $cus->save(); //Cập nhật dữ liệu vào database
        return redirect()->route('customerIndex');
    }
}
