<?php $page_tittle = 'Login'; ?>
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
                    <div class="card-header"><a href="register.php" class="text-white">Register?</a></div>

                    <div class="card-body">
                        <form action="index.php" method="post">


                            <div class="form-group row fontemail1">
                                <label for="username" class="col-md-4 col-form-label text-md-right">Email or
                                    username</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" name="email" class="form-control" />

                                    <i class=" bi bi-envelope fa-lg"></i>

                                </div>
                            </div>

                            <div class="form-group row fontpassword1">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                <div class="col-md-6">
                                    <input id="showPassword" type="password" name="password" class="form-control">
                                    <span class="eye" onclick="showFunction()">
                                        <i id="hide1" class="bi bi-eye fa-lg"></i>
                                        <i id="hide2" class="bi bi-eye-slash fa-lg"></i>
                                    </span>

                                </div>


                            </div>



                            <div class="col-md-4 col-form-label text-md-right">

                                <label for="remember" class="pt-2">Remmber me</label>
                                <input type="checkbox" name="remember" id="remember" class="mr-2 input-check">


                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4 text-center">
                                    <button type="submit" name="Login" class="btn btn-outline-primary btn-block"
                                        value="Login">

                                        Login
                                    </button>
                                </div>
                            </div>


                            <a class="btn btn-link" href="register.php">
                                <span class="text-warning">New</span> Register?
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
</main>


<?php include 'inc/footer.php' ?>