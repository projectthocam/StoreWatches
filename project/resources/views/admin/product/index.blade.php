@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')








<div class="card">
    <div class="card-body">
        <h2 class="text-center ">PRODUCT</h2>
        <div class="d-flex justify-content-end mb-3 ">  <button href="#" type="button" class="btn btn-primary col-2" data-bs-toggle="modal" data-bs-target="#createForm"> Create Product</button></div>

        <table id="product" class="table">
      
    
            <thead>
            <tr>
                <th>Product Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Quantity</th>
                <th>State</th>
                <th>Action</th>
                
            </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{number_format($item->price)}}</td>
                
                <td><img src='{{ asset($item->img)}}' alt=""></td>
                <td>{{$item->quantity}}</td>
                <td>{{$item->state}}</td>
               
        
                
                <td >
                    <a class="btn btn-primary btn-sm" href="{{url('admin/product/view/'.$item->id)}}">
                        <i class="fas fa-folder"></i> View
                    </a>
                    <a class="btn btn-info btn-sm" href="{{url('admin/product/update/'.$item->id)}}">
                        <i class="fas fa-pencil-alt"></i> Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href="{{url('admin/product/delete/'.$item->id)}}" onclick="return confirm ('Are you sure to want to delete this')">
                        <i class="fas fa-trash"></i> Delete
                    </a>
                </td>
            </tr>
            @endforeach
            
        </table>
    </div>
</div>

<!-- Modal Create-->
<div class="modal fade" id="createForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
      <div class="modal-content ">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Create Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- form start -->
            <form role="form" action="{{ url('admin/product/postCreate') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row card-body">
                    <div class="col-6 form-group">
                        <label for="txt-name">Supplier</label>
                        <select name="supplier_id" id="txt_sup" class="form-control">
                            @foreach ($suppliers as $supID)
                            <option value="{{$supID->id}}">{{$supID->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6 form-group">
                        <label for="txt-name">Type</label>
                        <select name="type_id" id="txt_type" class="form-control">
                            @foreach ($types as $typeID)
                            <option value="{{$typeID->id}}">{{$typeID->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6 form-group">
                        <label for="txt-name">Name</label>
                        <input type="text" class="form-control" id="txt_name" name="name" placeholder="Input Name">
                        <span class="span-alert" id="error_name"></span>
                    </div>
                    <div class="col-6 form-group">
                        <label for="txt-name">Price</label>
                        <input type="text" class="form-control" id="txt_price" name="price" placeholder="Input Price">
                        <span class="span-alert" id="error_price"></span>
                    </div>
                    <div class="col-12 form-group">
                        <label for="txt-name">Information</label>
                        <textarea type="text" class="form-control" id="txt_infor" name="information" placeholder="Input Information"></textarea>
                        <span class="span-alert" id="error_infor"></span>
                    </div>
                    <div class="col-12 form-group">
                        <label for="txt-name">Description</label>
                        <textarea type="text" class="form-control" id="txt_decript" name="descript" placeholder="Input Description"></textarea>
                        <span class="span-alert" id="error_decript"></span>
                    </div>
                   
                    <div class="col-3 form-group">
                        <label for="txt-name">State</label>
                        <select name="state" id="" class="form-control">                            
                            <option value="Còn hàng">Còn hàng</option> 
                            <option value="Hết hàng">Hết hàng</option>       
                        </select>
                    </div>
                    
                    <div class="col-3 form-group">
                        <label for="txt-name">Quantity</label>
                        <input type="text" class="form-control" id="txt_quantity" name="quantity" placeholder="Quantity">
                        <span class="span-alert" id="error_quantity"></span>
                    </div>
                    <div class="col-6 form-group">
                        <label for="txt-name">Thumb</label>
                        <input type="file" class="form-control" id="txt_img" name="img" placeholder="Input Image">
                        <span class="span-alert" id="error_img"></span>    
                    </div>
                    <div class="col-6 form-group">
                        <label for="txt-name">Extra Image</label>
                        <input type="file" class="form-control" id="txt_img" name="img_product[]" multiple placeholder="Input Image">
                        <span class="span-alert" id="error_img"></span>    
                    </div>
                    
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" id="dangKy" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        {{-- <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Create</button>
        </div> --}}
      </div>
    </div>
  </div>

  <script>

    var checkValidation = function (e){
      
       var flag = kiemtrarong('#txt_name','#error_name') & kiemtrarongCKEDITOR('txt_infor','#error_infor') & kiemtrarongCKEDITOR('txt_decript','#error_decript') 
       kiemtrarong('#txt_quantity','#error_quantity') & kiemtrarong('#txt_img','#error_img') ;
        var flag1 =  kiemtrarong('#txt_price','#error_price');
        flag &= flag1;
        if(flag1){
            flag &= kiemtralaso('#txt_price','#error_price');
        } 
       
   
       return Boolean(flag) ; //Cách 2 !!flag
    }
    
    function kiemtralaso(value,error){
        var bientam = document.querySelector(value).value;
        var regular = /^[0-9]+$/;
        if(!regular.test(bientam)){
            document.querySelector(error).innerHTML = "Phải là số";
            document.querySelector(value).style.border = "1px solid red";
            console.log(regular.test(bientam));
            console.log(document.querySelector(error));
            return false;
        }else{
            document.querySelector(error).innerHTML = "";
            document.querySelector(value).style.border = "";
            return true;
        }
    }
    function kiemtraprice(value,error){
        var bientam = document.querySelector(value).value;
        var regular = /^\d+(.\d{3})*(\.\d{1,2})?$/;
        if(!regular.test(bientam)){
            document.querySelector(error).innerHTML = "Phải là số";
            document.querySelector(value).style.border = "1px solid red";
            console.log(regular.test(bientam));
            console.log(document.querySelector(error));
            return false;
        }else{
            document.querySelector(error).innerHTML = "";
            document.querySelector(value).style.border = "";
            return true;
        }
    }

 function kiemtrarongCKEDITOR(value,error){
        var bientam = CKEDITOR.instances[value].getData();
        if(bientam === ""){
            document.querySelector(error).innerHTML = "Không được để trống";
           
            return false;
        }else{
           
            document.querySelector(error).innerHTML = "";
      
           
            return true;
        }
    }

    function kiemtrarong(value,error){
        var bientam = document.querySelector(value).value;
        if(bientam === ""){
            document.querySelector(error).innerHTML = "Không được để trống";
            document.querySelector(value).style.border = "1px solid red";
            return false;
        }else{
           
            document.querySelector(error).innerHTML = "";
            document.querySelector(value).style.border = "";
           
            return true;
        }
    }

    document.querySelector('#dangKy').onclick = checkValidation;
</script>
@endsection
