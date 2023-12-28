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
  $que= "SELECT email,regno FROM students WHERE email='$user' AND regno= '$pass';";
   mysqli_query($conn, $que);
 
      
      if (mysqli_num_rows(mysqli_query($conn, $que)) == 0) {
          header("Location:login.php?error=invalidUsernameOrPassword");
          exit();
      }elseif (mysqli_num_rows(mysqli_query($conn, $que))==1) {
        



        header('location:index2.php');
        //exit();
          
      }
 
} else {
  //echo '<script>alert("Please enter username and password")</script>';
  //header("Location:login.php");
  echo '<script>alert("Please enter username and password")</script>';


}
 } 
?>
