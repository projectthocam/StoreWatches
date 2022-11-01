@extends('admin.layout.layout')
@section('title','product index')
@section('content')

<div class="card">
   
        
   
    <div class="card-body">
        <h2 class="text-center mb-3">Supplier : {{$supplier->name}}</h2>
        <table class="table table-bordered">
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>State</th>
             
            </tr>
            @foreach($supplier->products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td> <img src="{{ asset($product->img) }}" alt="" /></td>
                    <td>{{$product->state}}</td>
                </tr>
    
            @endforeach
        </table>
    
    </div>
</div>

   



@endsection