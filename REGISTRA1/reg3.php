<?php

include_once 'hhh.php';
$user = $_POST['user'];
$pass = $_POST['password'];


 $success = false;
 
if (!empty($user) && !empty($pass)) {
  $que= "SELECT username,pass FROM admini WHERE username='$user' AND pass= '$pass';";
   mysqli_query($conn, $que);
 
      
      if (mysqli_num_rows(mysqli_query($conn, $que)) == 0) {
          header("Location:login1.php?error=invalidUsernameOrPassword");
          exit();
      }elseif (mysqli_num_rows(mysqli_query($conn, $que))==1) {
       header('location:Admin/index.php?user='.$user.'&pass='.$pass);
        
          
      }
 
} else {
  echo '<script>alert("Please enter username and password")</script>';
}
  
?>
