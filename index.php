<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Course Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="includes/style.css" rel="stylesheet" type="text/css">
    <!-- Font Awesome -->
    <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
            rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
            rel="stylesheet"
    />
    <!-- MDB -->
    <link
            href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
            rel="stylesheet"
    />
    <!-- Font Awesome -->
    <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
            rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
            rel="stylesheet"
    />
    <!-- MDB -->
    <link
            href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
            rel="stylesheet"
    />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top p-3">

    <div class="container-fluid c">
        <a class="navbar-brand" href="#"><strong><em><span>O</span>nline<span>C</span>ourse</em></strong></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Courses
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Web Development</a></li>
                        <li><a class="dropdown-item" href="#">Mobile Development</a></li>
                        <li><a class="dropdown-item" href="#">Game Development</a></li>
                        <li><a class="dropdown-item" href="#">Database Design and Development</a></li>
                        <li><a class="dropdown-item" href="#">Programming Languages</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here...</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Development</a></li>
                        <li><a class="dropdown-item" href="#">IT and Software</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">My Learning</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <h3 class="shop"><i class="fas fa-regular fa-cart-shopping"></i></h3>
            <!--                    <div class = "icons">-->
            <!--                        <a href="#">-->
            <!--                            <img src="./images/buy.png" class = "youtube"/>-->
            <!--                        </a>-->
            <!--                    </div>-->
            <!--                    <div class ="login">-->
            <!--                        <a href="#" class="navbar-brand me-2">Login</a>-->
            <!--                    </div>-->
            <!---->
            <!--                    <div class="signup">-->
            <!--                        <a href="#" class="navbar-brand me-2">Sign up</a>-->
            <!--                    </div>-->

        </div>
    </div>

</nav>
<main role="main" class="container-fluid my_container">
    <div class="row text-center mb-4">
        <div class="col-lg-4 my-card">
            <div class="card">

                <div class="card-body">
                    <img src="images/Registeration.png">
                    <h1 class="card-title my-text">React Native</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam cupiditate minus magnam ab veritatis illum fugit libero obcaecati adipisci.</p>

                    <a type="button" class="btn btn-primary btn-lg">Buy course</a>
                    <span></span>
                    <button type="button" class="btn btn-warning btn-lg" id="add-to-cart">Add to cart</button>
                </div>

            </div>

        </div>
        <div class="col-lg-4 my-card">
            <div class="card">
                <div class="card-body">
                    <img src="images/Registeration.png">
                    <h1 class="card-title my-text">React Native</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, ut.</p>
                    <a type="button" class="btn btn-primary btn-lg">Buy course</a>
                    <button type="button" class="btn btn-warning btn-lg">Add to cart</button>
                </div>

            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">

                <div class="card-body my-card">
                    <img src="images/Registeration.png">
                    <h1 class="card-title my-text">React Native</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, ut.</p>
                    <a type="button" class="btn btn-primary btn-lg">Buy course</a>
                    <button type="button" class="btn btn-warning btn-lg">Add to cart</button>
                </div>

            </div>
        </div>
        <div class="col-lg-4">
            <div class="card mt-5">
                <div class="card-body my-card">
                    <img src="images/Registeration.png">
                    <h1 class="card-title my-text">React Native</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, ut.</p>
                    <a type="button" class="btn btn-primary btn-lg">Buy course</a>
                    <button type="button" class="btn btn-warning btn-lg">Add to cart</button>
                </div>

            </div>
        </div>
        <div class="col-lg-4">
            <div class="card mt-5">
                <div class="card-body my-card">
                    <img src="images/Registeration.png">
                    <h1 class="card-title my-text">React Native</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, ut.</p>
                    <a type="button" class="btn btn-primary btn-lg">Buy course</a>
                    <button type="button" class="btn btn-warning btn-lg">Add to cart</button>
                </div>

            </div>
        </div>
        <div class="col-lg-4">
            <div class="card mt-5">
                <div class="card-body my-card">
                    <img src="images/Registeration.png">
                    <h1 class="card-title my-text">React Native</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, ut.</p>
                    <a type="button" class="btn btn-primary btn-lg">Buy course</a>
                    <button type="button" class="btn btn-warning btn-lg">Add to cart</button>
                </div>

            </div>
        </div>
    </div>
</main>
<!--<div class="select">-->
<!---->
<!--</div>-->
<footer class="text-center text-lg-start bg-dark text-white">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
            <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
            <a href="" class="me-4 link-secondary">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 link-secondary">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-4 link-secondary">
                <i class="fab fa-google"></i>
            </a>
            <a href="" class="me-4 link-secondary">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="me-4 link-secondary">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="me-4 link-secondary">
                <i class="fab fa-github"></i>
            </a>
        </div>

        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3 text-secondary"></i>Company name
                    </h6>
                    <p>
                        Here you can use rows and columns to organize your footer content. Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit.
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Products
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Angular</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">React</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Vue</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Laravel</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Useful links
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Pricing</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Settings</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Orders</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Help</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                    <p><i class="fas fa-home me-3 text-secondary"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="fas fa-envelope me-3 text-secondary"></i>
                        info@example.com
                    </p>
                    <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
<script type = "text/javascript" src = "js/main.js"></script>

<?php include('includes/footer.php'); ?>
