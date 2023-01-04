@extends('layouts.head')

@section('content')
  <center>
    <div class="bg-white" style="width:950px;margin-top:100px;height:430px">
        @foreach($product as $products)
            <div class="d-flex">
                <img src="{{Storage::url($products->photo)}}" style="width:250px;height:280px;margin-left:30px;margin-top:30px">
                <div style="margin-top:30px;margin-left:30px">
                    <h5 style="font-weight:bold;margin-left:-10px">{{$products->product_name}}</h5>
                    <div class="row d-flex">
                        <div class="col-auto">
                            <p style="color:gray">Detail</p>
                        </div>
                        <div class="col-auto" style="width:500px;margin-left:40px">
                            <p style="text-align:justify">{{$products->detail}}</p>
                        </div>
                    </div>
                    <div class="row d-flex">
                        <div class="col-auto">
                            <p style="color:gray">Price</p>
                        </div>
                        <div class="col-auto ms-5">
                            <p>IDR {{$products->price}}</p>
                        </div>
                    </div>
                    <form class="text-start" action="purchase/addcart" method="POST" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="product_id" value="{{$products->id}}">
                      <div class="row d-flex">
                          <div class="col-auto">
                              <p style="color:gray">Quantity</p>
                          </div>
                          <div class="col-auto ms-3">
                              <input type="text" name="quantity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Quantity" style="width:480px">
                          </div>
                      </div>
                      <div class="row mt-4">
                          <div class="col-auto">
                              <button type="submit" class="btn btn-outline-secondary px-5" style="border-radius:5px">Purchase</button>
                          </div>
                      </div>
                    </form>
                </div>
            </div>
            @break
        @endforeach
    </div>
  </center>

@endsection