<?php

session_start();
//$user=$_POST['user'];
//$pass=$_POST['pass'];
//$school=$_POST['school'];

if(isset($_POST['submit'])){
	
  include_once 'hhh.php';

  $passerr = $usererr=$scherr="";
$pass= $user ="";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["user"]) || empty($_POST["pass"] )) {
    $usererr = "username is required";
    $passerr = "password is required";
    $scherr="school is required";
  } else {
    $user = test_input($_POST["user"]);
    $pass= test_input($_POST["pass"]);
    $school=$_POST['school'];
    // check if e-mail address is well-formed
    if (!filter_var($user, FILTER_VALIDATE_EMAIL) || !preg_match("/^[a-zA-Z-' ]*$/",$pass) || !preg_match("/^[a-zA-Z-' ]*$/",$school)) {
      $usererr= "Invalid email format";
      $passerr= "Only letters and white space allowed";
      $scherr="Only letters and white space allowed";
    }elseif(filter_var($user, FILTER_VALIDATE_EMAIL) && preg_match("/^[a-zA-Z-' ]*$/",$pass) && preg_match("/^[a-zA-Z-' ]*$/",$school)) {
      
			   $sql = "INSERT INTO admini(username,pass,school)VALUES('$user','$pass','$school');";
			   mysqli_query($conn,$sql);

         $que= "SELECT * FROM admini WHERE username='$user' AND pass= '$pass';";
         mysqli_query($conn,$que);
 
      
      if(mysqli_num_rows(mysqli_query($conn,$que))==0){
          header("location:validation2.php?error=EnterUser");
          exit();
      }elseif(mysqli_num_rows(mysqli_query($conn,$que))==1){
        echo '<script>alert("User added successfully")</script>';
          header("location:data1.php");
       }
}
    }
  }
    }
  ?>
			  


