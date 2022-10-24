<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/41a6b3060e.js" crossorigin="anonymous"></script>
</head>
  <body style="background-color:#ECECEC;height:960px">
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
    <div class="input-group-append" style="margin-left:-520px">
        <a href="/manage-product">
            <button class="btn btn-secondary" type="button">
                <i class="fa-regular fa-circle-left"></i>
                Back
            </button>
        </a>
    </div>
    <div style="margin-top:10px">
        <div class="p-2" style="background-color:#F7F7F7;width:600px">
          <h6 style="font-weight:bold;text-align:left;margin-left:15px">Register</h6>
      </div>
    </div>
      <div class="mt-1 bg-white pb-3" style="width:600px;border-bottom-left-radius:5px;border-bottom-right-radius:5px">
        <form class="text-start">
          <div class="mb-3 px-4">
            <label for="exampleInputEmail1" class="form-label mt-2" style="text-align:left">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Name">
          </div>
          <div class="mb-3 px-4">
            <label for="exampleInputPassword1" class="form-label text-start">Category</label>
            <select class="form-select" aria-label="Default select example">
                <option selected disabled>Select a category</option>
                <option value="Gaming">Gaming</option>
                <option value="Camera">Camera</option>
                <option value="Sport">Sport</option>
            </select>
          </div>
          <div class="mb-3 px-4">
            <label for="exampleFormControlTextarea1" class="form-label">Detail</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="detail" placeholder="Enter detail product"></textarea>
          </div>
          <div class="mb-3 px-4">
            <label for="exampleInputPassword1" class="form-label text-start">Price</label>
            <input type="text" name="price" class="form-control" id="exampleInputPassword1" placeholder="Enter Product Price">
          </div>
          <div class="mb-3 px-4">
          <label for="exampleInputPassword1" class="form-label text-start">Photo</label>
            <input type="file" class="form-control" id="inputGroupFile01">
          </div>
          <button type="submit" class="btn btn-outline-secondary px-5" style="border-radius:5px;margin-left:25px">Add</button>
        </form>
      </div>
  </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>