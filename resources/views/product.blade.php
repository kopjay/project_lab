@extends('layouts.head')

@section('content')
  <center>
    <div class="bg-white" style="width:950px;margin-top:100px;height:430px">
        <div class="d-flex">
            <img src="{{asset('uploads/file/'.$product->photo)}}" style="width:250px;height:280px;margin-left:30px;margin-top:30px">
            <div style="margin-top:30px;margin-left:30px">
                <h5 style="font-weight:bold;margin-left:-10px">{{$product->product_name}}</h5>
                <div class="row d-flex">
                    <div class="col-auto">
                        <p style="color:gray">Detail</p>
                    </div>
                    <div class="col-auto" style="width:500px;margin-left:40px">
                        <p style="text-align:justify">{{$product->detail}}</p>
                    </div>
                </div>
                <div class="row d-flex">
                    <div class="col-auto">
                        <p style="color:gray">Price</p>
                    </div>
                    <div class="col-auto ms-5">
                        <p>IDR {{$product->price}}</p>
                    </div>
                </div>
                
                @if(Auth::check() && Auth::user()->role== 0)
                <form class="text-start" action="{{url('purchase/addcart')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <div class="row d-flex">
                        <div class="col-auto">
                            <p style="color:gray">Quantity</p>
                        </div>
                        <div class="col-auto ms-3">
                            <input type="text" name="quantity" class="form-control" placeholder="Enter Your Quantity" style="width:480px">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-auto">
                            <button type="submit" class="btn btn-outline-secondary px-5" style="border-radius:5px">Purchase</button>
                        </div>
                    </div>
                </form>
                @else 
                @endif
                
            </div>
        </div>
    </div>
  </center>

@endsection