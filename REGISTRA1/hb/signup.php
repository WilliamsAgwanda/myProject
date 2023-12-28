<?php
session_start();

$error = "";
$message = "";
if (isset($_POST["submit"])){
  if($_POST['password']!==$_POST['c_password']){
      $error = "The password: ".$_POST['password']." and your confirm password: ".$_POST['c_password']. " are not the same<br/>";
  }else {
    $filereader = fopen("database2.txt", "r");
      while(! feof($filereader)){
        $line = fgets($filereader);
        if(strpos($line, $_POST["email"])){
            $error = "The email ".$_POST["email"]." already exist!!!!<br/>";
            break;
        }else{
          fclose($filereader);
          $myfile = fopen("database2.txt", "a") or die("Unable to open file!");
          $student_data = "Username: ".$_POST["username"]. "First Name: ".$_POST["f_name"]."Last Name: ".$_POST["l_name"]."  Email: ".$_POST["email"]." Password: ".$_POST["password"]."\n";
          $_SESSION['username'] = $Username;
          $_SESSION['f_name'] = $Firstname;
          $_SESSION['l_name'] = $Lastname;
          $_SESSION['email'] = $Email;
          $_SESSION['password'] = $password;


          fwrite($myfile, $student_data);
          fclose($myfile);
          header("location: login.php");
        }
      }
    
  }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="POST">
    <?php
      echo $error;
    ?>
    Username: <input type="text" name="username" required/><br />
    First Name: <input type="text" name="f_name" required/><br />
    Last Name: <input type="text" name="l_name" required/><br />
    Email: <input type="email" name="email" required/><br />
    Password: <input type="password" name="password" required/><br />
    Confirm Password: <input type="password" name="c_password" required/><br />
    
    <input type="submit" name="submit" value="Register" />
    <?php
      echo $message;
    ?>
</form>
</body>
</html>

