@extends('layouts.head')

@section('content')
  <center>
    @foreach($data as $history)
    <div class="mt-3 bg-primary d-flex" style="width:800px;height:50px;border-bottom-left-radius:5px;border-bottom-right-radius:5px">
        <p style="color:white;line-height:45px;margin-left:270px">Transaction Date {{$history->order_date}}</p>
        <i class="fa-solid fa-chevron-down" style="color:white;line-height:45px;margin-left:200px" data-bs-toggle="collapse" href="#collapse{{$history->id}}" role="button" aria-expanded="false" aria-controls="collapse{{$history->id}}"></i>
    </div>
    <div class="collapse" id="collapse{{$history->id}}" style="width:800px">
        <div class="card card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col" rowspan="2" style="font-weight:bold">Title</th>
                <th scope="col">Quantity</th>
                <th scope="col">Sub Price</th>
                </tr>
            </thead>
            <tbody class="table">
                <?php $total = 0; $totalQty=0;?>
                @foreach($history->order as $d)
                <tr>
                    <td scope='col'>{{$d->product_name}}</td>
                    <td scope='col'>{{$d->quantity}}</td>
                    <td scope='col'>IDR {{$d->product_price}}</td>
                </tr>
                <?php $total+=($d->product_price*$d->quantity); $totalQty+=$d->quantity; ?>
                @endforeach
                <tr>
                    <th scope="col">Total</th>
                    <th scope="col">{{$totalQty}} item(s)</th>
                    <th scope="col">IDR {{$total}}</th>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
    @endforeach

  </center>
@endsection
