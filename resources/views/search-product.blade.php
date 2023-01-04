@extends('layouts.head')

@section('content')
    <form action="/product/search" method="GET">
      <div class="input-group ms-5" style="width:1400px">
        <input type="text" class="form-control" name="product">
        <div class="input-group-append">
          <button class="btn btn-secondary" type="button">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <div class="ms-5" style="margin-top:30px">
        <div class="p-1 d-flex" style="background-color:#F7F7F7;width:1400px">
          <p class="ms-3">Search Result</p>
      </div>
    </div>
    <div class="mt-1 bg-white pb-3 ms-5" style="width:1400px;border-bottom-left-radius:5px;border-bottom-right-radius:5px">
      <div class="container text-center d-flex flex-row ms-4"> 
    @php($temp = 0)
      @foreach($product as $products)
          @if($temp == 0 or $temp % 5 == 0)
                  <div class="mt-4" style="margin-left:80px">
                      <form action="post">
                          <button type="submit" class="btn btn-outline-secondary text-start" style="width:200px;margin-left:-95px">
                          <img src="{{asset('uploads/file/'.$products->photo)}}" style="width:195px;height:200px;margin-left:-10px;margin-top:-5px">
                          <p class="overflow-hidden">{{$products->product_name}}</p>
                          <p style="font-weight:bold">IDR {{$products->price}}</p>
                          </button>
                      </form>
                  </div>
              @else
                  <div class="mt-4" style="margin-left:150px">
                      <form action="post">
                          <button type="submit" class="btn btn-outline-secondary text-start" style="width:200px;margin-left:-95px">
                          <img src="{{asset('uploads/file/'.$products->photo)}}" style="width:195px;height:200px;margin-left:-10px;margin-top:-5px">
                          <p class="overflow-hidden">{{$products->product_name}}</p>
                          <p style="font-weight:bold">IDR {{$products->price}}</p>
                          </button>
                      </form>
                  </div>
              @endif
              @php($temp = $temp + 1)
        @if($temp % 5 == 0)
          </div><div class="container text-center d-flex flex-row ms-4"> 
        @endif
        @if($temp == 10)
          @break
        @endif
      @endforeach
    </div>
    </div>
@endsection