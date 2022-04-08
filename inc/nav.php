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
            <a href="https://www.instagram.com/edric_tech" class="instagram"><i class="bi bi-instagram main-bi"></i></a>
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
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->



<button class="bg-light mr-5" style="border: none; text-decoration:none; float:right">


    <ul class="nav navbar-right top-nav  mr-2 text-light">

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><small>John
                    Doe</small><b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>



                <li>
                    <hr class="dashed" style="border-top: 1px dotted #bbb;">
                </li>
                <li>
                    <a href="../inc/logout_user.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>



</button>
<div class="clearfix"></div>



<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <span class="text-primary"><strong>Welcome </strong></span>

            <small><?php echo $_SESSION['username']?></small>
            <small class="text-primary"><strong>LLC</strong></small>
        </h1>

    </div>
</div>