



@extends('admin.layout.layout')
@section('title', 'product index')
@section('content')



<div class="card">
    <div class="card-body">
        <h2 class="text-center">News</h2>
        <div class="d-flex justify-content-end mb-2">
            <button href="#" type="button" class="btn btn-primary col-2" data-bs-toggle="modal" data-bs-target="#createForm"> Create News </button>

        </div>

        <table id="product" class="table">
         
            
            <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Product ID</th>
                <th>Parent ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($new as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->user_id}}</td>
                <td>{{$item->product_id}}</td>
                <td>{{$item->parent_id}}</td> 
                <td>{{$item->title}}</td>
                <td>{{$item->author}}</td>    
                <td >
                    <a class="btn btn-primary btn-sm" href="{{url('admin/new/view/'.$item->id)}}">
                        <i class="fas fa-folder"></i> View
                    </a>
                    <a class="btn btn-info btn-sm" href="{{url('admin/new/update/'.$item->id)}}">
                        <i class="fas fa-pencil-alt"></i> Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href="{{url('admin/new/delete/'.$item->id)}}" onclick="return confirm ('Are you sure to want to delete this')">
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
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Create News</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- form start -->
            <form role="form" action="{{ url('admin/new/postCreate') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row card-body">
                    <div class="col-6 form-group">
                        <label for="txt-name">User</label>
                        <select name="user_id" id="" class="form-control">
                            @foreach ($user as $customerID)
                            <option value="{{$customerID->id}}">{{$customerID->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6 form-group">
                        <label for="txt-name">Product</label>
                        <select name="product_id" id="" class="form-control">
                            @foreach ($product as $productID)
                            <option value="{{$productID->id}}">{{$productID->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6 form-group">
                        <label for="txt-name">Parent</label>
                        <input type="text" class="form-control" id="text_parent" name="parent_id" placeholder="Parent">
                        <span class="span-alert" id="error_parent"></span>
                    </div>
                    <div class="col-6 form-group">
                        <label for="txt-name">Title</label>
                        <input type="text" class="form-control" id="text_title" name="title" placeholder="Title">
                        <span class="span-alert" id="error_title"></span>

                    </div>
                    <div class="col-6 form-group">
                        <label for="txt-name">Author</label>
                        <input type="text" class="form-control" id="txt_author" name="author" placeholder="Author">
                        <span class="span-alert" id="error_author"></span>
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

    var checkValidation = function (){
       var flag = kiemtrarong('#text_parent','#error_parent') 
       & kiemtrarong('#text_title','#error_title') 
       & kiemtrarong('#txt_author','#error_author') ;
       
       
      
  
       return Boolean(flag) ; //Cách 2 !!flag
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
