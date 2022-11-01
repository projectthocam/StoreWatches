@extends('admin.layout.layout')
@section('title','product index')
@section('content')

<div class="card">
   
        
   
    <div class="card-body">
        <h2 class="text-center mb-3">Order : {{$order->name}}</h2>
        <table class="table table-bordered">
            <tr>
                <th>Order ID</th>
                <th>Product ID</th>
                <th>Quantity</th>
                <th>Price</th>
             
             
            </tr>
            @foreach($order->order_details as $product)
                <tr>
                    <td>{{$product->order_id}}</td>
                    <td>{{$product->product->name}}</td>
                    <td>{{$product->quantity}}</td>
           
                    <td>{{$product->price}}</td>
                </tr>
    
            @endforeach
        </table>
    
    </div>
</div>

   



@endsection