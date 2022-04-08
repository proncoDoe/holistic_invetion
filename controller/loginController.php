<?php



if(isset($_POST['Login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];
    $checkbox = isset($_POST['keep']);
   
    $email = mysqli_escape_string($conn,$email);
    $password = mysqli_escape_string($conn, $password);
   
   $query = "SELECT * FROM  user WHERE email = '{$email}' LIMIT 1";
   
   $select_user_query = mysqli_query($conn,$query);
   
   if(!$select_user_query){
   
       die("Login FAILED" . mysqli_error($conn));
   
   }
   
   
   while($row = mysqli_fetch_array($select_user_query)){
   
    
     $user_id = $row['id'];
     $db_name = $row['name'];
     $db_username = $row['username'];
     $db_email = $row['email'];
     $db_password = $row['password'];
  
   }
   
   
   if($email === $db_email && $password === $db_password){


       $_SESSION['id'] = $user_id['id'];
       $_SESSION['name'] = $db_name['name'];
       $_SESSION['username'] = $db_username['username'];
       $_SESSION['email'] = $db_email['email'];
       $_SESSION['password'] = $db_password['password'];

   
       if($checkbox ==  "on"){
   
           setcookie("email",$email,time()+3600);
   
   
       }
   
       header('location:user.php');
   
   }else{
   
       header('location:index.php');
   }
   
   
   
   }