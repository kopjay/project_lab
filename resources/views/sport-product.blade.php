<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/41a6b3060e.js" crossorigin="anonymous"></script>
</head>
  <body style="background-color:#ECECEC">
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
                <li><a class="dropdown-item text-secondary" href="/camera-product">Camera</a></li>
                <li><a class="dropdown-item text-secondary" href="/sport-product">Sport</a></li>
              </ul>
            </li>
          </ul>
        </div>
    </div>
      <a href="/login" class="float-end text-secondary" style="text-decoration:none">Login</a>
      <a href="/register" class="float-end text-secondary ms-4" style="text-decoration:none;margin-right:140px">Register</a>
  </nav>
    <div style="margin-top:30px;margin-left:100px">
        <div class="p-1 d-flex" style="background-color:#F7F7F7;width:1300px">
          <p class="ms-3">Sport</p>
      </div>
    </div>
    <div class="mt-1 bg-white pb-3" style="width:1300px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;margin-left:100px">
      <div class="container text-center d-flex flex-row ms-4"> 
    @php($temp = 0)
      @foreach($product as $products)
        @if($products->category == 'Sport')
            @if($temp == 0 or $temp % 5 == 0)
                    <div class="mt-4" style="margin-left:80px">
                        <form action="post">
                            <button type="submit" class="btn btn-outline-secondary text-start" style="width:200px;margin-left:-95px">
                            <img src="{{Storage::url($products->photo)}}" style="width:195px;height:200px;margin-left:-10px;margin-top:-5px">
                            <p class="overflow-hidden">{{$products->product_name}}</p>
                            <p style="font-weight:bold">IDR {{$products->price}}</p>
                            </button>
                        </form>
                    </div>
                @else
                    <div class="mt-4" style="margin-left:150px">
                        <form action="post">
                            <button type="submit" class="btn btn-outline-secondary text-start" style="width:200px;margin-left:-95px">
                            <img src="{{Storage::url($products->photo)}}" style="width:195px;height:200px;margin-left:-10px;margin-top:-5px">
                            <p class="overflow-hidden">{{$products->product_name}}</p>
                            <p style="font-weight:bold">IDR {{$products->price}}</p>
                            </button>
                        </form>
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
    <nav aria-label="Page navigation example" class="mt-3" style="margin-right:130px">
      <ul class="pagination justify-content-end">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>