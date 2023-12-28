<?php

include_once 'hhh.php';
if(isset($_POST['submit'])){ 
$user = $_POST['email'];
$pass = $_POST['pass'];

session_start();
$_SESSION["user"] = $user;
 $_SESSION["pass"] = $pass;
 $success = false;
 
if (!empty($user) && !empty($pass)) {
  $que= "SELECT email,staffcode FROM staff WHERE email='$user' AND staffcode= '$pass';";
   mysqli_query($conn, $que);
 
      
      if (mysqli_num_rows(mysqli_query($conn, $que)) == 0) {
          header("Location:lec.php?error=invalidUsernameOrPassword");
          exit();
      }elseif (mysqli_num_rows(mysqli_query($conn, $que))==1) {
       



        header('location:index3.php');
        //exit();
          
      }
 
} else {
  echo '<script>alert("Please enter username and password")</script>';
}
 } 
 
?>
