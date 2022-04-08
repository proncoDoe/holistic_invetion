<?php $page_tittle = 'Register'; ?>
<?php include 'inc/header.php' ?>


<img class="wave" src="assets/images/26363.svg">
<header>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:proncotech@gmail.com">Holisticinvention@gmail.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+2347065015510</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="https://twitter.com/proncotech" class="animated bounce twitter" id="twitter"><i
                        class="bi bi-twitter main-bi"></i></a>
                <a href="https://facebook.com/edrictech" class="facebook"><i class="bi bi-facebook main-bi"></i></a>
                <a href="https://www.instagram.com/edric_tech" class="instagram"><i
                        class="bi bi-instagram main-bi"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin main-bi"></i></i></a>
            </div>
        </div>
    </section>


    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2><a href="index.php">Logo</a></h2>
                <ol>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->




    <div id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">
                        Welcome To &nbsp;<small><span class="text-p text-type" data-wait="700"
                                data-words='["Holistic Invention And Recovery LLC"]'></span></small>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    </section>



    <div class="container my-5">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded animated fadeInLeftBig">

                    <div class="alert alert-success">

                        <?php 

                          
                         if(isset($_SESSION['status'])){

                            echo "<h4>". $_SESSION['status'] ."</h4>";

                            unset($_SESSION['status']);

                         }
                     
                     
                     ?>



                    </div>


                    <div class="card-header"><a href="index.php" class="text-white">Login?</a></div>

                    <div class="card-body">
                        <form action="" method="post">


                            <div class="form-group row fontuser">
                                <label for="name" class="col-md-4 col-form-label text-md-right">name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" name="name" class="form-control">


                                </div>

                                <i class="bi bi-person fa-lg"></i>
                            </div>


                            <div class="form-group row fontuser">
                                <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" name="username" class="form-control">


                                </div>

                                <i class="bi bi-person fa-lg"></i>
                            </div>


                            <div class="form-group row fontemail">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" name="email" class="form-control">


                                </div>

                                <i class="bi bi-envelope fa-lg"></i>
                            </div>

                            <div class="form-group row fontpassword">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                <div class="col-md-6">
                                    <input id="showPassword2" type="password" name="password" class="form-control">

                                </div>

                                <span class="eye" onclick="showFunction2()">
                                    <i id="hide3" class="bi bi-eye fa-lg"></i>
                                    <i id="hide4" class="bi bi-eye-slash fa-lg"></i>
                                </span>
                            </div>


                            <!-- <div class="form-group row fontpassword">
                                <label for="repeatPassword"
                                    class="col-md-4 col-form-label text-md-right">RepeatPassword</label>

                                <div class="col-md-6">
                                    <input id="showPassword3" name="repeatpassword" type="password"
                                        class="form-control">

                                </div>
                                <span class="eye" onclick="showFunction3()">
                                    <i id="hide5" class="bi bi-eye fa-lg"></i>
                                    <i id="hide6" class="bi bi-eye-slash fa-lg"></i>
                                </span>
                            </div> -->


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4 text-center">
                                    <button type="submit" name="Register" class="btn btn-outline-primary btn-block"
                                        value="Register">

                                        Register
                                    </button>
                                </div>
                            </div>


                            <a class="btn btn-link text-warning" href="index.php">
                                Login?
                            </a>
                            <div class="clear-fix">
                                <a class="btn btn-link float-right" href="forgot_password.php">
                                    Forgot Password?
                                </a>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>




<?php include 'inc/footer.php' ?>