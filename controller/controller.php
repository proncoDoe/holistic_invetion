<?php
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function email_verify($name, $email, $verified){

    $mail = new PHPMailer(true);

    // $mail->SMTPDebug  = 2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication

    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->Username   = 'proncotech@gmail.com';                     //SMTP username
    $mail->Password   = 'Pr$$o723277';                               //SMTP password
    
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('proncotech@gmail.com', $name);
    $mail->addAddress($email);     //Add a recipient
  

      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Email verifield from holistic';
      $email_template = "

      <div class=container>

      <p>
          Thank you for signing up to our site! please click on the link below
          to verify your account
      </p>

      <a href='http://localhost/holistic_invetion/user_form.php?token=$verified'> Verify email</a>

      </div>
      
      ";


      $mail->Body    = $email_template;
  
      $mail->send();
    //   echo 'Message has been sent';

    
}

   
if(isset($_POST['Register'])){
  

    $name = $_POST['name'] ?? null;
    $username = $_POST['username'] ?? null;
    $email = $_POST['email'] ?? null;
    $password = $_POST['password'];
    // $repeatpassword = $_POST['repeatpassword'] ?? null;
    $verified = md5(rand());
    $created_at = date('F, d Y h:i:sa');

    email_verify("$name", "$email", "$$verify_token");
    // echo "send or not";
    $check_email_query = "SELECT email FROM user WHERE email = '$email' LIMIT 1";

    $check_email_query_run = mysqli_query($conn, $check_email_query);


    if(mysqli_num_rows($check_email_query_run) > 0){

        $_SESSION['status'] = "Email is taken try again";
        header("location: register.php");


    }else{


        $query = "INSERT INTO user (`name`,`username`,`email`,`password`, `token`, `created_at`) VALUES($name, $username, $email, $password, $verify_token, $created_at)";

        $query_run = mysqli_query($conn, $query);
        if($query_run){

            email_verify("$name", "$email", "$verified");
            $_SESSION['status'] = "Registration failed! verify your email";
            header("location: user_form.php");
        
            
        }else{

            $_SESSION['status'] = "Registration failed";
            header("location: register.php");
        }
        
    }

}