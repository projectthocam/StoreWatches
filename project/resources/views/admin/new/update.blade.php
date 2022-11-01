



@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')


<div class="card">
    <div class="card-body">
        <h3 class="card-title">Update New</h3>
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
    <form role="form" action="{{ url('admin/new/postUpdate/'.$new->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row card-body">
            <div class="col-6 form-group">
                <label for="txt-name">User</label>
                <select name="user_id"  class="form-control"  >     
                     @foreach ($user as $supID)
                    <option value="{{$supID->id}}">{{$supID->name}}</option>
                    @endforeach 
                </select>
            </div>
            <div class="col-6 form-group">
                <label for="txt-name">Product</label>
                <select name="product_id"  class="form-control"  >     
                     @foreach ($product as $supID)
                    <option value="{{$supID->id}}">{{$supID->name}}</option>
                    @endforeach 
                </select>
            </div>
            <div class="col-6 form-group">
                <label for="txt-name">Parent </label>
                <input type="text" class="form-control" id="txt-name" name="parent_id" placeholder="Parent" value="{{$new->parent_id}}">
            </div>
            <div class="col-6 form-group">
                <label for="txt-name">Title</label>
                <input type="text" class="form-control" id="txt-name" name="title" placeholder="Title" value="{{$new->title}}">
            </div>
            <div class="col-6 form-group">
                <label for="txt-name">Author</label>
                <input type="text" class="form-control" id="txt-name" name="author" placeholder="Author" value="{{$new->author}}">
            </div>
    
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary ">Submit</button>
        </div>
    </form>
    
    
</div>
@endsection