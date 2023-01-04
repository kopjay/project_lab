@extends('layouts.head')
@section('content')
  <center>
    <?php $priceTotal = 0; ?>
    @foreach($data as $cart)
    <div class="mt-3 bg-white" style="width:800px;border-bottom-left-radius:5px;border-bottom-right-radius:5px">
        <div class="d-flex">
            <img src="{{asset('uploads/file/'.$cart->product->photo)}}" style="width:195px;height:200px">
            <div>
                <h5 style="width:300px;margin-left:20px;margin-top:20px;text-align:left">{{$cart->product->product_name}}</h5>
                <p style="text-align:left;margin-left:20px">Quantity: {{$cart->quantity}}</p>
                <p style="text-align:left;margin-left:20px">Total Price: IDR {{$cart->product->price}}</p>
            </div>
            <form action="{{url('cart/delete/'.$cart->id)}}" method="POST">
              @csrf
              <input type="hidden" name="_method" value="DELETE">
              <button type="submit" class="btn btn-outline-danger" style="height:50px;width:50px;margin-top:20px;margin-left:190px">
                  <i class="fa-solid fa-trash"></i>
              </button>
            </form>
        </div>
    </div>
    <?php $priceTotal+=($cart->product->price * $cart->quantity);?>
    @endforeach
    </center>
    <div class="mt-4 d-flex mb-5" style="margin-left:800px">
        <div class="mt-2">
            <p>Total Price:</p>
        </div>
        <h5 class="ms-2 me-4 mt-2">IDR {{$priceTotal}}</h5>
        @forelse($data as $cart)
          <form action="{{url('purchase/checkout')}}" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            <button type="submit" class="btn btn-outline-success" style="width:150px;height:40px">Purchase</button>
          </form>
        @empty
           
        @endforelse

        
    </div>
 @endsection