@extends('layouts.head')

@section('content')
    <div style="margin-top:30px;margin-left:100px">
        <div class="p-1 d-flex" style="background-color:#F7F7F7;width:1300px">
          <p class="ms-3">{{Request::segment(2)}}</p>
      </div>
    </div>
    <div class="mt-1 bg-white pb-3" style="width:1300px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;margin-left:100px">
      <div class="container text-center d-flex flex-row ms-4"> 
    @php($temp = 0)
      @foreach($product as $products)
        @if($products->category == Request::segment(2))
            @if($temp == 0 or $temp % 5 == 0)
              <div class="mt-4" style="margin-left:80px">
                 
                    <a href="{{url('product/'.$products->id)}}" class="btn btn-outline-secondary text-start" style="width:200px;margin-left:-95px">
                      <img src="{{asset('uploads/file/'.$products->photo)}}" style="width:195px;height:200px;margin-left:-10px;margin-top:-5px">
                      <p class="overflow-hidden">{{$products->product_name}}</p>
                      <p style="font-weight:bold">IDR {{$products->price}}</p>
                    </a>
              </div>
            @else
              <div class="mt-4" style="margin-left:150px">
                  
                  <a href="{{url('product/'.$products->id)}}" class="btn btn-outline-secondary text-start" style="width:200px;margin-left:-95px">
                    <img src="{{asset('uploads/file/'.$products->photo)}}" style="width:195px;height:200px;margin-left:-10px;margin-top:-5px">
                    <p class="overflow-hidden">{{$products->product_name}}</p>
                    <p style="font-weight:bold">IDR {{$products->price}}</p>
                  </a>
              </div>
              @endif
              @php($temp = $temp + 1)
        @endif
        @if($temp % 5 == 0)
          </div><div class="container text-center d-flex flex-row ms-4"> 
        @endif
        @if($temp == 10)
          @break
        @endif
      @endforeach
    </div>
    </div>
    <div class="d-flex">
        <div class="mx-auto">
            {{ $product->links() }}
        </div>
    </div>
@endsection