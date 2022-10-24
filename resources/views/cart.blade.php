<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart</title>
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
                <li><a class="dropdown-item text-secondary" href="/sport-product">Camera</a></li>
                <li><a class="dropdown-item text-secondary" href="/camera-product">Sport</a></li>
              </ul>
            </li>
          </ul>
          </div>
            </div>
            <!-- FOR GUEST  -->
            <!-- <a href="/login" class="float-end text-secondary" style="text-decoration:none">Login</a>
            <a href="/register" class="float-end text-secondary ms-4" style="text-decoration:none;margin-right:140px">Register</a> -->
            
            <!-- FOR USER -->
            <a href="/cart">
                <i class="fa-solid fa-cart-shopping" style="color:#727272;margin-right:10px"></i>
            </a>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown" style="margin-right:100px">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-secondary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Steve Rogers</a>
                    <ul class="dropdown-menu dropdown-menu-white">
                        <li><a class="dropdown-item text-secondary" href="/profile">Profile</a></li>
                        <li><a class="dropdown-item text-secondary" href="/history">History</a></li>
                    </ul>
                    </li>
                </ul>
                </div>
  </nav>
  <center>
    @foreach($product->take(3) as $products)
    <div class="mt-3 bg-white" style="width:800px;border-bottom-left-radius:5px;border-bottom-right-radius:5px">
        <div class="d-flex">
            <img src="{{Storage::url($products->photo)}}" style="width:195px;height:200px">
            <div>
                <h5 style="width:300px;margin-left:20px;margin-top:20px;text-align:left">{{$products->product_name}}</h5>
                <p style="text-align:left;margin-left:20px">Quantity: 20</p>
                <p style="text-align:left;margin-left:20px">Total Price: IDR {{$products->price}}</p>
            </div>
            <button type="button" class="btn btn-outline-danger" style="height:50px;width:50px;margin-top:20px;margin-left:190px">
                <i class="fa-solid fa-trash"></i>
            </button>
        </div>
    </div>
    @endforeach
    </center>
    <div class="mt-4 d-flex mb-5" style="margin-left:800px">
        <div class="mt-2">
            <p>Total Price:</p>
        </div>
        <h5 class="ms-2 me-4 mt-2">IDR 210000</h5>
        <button type="submit" class="btn btn-outline-success" style="width:150px;height:40px">Purchase</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

