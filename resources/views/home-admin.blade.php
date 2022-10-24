<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/41a6b3060e.js" crossorigin="anonymous"></script>
</head>
  <body style="background-color:#ECECEC;height:1600px">
      <nav class="navbar navbar-expand-lg navbar-dark bg-white shadow-sm p-3 mb-5 bg-body rounded">
        <div class="container-fluid">
        <a class="navbar-brand text-dark" href="/">Barbatos Shop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-secondary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Category</a>
              <ul class="dropdown-menu dropdown-menu-white">
                <li><a class="dropdown-item text-secondary" href="/gaming-product">Gaming</a></li>
                <li><a class="dropdown-item text-secondary" href="/sport-product">Camera</a></li>
                <li><a class="dropdown-item text-secondary" href="/camera-product">Sport</a></li>
              </ul>
            </li>
          </ul>
            <a href="/manage-product" style="text-decoration:none;color:gray;margin-left:20px">Manage Product</a>
        </div>
    </div>
      <a href="/login" class="float-end text-secondary" style="text-decoration:none">Login</a>
      <a href="/register" class="float-end text-secondary ms-4" style="text-decoration:none;margin-right:140px">Register</a>
  </nav>
  <div class="input-group ms-5" style="width:1400px">
    <input type="text" class="form-control">
    <div class="input-group-append" style="margin-left:-10px">
      <button class="btn btn-secondary" type="button" style="border-top-left-radius:0px;border-bottom-left-radius:0px">
        <i class="fa fa-search"></i>
      </button>
    </div>
  </div>
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
                  <button type="submit" class="btn btn-outline-secondary text-start" style="width:200px;margin-left:-95px">
                    <a href="/user-detail-product" onmouseover="this.style.color='white';" onmouseout="this.style.color='gray';" style="text-decoration:none;color:gray">
                      <img src="{{Storage::url($products->photo)}}" style="width:195px;height:200px;margin-left:-10px;margin-top:-5px">
                      <p class="overflow-hidden">{{$products->product_name}}</p>
                      <p style="font-weight:bold">IDR {{$products->price}}</p>
                    </a>
                  </button>
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
                <form action="post">
                  <button type="submit" class="btn btn-outline-secondary text-start" style="width:200px;margin-left:-95px">
                    <img src="{{Storage::url($products->photo)}}" style="width:195px;height:200px;margin-left:-10px;margin-top:-5px">
                    <p class="overflow-hidden">{{$products->product_name}}</p>
                    <p style="font-weight:bold">IDR {{$products->price}}</p>
                  </button>
                </form>
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
                <form action="post">
                  <button type="submit" class="btn btn-outline-secondary text-start" style="width:200px;margin-left:-95px">
                    <img src="{{Storage::url($products->photo)}}" style="width:195px;height:200px;margin-left:-10px;margin-top:-5px">
                    <p class="overflow-hidden">{{$products->product_name}}</p>
                    <p style="font-weight:bold">IDR {{$products->price}}</p>
                  </button>
                </form>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

