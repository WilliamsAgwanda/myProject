<?php

include_once 'hhh.php';

  $passerr = $usererr=  "";
$pass= $user ="";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["user"]) || empty($_POST["password"] )) {
    $usererr = "username is required";
    $passerr = "password is required";
  } else {
    $user = test_input($_POST["user"]);
    $pass= test_input($_POST["password"]);
    // check if e-mail address is well-formed
    if (!filter_var($user, FILTER_VALIDATE_EMAIL) || !preg_match("/^[a-zA-Z-' ]*$/",$pass)) {
      $usererr= "Invalid email format";
      $passerr= "Only letters and white space allowed";
    }elseif(filter_var($user, FILTER_VALIDATE_EMAIL) && preg_match("/^[a-zA-Z-' ]*$/",$pass)) {
      $que= "SELECT username,pass FROM admini WHERE username='$user' AND pass= '$pass';";
      mysqli_query($conn, $que);
    
         
         //if (mysqli_num_rows(mysqli_query($conn, $que)) == 0) {
             //header("Location:login1.php?error=invalidUsernameOrPassword");
            // exit();
         if (mysqli_num_rows(mysqli_query($conn, $que))==1) {
          header('location:Admin/index.php?user='.$user.'&pass='.$pass);
    }elseif(mysqli_num_rows(mysqli_query($conn, $que))==0){
            echo"<script>alert('invalid username or password') </script>";
    }
    }
  }
    }


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
       <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
       <style>
         .error{
           color:red;
         }
       </style>
</head>
<body>
<div class="well">
<div class="row">
 <div class="col-lg-4 col-lg-offset-4">        
<form style="background-color: rgb(238, 234, 217);  box-shadow: 2px 4px 8px 4px #45a082;" 
class="well form-group"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<div class="form-group">
  <h3 class="text-success text-left">ADMIN LOGIN PAGE</h3><br>    
USERNAME:
<input  class="form-control"type="text" name="user" id="user" placeholder="Enter email" value="<?php echo $user;?>"><br>
<span class="error">* <?php echo $usererr;?></span>
</div> 
<div class="form-group">
PASSWORD:
<input class="form-control"type="password" name="password" id="password"value="<?php echo $pass;?>" 
placeholder="please enter your password"><br>
<span class="error">* <?php echo $passerr;?></span>
</div>
<button type="submit" class="btn btn-success form-control">LOGIN</button>
</form></div></div></div>  
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/jquery/jquery.min.js"></script>

</body>
<html>
