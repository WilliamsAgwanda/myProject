<?php

include_once 'hhh.php';
$user = $_POST['user'];
$pass = $_POST['password'];

session_start();
$_SESSION["user"] = $user;
 $_SESSION["pass"] = $pass;
 $success = false;
 
if (!empty($user) && !empty($pass)) {
  $que= "SELECT username,pass FROM admini WHERE username='$user' AND pass= '$pass';";
   mysqli_query($conn, $que);
 
      
      if (mysqli_num_rows(mysqli_query($conn, $que)) == 0) {
          header("Location:login1.html?error=invalidUsernameOrPassword");
          exit();
      }elseif (mysqli_num_rows(mysqli_query($conn, $que))==1) {
        /*$sql= "SELECT regno,firstname,lastname,course,idno,phoneno,email,gender,imager FROM student WHERE regno='$adm' AND idno='$pass';";
       $result= mysqli_query($conn,$sql);
        $success = true;
          $data = mysqli_fetch_array($result);
          $regno= $data['regno'];
          $fname = $data['firstname'];
          $lname = $data['lastname'];
          $course = $data['course'];
          $idno = $data['idno'];
          $phoneno = $data['phoneno'];
		      $email = $data['email'];
		      $gender = $data['gender'];
          $prof = $data['imager'];

         
          $_SESSION["fname"] = $fname;
          $_SESSION["regno"] = $regno;
          $_SESSION["course"] = $course;
          $_SESSION["email"] = $email;
          $_SESSION["lname"] = $lname;
          $_SESSION["idno"]=$idno;
          $_SESSION["phoneno"]=$phoneno;
          $_SESSION["gender"]=$gender;*/



        header('location:Admin/index.php');
        //exit();
          
      }
 
} else {
  echo '<script>alert("Please enter username and password")</script>';
}
  /*echo'
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width, initial-scale=1.0">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<Body>
  ';  
  
if($success){
  $_SESSION["pic"] = $prof;
      echo '
       <div class="well">
       <div class="row">
       <div class="col-lg-4 col-lg-offset-4"><div class="well" style="background-color:floralwhite; box-shadow:2px 3px 4px 5px purple ;">';
 echo '<img src="images/'.$prof.'" class="img-rounded img-responsive" style="height:200px; width:200px;"/>';
 echo '<h2 class="text-info">WELCOME,<br>'.$fname.' '.$lname.' '; 
 echo'</h2>
            ';
          
        echo '<div><b>Admission:</b> '.$regno.'<br>'.'<b>Course:</b> '.$course.'</div>';
        echo '<div><b>Email:</b> '.$email.'<br></div>';
        echo '<div><b>ID NO:</b> '.$idno.'<br></div>';
        echo '<div><b>Gender:</b> '.$gender.'<br></div>';
        echo '<div><b>Phone NO:</b> '.$phoneno.'<br></div>';
        
       echo ' 
        <button a class="btn btn-info" title="proceed to print form" data-toogle="tooltip"><a class="btn btn-info" href="printer.php" target="_blank">PRINT</a></button>
        <button <a class="btn btn-info" title=" go back to login page" data-toogle="tooltip"><a class="btn btn-info" href="login1.html">LOGOUT</a></button>
        <button <a class="btn btn-info" title="print students list" data-toogle="tooltip"><a class="btn btn-info" href="reg2.php">STUDENTLIST</a></button>

                </div></div></div></div>
               
';

}
echo'
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/jquery/jquery.min.js"></script>
</Body>
</html>';*/
?>
