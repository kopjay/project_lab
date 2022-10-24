<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
              <a class="nav-link dropdown-toggle text-secondary" role="button" data-bs-toggle="dropdown" aria-expanded="false">Category</a>
              <ul class="dropdown-menu dropdown-menu-white">
                <li><a class="dropdown-item text-secondary" href="#">Action</a></li>
                <li><a class="dropdown-item text-secondary" href="#">Another action</a></li>
                <li><a class="dropdown-item text-secondary" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
        </div>
    </div>
      <a href="/login" class="float-end text-secondary" style="text-decoration:none">Login</a>
      <a href="/register" class="float-end text-secondary ms-4" style="text-decoration:none;margin-right:140px">Register</a>
  </nav>
  <center>
    <div class="bg-white" style="width:950px;margin-top:100px;height:330px">
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
                </div>
            </div>
            @break
        @endforeach
    </div>
  </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>