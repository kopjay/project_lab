@extends('layouts.head')

@section('content')
  <center>
    <div class="d-flex" style="margin-left:310px">
      <form action="/manage-product/search" method="GET">
        <div class="input-group ms-5" style="width:250px">
              <input type="text" class="form-control" placeholder="Product Name" name="search">
              <div class="input-group-append" style="margin-left:-10px">
              <button class="btn btn-secondary" type="submit" style="border-top-left-radius:0px;border-bottom-left-radius:0px">
                  <i class="fa fa-search"></i>
              </button>
        </div>
      </form>
    </div>
    <div class="input-group-append" style="margin-left:420px">
        <a href="/add-product">
            <button class="btn btn-secondary" type="button">
                Add Product
                <i class="fa-solid fa-plus"></i>
            </button>
        </a>
    </div>
    </div>
    @foreach($product->take(10) as $products)
    <div class="mt-3 bg-white" style="width:800px;border-bottom-left-radius:5px;border-bottom-right-radius:5px">
        <div class="d-flex">
            <img src="{{asset('uploads/file/'.$products->photo)}}" style="width:195px;height:200px">
            <h5 style="width:300px;margin-left:20px;margin-top:20px">{{$products->product_name}}</h5>
            <a href="{{url('edit-product/'.$products->id)}}" class="btn btn-outline-warning" style="height:50px;width:50px;margin-top:20px;margin-left:160px">
                <i class="fa-sharp fa-solid fa-pencil"></i>
            </a>
            <form action="{{url('delete/'.$products->id)}}" method="POST">
              @csrf
              <input type="hidden" name="_method" value="DELETE">
              <button type="submit" class="btn btn-outline-danger" style="height:50px;width:50px;margin-top:20px;margin-left:10px">
                  <i class="fa-solid fa-trash"></i>
              </button>
            </form>
        </div>
    </div>
    @endforeach
    <div class="d-flex">
      <div class="mx-auto">
        {{ $product->links() }}
      </div>
    </div>
  </center>
@endsection