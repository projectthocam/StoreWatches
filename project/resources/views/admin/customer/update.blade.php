@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')


<div class="card">
    <div class="card-body">
        <h3 class="card-title">Update Customer</h3>
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
    <form role="form" action="{{ url('admin/customer/postUpdate/'.$customer->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row card-body">
            <div class="col-6 form-group">
                <label for="txt-name">Name</label>
                <input type="text" class="form-control" id="txt-name" name="name" placeholder="Username" value="{{$customer->name}}">
            </div>
            <div class="col-6 form-group">
                <label for="txt-name">UserName</label>
                <input type="text" class="form-control" id="txt-name" name="user_name" placeholder="Username" value="{{$customer->user_name}}">
            </div>
            <div class="col-6 form-group">
                <label for="txt-name">Password</label>
                <input type="password" class="form-control" id="txt-name" name="pass_word" placeholder="Password" value="{{$customer->pass_word}}">
            </div>
            <div class="col-6 form-group">
                <label for="txt-name">Phone</label>
                <input type="text" class="form-control" id="txt-name" name="phone" placeholder="phone" value="{{$customer->phone}}">
            </div>
            <div class="col-6 form-group">
                <label for="txt-name">Address</label>
                <input type="text" class="form-control" id="txt-name" name="address" placeholder="address" value="{{$customer->address}}">
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary ">Submit</button>
        </div>
    </form>
    
    
</div>
@endsection