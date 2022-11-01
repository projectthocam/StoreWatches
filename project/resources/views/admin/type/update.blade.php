@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')



<div class="card">
   
        
   
    <div class="card-body">
        <h3 class="card-title">Update Type</h3>
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
    <form role="form" action="{{ url('admin/type/postUpdate/'.$s->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="card-body">
            <div class="form-group ">
                <label for="txt-name">Type ID</label>
                <input type="text" class="form-control" id="txt-name" name="id" placeholder="Input Supplier Name"  value="{{$s->id}}" readonly>
            </div>
            <div class="form-group">
                <label for="txt-name">Type Name</label>
                <input type="text" class="form-control" id="txt-name" name="nameinput" placeholder="Input Supplier Name" value="{{$s->name}}">
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary ">Submit</button>
        </div>
    </form>
    
    
</div>
@endsection