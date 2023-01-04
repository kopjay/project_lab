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
                                <li><a class="dropdown-item text-secondary" href="/product-category/Gaming">Gaming</a></li>
                                <li><a class="dropdown-item text-secondary" href="/product-category/Camera">Camera</a></li>
                                <li><a class="dropdown-item text-secondary" href="/product-category/Sport">Sport</a></li>
                            </ul>
                        </li>
                    </ul>
                    @if(Auth::check() && Auth::user()->role == 1)
                    <a href="/manage-product" style="text-decoration:none;color:gray;margin-left:20px">Manage Product</a>
                    @endif
                </div>
            </div>
           
            @if(Auth::check())
            <a href="/cart">
                <i class="fa-solid fa-cart-shopping" style="color:#727272;margin-right:10px"></i>
            </a>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown" style="margin-right:100px">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-secondary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{Auth::user()->name}}</a>
                        <ul class="dropdown-menu dropdown-menu-white">
                            <li><a class="dropdown-item text-secondary" href="/profile">Profile</a></li>
                            <li><a class="dropdown-item text-secondary" href="/history">History</a></li>
                            <li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            @else 
             <!-- FOR GUEST  -->
            <a href="/login" class="float-end text-secondary" style="text-decoration:none">Login</a> 
            <a href="/register" class="float-end text-secondary ms-4" style="text-decoration:none;margin-right:140px">Register</a>
        
            <!-- FOR USER -->
            @endif

        </nav>

        @yield('content')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script>
            document.getElementById('dt').max = new Date(new Date().getTime() - new Date().getTimezoneOffset() * 60000).toISOString().split("T")[0];
        </script>
    </body>
</html>