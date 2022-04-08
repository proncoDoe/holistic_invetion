<?php $page_tittle = 'User form'; ?>
<?php include 'inc/header.php' ?>
<header>
    <?php include 'inc/nav.php' ?>
</header>
<main>
    </section>


    <div class="card  bg-white rounded animated fadeInLeftBig">
        <div class="container my-5">



            <div class="row">

                <div class="col-md-12">

                    <?php if(isset($_SESSION['message'])): ?>
                    <div class="alert text-success font-weight-bold <?php echo $_SESSION['alert-class']; ?> ">
                        <?php 
        
        echo $_SESSION['message']; 
        unset($_SESSION['message']);
        unset($_SESSION['alert-class']);
        
        
        ?>

                    </div>

                    <?php endif; ?>


                    <?php if(! $_SESSION['verified']): ?>
                    <button class=" alert alert-warning">

                        You need to verified the email
                        send to your email acount and click the verification link
                        we have email you at <strong><?php echo $_SESSION['email'];  ?></strong>

                    </button>

                    <?php endif; ?>

                    <?php if($_SESSION['verified']): ?>

                    <button class="btn btn-info btn-block">You are now verified</button>

                    <?php endif; ?>

                </div>

            </div>





            <div class="row justify-content-center">

                <div class="col-md-12">


                    <div class="my-3 textItalic text-muted">Holistic Invention And Recovery LLC</div>

                    <div class="border shadow-lg p-3 mb-5 bg-white rounded">

                        <form action="" method="POST" enctype="multipart/form-data">

                            <div class="row">

                                <div class="mt-2 col-sm-4">


                                    <div class="form-group fontinfo textItalic">

                                        <label for="fname" class="text-muted">First Name</label>
                                        <input type="text" name="fname" class="form-control">
                                        <i class="fa fa-user"></i>

                                    </div>


                                    <div class="form-group fontinfo textItalic">

                                        <label for="lname" class="text-muted">Last Name</label>
                                        <input type="text" name="lname" class="form-control">
                                        <i class="fa fa-user"></i>

                                    </div>


                                    <div class="form-group fontlinces textItalic">

                                        <label for="text" class="text-muted">Linces</label>
                                        <input type="text" name="linces" class="form-control"
                                            placeholder="Enter Your Linces">
                                        <i class="fas fa-map-pin"></i>

                                    </div>


                                    <div class="form-group fontphone textItalic">

                                        <label for="phone" class="text-muted">Phone Number</label>
                                        <input type="text" name="phone_number" class="form-control">
                                        <i class="fas fa-phone"></i>

                                    </div>

                                    <div class="form-group fontaddress textItalic">

                                        <label for="address" class="text-muted">Address</label>
                                        <textarea name="address" class="form-control"></textarea>
                                        <i class="far fa-address-card"></i>

                                    </div>


                                </div>



                                <div class="col-sm-4">



                                    <span class="form-group fontradio ">

                                        <label for="sex" class="textItalic text-muted">sex</label><br>

                                        <input type="radio" class="mx-2 " name="sex" value="M"><label
                                            class="text-muted">Male</label><i class="mx-3 my-4 fa fa-male fa-2x"></i>
                                        <input type="radio" class="mx-2" name="sex" value="F"><label
                                            class="text-muted">Female</label><i
                                            class="mx-3 my-4 fas fa-female fa-2x"></i>


                                    </span>


                                    <span class="form-group">

                                        <button type="submit" name="Submit" class="btn btn-primary sub" value="Submit"
                                            style="width: 45%;">Save</button>

                                        <a href="patient_acce.php" class="btn btn-deep-red" style="width: 45%;">Next</a>

                                    </span>

                                </div>


                                <div class="col-sm-4">

                                    <div class="mt-2 col-sm-12">


                                        <span class="form-group fontradio ">

                                            <label for="relationship" class="textItalic text-muted">Marital
                                                Status</label><br>

                                            <input type="radio" class="mx-2 " name="relationship" value="single"><label
                                                class="text-muted">Single</label>

                                            <input type="radio" class="mx-2" name="relationship" value="Married"><label
                                                class="text-muted">Married</label>



                                        </span>





                                        <div class="form-group fontuser textItalic">

                                            <label for="birth" class="text-muted">D.O.B</label>
                                            <input type="date" name="dob" class="form-control">


                                        </div>


                                        <div class="form-group fontcompany textItalic">

                                            <label for="company" class="text-muted">Company Name</label>
                                            <input type="text" name="company" class="form-control">
                                            <i class="fas fa-users-cog"></i>

                                        </div>




                                        <div class="form-group fontemail textItalic">

                                            <label class="text-muted">Select Religion</label>

                                            <select name="type" class="form-control selectpicker show-tick"
                                                data-style="btn-info" required>

                                                <!-- <option value="" selected disabled>Religion</option> -->
                                                <option value="christian">Christian</option>
                                                <option value="moslim">Moslim</option>
                                                <option value="other">Other</option>


                                            </select>

                                        </div>






                                    </div>



                                </div>


                            </div>


                        </form>
                    </div>


                </div>
            </div>
        </div>

    </div>
</main>

<?php include 'inc/footer.php' ?>