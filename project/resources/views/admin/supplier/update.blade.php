@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')
<div class="card">
    <div class="card-body">
        <h3 class="card-title">Update Product</h3>
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
    <form role="form" action="{{ url('admin/supplier/postUpdate/'.$sup->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row card-body">
            <div class="col-6 form-group">
                <label for="txt-name">Name</label>
                <input type="text" class="form-control" id="txt-name" name="name" placeholder="Input Name" value="{{$sup->name}}">
            </div>
            <div class="col-6 form-group">
                <label for="txt-name">Logo</label>
                <input type="file" class="form-control" id="txt-name" name="image" placeholder="Input Image" value="{{$sup->logo}}">
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary ">Submit</button>
        </div>
    </form>
    
    
</div>

   



@endsection