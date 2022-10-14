<!DOCTYPE html>
<html>
<head>
<title>Asma Store</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="./css/main.css">
</head>
<body>
    <!--  navbar  -->
    <div class="container-fluid" p-0 >
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <img src="./imgs/logo.jpg" class="logo"/>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Total price</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg bg-secondary ">
            <ul class="navbar-nav me-auto">
                <li class="nav-item ">
                    <a href="#" class="nav-link">welcome Guest</a>
                </li>
                <li class="nav-item float-right">
                    <a href="#" class="nav-link">Login</a>
                </li>
            </ul>

        </nav>

        <div class="bg-light">
            <h3 class="text-center">Products</h3>
            <p class="text-center">the page of all products</p>
        </div>

        <!--  displaying products and sidebar -->
        <div class="row">
            <!-- displaying products -->
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-4 mb-2">
                        <div class="card" style="width: 18rem;">
                            <img src="./imgs/chocolate.jpg" class="card-img-top" alt="product">
                            <div class="card-body">
                                <h5 class="card-title">product name</h5>
                                <p class="card-text">Some quick example text to build on the product name and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">Add to cart</a>
                                <a href="#" class="btn btn-secondary">View more..</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card" style="width: 18rem;">
                            <img src="./imgs/chocolate2.jpg" class="card-img-top" alt="product">
                            <div class="card-body">
                                <h5 class="card-title">product name</h5>
                                <p class="card-text">Some quick example text to build on the product name and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">Add to cart</a>
                                <a href="#" class="btn btn-secondary">View more..</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card" style="width: 18rem;">
                            <img src="./imgs/chocolate3.jpg" class="card-img-top" alt="product">
                            <div class="card-body">
                                <h5 class="card-title">product name</h5>
                                <p class="card-text">Some quick example text to build on the product name and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">Add to cart</a>
                                <a href="#" class="btn btn-secondary">View more..</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card" style="width: 18rem;">
                            <img src="./imgs/chocolate4.jpg" class="card-img-top" alt="product">
                            <div class="card-body">
                                <h5 class="card-title">product name</h5>
                                <p class="card-text">Some quick example text to build on the product name and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">Add to cart</a>
                                <a href="#" class="btn btn-secondary">View more..</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- sidebar -->
            <div class="col-md-2 bg-secondary p-0">
                <!-- Brands to be displayed -->
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-info">
                        <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light">Brand1</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light">Brand2</a>
                    </li>
                </ul>
                <!-- Categories to be displayed -->
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-info">
                        <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light">Category1</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light">Category2</a>
                    </li>
                </ul>
                
            </div>
        </div>
    </div>
<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
    <div class="v bg-info p-3 text-center">
        <p>All rights reserved @ Designed by Asmaa 2022</p>

    </div>
</footer>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
