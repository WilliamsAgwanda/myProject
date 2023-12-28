<?php
 include_once 'dbconnect.php';
session_start();


 $adm = $_POST['admno'];
 $pass = $_POST['password'];
 $_SESSION["user"] = $adm;
 $_SESSION["pass"] = $pass;
 $success = false;
 
if (!empty($adm) && !empty($pass)) {
  $query = "SELECT admno,pass FROM details WHERE admno='$adm' AND pass='$pass';";
  mysqli_query($conn, $query);
  if (mysqli_query($conn, $query)) {
      # code...
      if (mysqli_num_rows(mysqli_query($conn, $query)) == 0) {
          // echo '<div class="error" style="color:red;">Inavalid password or username</div>';
          header("Location:log.php?error=invalid");
          exit();
      }
      if (mysqli_num_rows(mysqli_query($conn, $query)) == 1) {
        $all = "SELECT fname,lname,admno,course,email,photo FROM details WHERE admno='$adm' AND pass='$pass';";
       $r= mysqli_query($conn, $all);
        $success = true;
          //echo 'successful';
          //header("Location:index.php?error=none");
          $data = mysqli_fetch_array($r);
          
          $fname = $data['fname'];
          $lname = $data['lname'];
          $admno = $data['admno'];
          $course = $data['course'];
          $mail = $data['email'];
          $photo = $data['photo'];

         // $fullname = $fname.' '.$lname;
          $_SESSION["fname"] = $fname;
          $_SESSION["adm"] = $admno;
          $_SESSION["course"] = $course;
          $_SESSION["mail"] = $mail;
          $_SESSION["lname"] = $lname;
        

          
      }
  }
} else {
  echo '<script>alert("You must provide a password and Username")</script>';
}
  echo'
  <html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
    .container{
        color: gray;
        border: 3px solid green;
        width: 50%;
        margin: auto;
        text-align: center;
        border-radius: 8px;
        font-size: 20px;
        margin-top: 5%;
    }
    b{
        color: green;
    }
    button{
    background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 5px;
    margin-bottom: 3px;
    
  }
  button a{
    text-decoration: none;
    color: white;
  }
  .avatar{
    border-radius:50%;
    width: 100px;
    height: 100px;
  }
</style>
</head>
<Body>
  ';  
  
if($success){
  // $pics=$std['pic'];
  $_SESSION["pic"] = $photo;
echo '

    <div class="container">';
    echo '<img src="images/'.$photo.'" class ="avatar"/>';
 echo '<h2>Hello, <br>'.$fname.' '.$lname; 
 echo'</h2>
 <div class="col-25">';
          
        echo '<div><b>Admission:</b> '.$admno.'<br>'.'<b>Course:</b> '.$course.'</div>';
        echo '<div><b>Email:</b> '.$mail.'<br></div>';
       echo ' </div>
                <button><a href="printstud.php" target="_blank">PRINT</a></button>
                <button><a href="log.php">Signout</a></button>
                </div>
               
';

}
// else{
//     echo '<div class = "alert alert-danger">Invalid Details</div>';
// }
echo'
</Body>
</html>';
?>