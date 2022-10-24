<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
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
    <div style="margin-top:60px">
        <div class="p-2" style="background-color:#F7F7F7;width:600px">
          <h6 style="font-weight:bold">Profile</h6>
      </div>
      <div class="mt-1 bg-white pb-3" style="width:600px;border-bottom-left-radius:5px;border-bottom-right-radius:5px">
        <form class="text-start">
          <div class="px-5">
            <label for="exampleInputEmail1" class="form-label mt-3" style="text-align:left">Name</label>
            <input type="text" name="name" class="form-control" value="Steve Rogers" disabled readonly>
          </div>
          <div class="mb-3 px-5">
            <label for="exampleInputEmail1" class="form-label mt-3" style="text-align:left">Email</label>
            <input type="email" name="email" class="form-control" value="steverogers@gmail.com" disabled readonly>
          </div>
          <div class="mb-3 px-5">
            <label for="exampleInputPassword1" class="form-label text-start">Gender</label>
            <input type="text" name="name" class="form-control" value="Male" disabled readonly>
          </div>
           <div class="mb-3 px-5">
            <label for="exampleInputPassword1" class="form-label text-start">Date of Birth</label>
            <input type="text" name="dob" class="form-control" value="1978-02-17" disabled readonly>
           </div>
          <div class="mb-3 px-5">
            <label for="exampleInputPassword1" class="form-label text-start">Country</label>
            <input type="text" name="country" class="form-control" value="United States" disabled readonly>
          </div>
        </form>
      </div>
    </div>
  </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>