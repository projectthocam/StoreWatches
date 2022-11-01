<?php

namespace App\Http\Controllers\client;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Session;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Oder_details;
use App\Models\Type;

class AddToCartController extends Controller
{
    public function index(Request $req)
    {
        $id=$req->id;
        //lấy sl cần thêm vào
        $qty=$req->quantity;
        //tìm sp theo id
        $product=Product::find($id);
        //nếu có giỏ hàng cũ
        $oldcart=Session('cart')?Session::get('cart'):null;
        //lấy lại giỏ hàng cũ
        $cart=new Cart($oldcart);
        //thêm sản phẩm mới với số lượng qty vào giỏ hàng cũ->trở thàng giỏ hàng mới
        $cart -> add($product,$id,$qty);
        //put lên lại session
        $req->Session()->put('cart',$cart);
        
        return redirect()->back();
    }
    public function deleteItem($id)
    {
        //lấy giỏ hàng 
        $oldcart=session::has('cart')?Session::get('cart'):null;
        //giỏ hàng bằng giỏ hàng cũ
        $cart=new Cart($oldcart);
        //bỏ sp ra khỏi giỏ hàng theo id sp
        $cart->removeItem($id);
        //kiểm tra nếu giỏ hàng rỗng thì xóa luôn session
        if(count($cart->items)>0){
            //giỏ hàng còn sp thì put lên lại session
            Session::put('cart',$cart);
        }
        //giỏ hàng trống thì xóa luôn giỏ hàng
        else Session::forget('cart');
        return redirect()->back();
    }

    public function deleteOne($id)
    {
        //lấy giỏ hàng cũ
        $oldcart=session::has('cart')?Session::get('cart'):null;
        //giỏ hàng cũ
        $cart=new Cart($oldcart);
        //giỏ hàng cũ xóa đi 1 sp
        $cart->reduceByOne($id);
        //kiểm tra giỏ hàng
        if(count($cart->items)>0){
            //nếu còn thì put lên lại session
            Session::put('cart',$cart);
        }
        //nếu trống thì xóa luôn giỏ hàng
        else Session::forget('cart');
        return redirect()->back();
    }
    public function plusOne(request $req,$id)
    {
        //tìm sp theo id
        $product=Product::find($id);
        //nếu trước đó đã có giỏ hàng thì cộng thêm vào
        $oldcart=Session('cart')?Session::get('cart'):null;
        //lấy giỏ hàng cũ
        $cart=new Cart($oldcart);
        //giỏ hàng cũ cộng thêm sp mới sẽ thành giỏ hàng mới
        $cart -> add($product,$id,1);
        //put giỏ hàng lên session
        $req->Session()->put('cart',$cart);
        return redirect()->back();
    }

    public function thanhtoan()
    {
        //$productList = $this->type->where('name',0)->take(2)->get();
        return view('client.thanhtoan.thanhtoan'); 
    }

    public function submit(Request $request)
    {
        $cart = session::get('cart');
        foreach($cart->items as $key=>$value){
            $oder_details=new Oder_details;
           
            $oder_details->product_id=$key;
            $oder_details->quantity=$value['qty'];
            
            $product=Products::find($key);
            $oder_details->price=$product->price;

            $oder_details->save();
            session::forget('cart');
            return redirect()->route('Home')->with('message','Chúc mừng bạn đã đặt hàng thành công!');
    }
}

}