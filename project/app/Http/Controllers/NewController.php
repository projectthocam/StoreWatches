<?php

namespace App\Http\Controllers;

use App\Models\New_new;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index()
    {
        $new = New_new::all();
        $product = Product::all();
        $user = User::all();
        return view('admin.new.index', compact('new', 'product', 'user'));
    }
    public function view($id)
    {
        $new = New_new::find($id);
        return view('admin.new.view', compact('new'));
    }
    // public function create()
    // {
    //     $product = Product::all();
    //     $user = User::all();
    //     return view('admin.new.create', compact('product', 'user'));
    // }
    public function postCreate(Request $request)
    {
        // nhận tất cả tham số vào mảng Supplier
        $new = $request->all();
        // xử lý upload hình vào thư mục

        $newObj = new New_new($new);
        $newObj->save();

        return redirect()->route('newIndex');
    }
    public function delete($id)
    {
        $fbDelete = New_new::find($id);
        $fbDelete->delete();
        return redirect()->route('newIndex');
    }
    public function update($id)
    {
        $product = Product::all();
        $user = User::all();
        $new = New_new::find($id);
        return view('admin.new.update', compact('product', 'user', 'new'));
    }
    public function postUpdate(Request $request, $id)
    {
        $od = New_new::find($id);
        //Kiểm tra dữ liệu mới thay đỗi có khác dữ liệu cũ hay không
        $od->user_id = $request->input('user_id');
        $od->product_id = $request->input('product_id');
        $od->parent_id = $request->input('parent_id');
        $od->title = $request->input('title');
        $od->author = $request->input('author');
        $od->save(); //Cập nhật dữ liệu vào database
        return redirect()->route('newIndex');
    }
}
