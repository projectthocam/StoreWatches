@extends('admin.layout.layout')
@section('title','view supplier')
@section('content')
<div class="card">
    
    <div class="card-body">
        <h2 class="text-center mb-3">Type : {{$type->name}}</h2>
        <table class="table table-bordered">
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>State</th>
             
            </tr>
            @foreach($type->products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td> <img src="{{ asset('/img/'.$product->img) }}" alt="" /></td>
                    <td>{{$product->state}}</td>
                </tr>
    
            @endforeach
        </table>
    
    </div>
</div>

   



@endsection