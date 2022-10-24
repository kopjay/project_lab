<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/41a6b3060e.js" crossorigin="anonymous"></script>
</head>
  <body style="background-color:#ECECEC;height:2500px">
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
  <center>
    <div class="d-flex" style="margin-left:310px">
        <div class="input-group ms-5" style="width:250px">
            <input type="text" class="form-control" placeholder="Product Name">
            <div class="input-group-append" style="margin-left:-10px">
            <button class="btn btn-secondary" type="button" style="border-top-left-radius:0px;border-bottom-left-radius:0px">
                <i class="fa fa-search"></i>
            </button>
            </div>
        </div>
        <div class="input-group-append" style="margin-left:420px">
        <a href="/add-product">
            <button class="btn btn-secondary" type="button">
                Add Product
                <i class="fa-solid fa-plus"></i>
            </button>
        </a>
        </div>
    </div>
    @foreach($product->take(10) as $products)
    <div class="mt-3 bg-white" style="width:800px;border-bottom-left-radius:5px;border-bottom-right-radius:5px">
        <div class="d-flex">
            <img src="{{Storage::url($products->photo)}}" style="width:195px;height:200px">
            <h5 style="width:300px;margin-left:20px;margin-top:20px">{{$products->product_name}}</h5>
            <button type="button" class="btn btn-outline-warning" style="height:50px;width:50px;margin-top:20px;margin-left:160px">
                <i class="fa-sharp fa-solid fa-pencil"></i>
            </button>
            <button type="button" class="btn btn-outline-danger" style="height:50px;width:50px;margin-top:20px;margin-left:10px">
                <i class="fa-solid fa-trash"></i>
            </button>
        </div>
    </div>
    @endforeach
    <nav aria-label="Page navigation example" class="mt-3" style="margin-right:360px">
      <ul class="pagination justify-content-end">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

