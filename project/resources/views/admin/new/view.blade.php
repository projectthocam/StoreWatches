

@extends('admin.layout.layout')
@section('title','product index')
@section('content')

<div class="card">
   
        
   
    <div class="card-body">
        <h2 class="text-center mb-3">Supplier : {{$new->name}}</h2>
        <table class="table table-bordered">
            <tr>
                <th>User ID</th>
                <th>Product ID</th>
                <th>Parent ID</th>
                <th>Title</th>
                <th>Author</th>
           
            </tr>
            
                <tr>
                    <td>{{$new->user_id}}</td>
                    <td>{{$new->product_id}}</td>
                    <td>{{$new->parent_id}}</td>
                    <td>{{$new->title}}</td>
                    <td>{{$new->author}}</td>
           
                </tr> 
        
        </table>
    </div>
</div>

   



@endsection