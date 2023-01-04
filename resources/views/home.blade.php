@extends('layouts.head')

@section('content')

    <form action="/product/search" method="GET">
      <div class="input-group ms-5" style="width:1400px">
        <input type="text" class="form-control" name="product">
        <div class="input-group-append" style="margin-left:-10px">
            <button class="btn btn-secondary" type="button" style="border-top-left-radius:0px;border-bottom-left-radius:0px">
              <i class="fa fa-search"></i>
            </button>
        </div>
      </div>
    </form>
    <div class="ms-5" style="margin-top:30px">
        <div class="p-1 d-flex" style="background-color:#F7F7F7;width:1400px">
          <p class="ms-3">Gaming</p>
          <a href="/gaming-product" class="ms-2">View All</a>
      </div>
      <div class="mt-1 bg-white pb-3" style="width:1400px;border-bottom-left-radius:5px;border-bottom-right-radius:5px">
        <div class="container text-center d-flex flex-row">
            @php($temp = 1)
            @foreach($product as $products)
            @if($products->category == 'Gaming')
              <div class="col mt-4 ">
                <!-- <form> -->
                  <a href="{{url('product/'.$products->id)}}" class="btn btn-outline-secondary text-start" style="width:200px;margin-left:-95px">
                    <img src="{{asset('uploads/file/'.$products->photo)}}" style="width:195px;height:200px;margin-left:-10px;margin-top:-5px">
                    <p class="overflow-hidden">{{$products->product_name}}</p>
                    <p style="font-weight:bold">IDR {{$products->price}}</p>
                  </a>
                <!-- </form> -->
              </div>
              @php($temp = $temp + 1)
            @endif
            @if($temp == 6)
              @break
            @endif
          @endforeach
        </div>
      </div>
    </div>
    <div class="ms-5" style="margin-top:30px">
        <div class="p-1 d-flex" style="background-color:#F7F7F7;width:1400px">
          <p class="ms-3">Camera</p>
          <a href="/camera-product" class="ms-2">View All</a>
      </div>
      <div class="mt-1 bg-white pb-3" style="width:1400px;border-bottom-left-radius:5px;border-bottom-right-radius:5px">
        <div class="container text-center d-flex flex-row">
            @php($temp = 1)
            @foreach($product as $products)
            @if($products->category == 'Camera')
              <div class="col mt-4">
                <a href="{{url('product/'.$products->id)}}" class="btn btn-outline-secondary text-start" style="width:200px;margin-left:-95px">
                  <img src="{{asset('uploads/file/'.$products->photo)}}" style="width:195px;height:200px;margin-left:-10px;margin-top:-5px">
                  <p class="overflow-hidden">{{$products->product_name}}</p>
                  <p style="font-weight:bold">IDR {{$products->price}}</p>
                </a>
              </div>
              @php($temp = $temp + 1)
            @endif
            @if($temp == 6)
              @break
            @endif
          @endforeach
        </div>
      </div>
    </div>
    <div class="ms-5" style="margin-top:30px">
        <div class="p-1 d-flex" style="background-color:#F7F7F7;width:1400px">
          <p class="ms-3">Sport</p>
          <a href="/sport-product" class="ms-2">View All</a>
      </div>
      <div class="mt-1 bg-white pb-3" style="width:1400px;border-bottom-left-radius:5px;border-bottom-right-radius:5px">
        <div class="container text-center d-flex flex-row">
            @php($temp = 1)
            @foreach($product as $products)
            @if($products->category == 'Sport')
              <div class="col mt-4">
                <a href="{{url('product/'.$products->id)}}" class="btn btn-outline-secondary text-start" style="width:200px;margin-left:-95px">
                  <img src="{{asset('uploads/file/'.$products->photo)}}" style="width:195px;height:200px;margin-left:-10px;margin-top:-5px">
                  <p class="overflow-hidden">{{$products->product_name}}</p>
                  <p style="font-weight:bold">IDR {{$products->price}}</p>
                </a>
              </div>
              @php($temp = $temp + 1)
            @endif
            @if($temp == 6)
              @break
            @endif
          @endforeach
        </div>
      </div>
    </div>


@endsection