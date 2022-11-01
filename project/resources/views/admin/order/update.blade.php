

@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')


<div class="card">
    <div class="card-body">
        <h3 class="card-title">Update Order</h3>
        {{-- @if(session('errors1'))
            <div>
                {{session('errors1')}}
            </div>
            @endif --}}
        @php
        if(count($errors) > 0){
            echo "<p class='alert alert-danger'>Error: $errors[0]</p>";
        }
        @endphp
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="{{ url('admin/order/postUpdate/'.$order->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row card-body">
            <div class="col-6 form-group">
                <label for="txt-name">Customer</label>
                <select name="customer_id"  class="form-control"  >     
                     @foreach ($customer as $supID)
                    <option value="{{$supID->id}}">{{$supID->name}}</option>
                    @endforeach 
                </select>
            </div>
            <div class="col-6 form-group">
                <label for="txt-name">Name</label>
                <input type="text" class="form-control" id="txt-name" name="name" placeholder="Username" value="{{$order->name}}">
            </div>
            <div class="col-6 form-group">
                <label for="txt-name">Address</label>
                <input type="text" class="form-control" id="txt-name" name="address" placeholder="Address" value="{{$order->address}}">
            </div>
            <div class="col-6 form-group">
                <label for="txt-name">Country</label>
                <input type="text" class="form-control" id="txt-name" name="country" placeholder="Country" value="{{$order->country}}">
            </div>
            <div class="col-6 form-group">
                <label for="txt-name">Phone</label>
                <input type="text" class="form-control" id="txt-name" name="phone" placeholder="Phone" value="{{$order->phone}}">
            </div>
            <div class="col-6 form-group">
                <label for="txt-name">Email</label>
                <input type="text" class="form-control" id="txt-name" name="email" placeholder="Email" value="{{$order->email}}">
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary ">Submit</button>
        </div>
    </form>
    
    
</div>
@endsection