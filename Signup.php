<?php include('includes/header.php');?><style><?php include("includes/style.css");?></style>

<section class="vh-100" style="background-color: #eee">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-log-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class = "col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                                <form>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" id="#" class="form-control"/>
                                            <label class="form-label" for="#">Your name</label>
                                        </div>
                                    </div>
<!--                                    your email field-->
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="email" id="#" class="form-control"/>
                                            <label class="form-label" for ="#">Your email</label>
                                        </div>
                                    </div>
<!--                                    your password-->
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" id="#" class="form-control"/>
                                            <label class="form-label" for="#">Your password</label>
                                        </div>
                                    </div>
<!--                                    your confirmation password-->
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" id="#" class="form-control"/>
                                            <label class="form-label">Confirm your password</label>
                                        </div>
                                    </div>
<!--                                    button to register-->
                                    <div class="de-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="button" class="btn btn-primary btn-lg">Register</button>
                                    </div>
                                </form>
                            </div>
<!--                            Right image-->
                            <div class="col-md-5 col-lg-4 col-xl-5 d-flex align-items-center order-1  order-lg-2" >
                                <img src="images/Registeration.png" class="img-fluid d-flex flex-grow-1 col-md-1 col-xl-7 align-items-center " alt="Register image" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<?php include('includes/footer.php');?>
