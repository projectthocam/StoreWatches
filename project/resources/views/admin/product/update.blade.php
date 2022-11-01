@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')
<div class="card">
    <div class="card-body">
        <h3 class="card-title">Update Product</h3>

        @php
        if(count($errors) > 0){
            echo "<p class='alert alert-danger'>Error: $errors[0]</p>";
        }
        @endphp
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="{{ url('admin/product/postUpdate/'.$p->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
   
        <div class="row card-body">
            <div class="col-6 form-group">
                <label for="txt-name">Supplier</label>
                <select name="supplier_id"  class="form-control"  >     
                     @foreach ($s as $supID)
                    <option value="{{$supID->id}}">{{$supID->name}}</option>
                    @endforeach 
                </select>
            </div>
            <div class="col-6 form-group">
                <label for="txt-name">Type</label>
                <select name="type_id" id="" class="form-control">
                    @foreach ($t as $typeID)
                    <option value="{{$typeID->id}}">{{$typeID->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-6 form-group">
                <label for="txt-name">Name</label>
                <input type="text" class="form-control" id="txt-name" name="name" placeholder="Input Name" value="{{$p->name}}">
            </div>
            <div class="col-6 form-group">
                <label for="txt-name">Price</label>
                <input type="text" class="form-control" id="txt-name" name="price" placeholder="Input Price" value="{{$p->price}}">
            </div>
            <div class="col-12 form-group">
                <label for="txt-name">Information</label>
                <textarea type="text" class="form-control" id="txt-name" name="information" placeholder="Input Information" value="{{$p->information}}">{{$p->information}}</textarea>
            </div>
            <div class="col-12 form-group">
                <label for="txt-name">Description</label>
                <textarea type="text" class="form-control" id="txt-name" name="descript" placeholder="Input Information" value="{{$p->descript}}">{{$p->descript}}</textarea>
            </div>
        
            <div class="col-4 form-group">
                <label for="txt-name">State</label>
                <select name="state" id="" class="form-control">                            
                    <option value="Còn hàng">Còn hàng</option> 
                    <option value="Hết hàng">Hết hàng</option>       
                </select>
            </div>
            <div class="col-4 form-group">
                <label for="txt-name">Image</label>
                <input type="file" class="form-control" id="txt-name" name="image" placeholder="Input Image" value="{{$p->img}}">
            </div>
            <div class="col-4 form-group">
                <label for="txt-name">Image</label>
                <input type="file" class="form-control" id="txt-name" name="image" placeholder="Input Image" value="{{$p->img}}">
            </div>
            <div class="col-4 form-group">
                <label for="txt-name">Quantity</label>
                <input type="text" class="form-control" id="txt-name" name="quantity" placeholder="Input Quantity" value="{{$p->quantity}}">
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary ">Submit</button>
        </div>
    </form>
    
    
</div>

   



@endsection