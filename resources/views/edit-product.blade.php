@extends('layouts.head')

@section('content')
  <center>
    <div class="input-group-append" style="margin-left:-520px">
        <a href="/manage-product">
            <button class="btn btn-secondary" type="button">
                <i class="fa-regular fa-circle-left"></i>
                Back
            </button>
        </a>
    </div>
    <div style="margin-top:10px">
        <div class="p-2" style="background-color:#F7F7F7;width:600px">
          <h6 style="font-weight:bold;text-align:left;margin-left:15px">Edit Product</h6>
      </div>
    </div>
      <div class="mt-1 bg-white pb-3" style="width:600px;border-bottom-left-radius:5px;border-bottom-right-radius:5px">
        <form class="text-start" action="{{url('product/update')}}" method="POST" enctype="multipart/form-data">
          @csrf
		  <input type="hidden" name="_method" value="PATCH">
          <input type="hidden" name="id" value="{{$product->id}}">

          <div class="mb-3 px-4">
            <label for="exampleInputEmail1" class="form-label mt-2" style="text-align:left">Name</label>
            <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Name" value="{{$product->product_name}}">
          </div>
          <div class="mb-3 px-4">
            <label for="exampleInputPassword1" class="form-label text-start">Category</label>
            <select class="form-select" aria-label="Default select example" name="category">
                <option selected disabled>Select a category</option>
                <option value="Gaming" {{ ($product->category == 'Gaming')? "selected" : ""}}>Gaming</option>
                <option value="Camera" {{ ($product->category == 'Camera')? "selected" : ""}}>Camera</option>
                <option value="Sport" {{ ($product->category == 'Sport')? "selected" : ""}}>Sport</option>
            </select>
          </div>
          <div class="mb-3 px-4">
            <label for="exampleFormControlTextarea1" class="form-label">Detail</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="detail" placeholder="Enter detail product">{{$product->detail}}</textarea>
          </div>
          <div class="mb-3 px-4">
            <label for="exampleInputPassword1" class="form-label text-start">Price</label>
            <input type="text" name="price" class="form-control" id="exampleInputPassword1" placeholder="Enter Product Price" value="{{$product->price}}">
          </div>
          <div class="mb-3 px-4">
            <label for="exampleInputPassword1" class="form-label text-start">Photo</label>
            <input type="file" class="form-control" name="file" value="{{$product->photo}}">
            <label for="exampleInputPassword1" class="form-label text-start">current : {{$product->photo}}</label>

          </div>
          <button type="submit" class="btn btn-outline-secondary px-5" style="border-radius:5px;margin-left:25px">Add</button>
        </form>
      </div>
  </center>
@endsection