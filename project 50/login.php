<?php
session_start();
include_once 'hhh.php';
?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
       <link rel="stylesheet" href="bootstrap.min.css">
       <link rel="stylesheet" href="font/css/fontawesome.css">
        <link rel="stylesheet" href="custom.css">
 </head>
 <body>
     <div class="container" style="margin-top: 200px;">
         <div class="row">
             <div class="col-md-4 col-md-offset-4">
                 <div class="panel panel-default">
                     <h4> USERS LOGIN PAGE</h4>
                     <div class="panel-body">
                          <form action="<?php $_SERVER["PHP_SELF"];?>" method="POST">
                              <div class="form-group">
                                 <input type="text" name="username" class="form-control"
                                 placeholder="Enter username"> 
                              </div>
                              <div class="form-group">
                                <input type="password" name="pass" class="form-control"
                                placeholder="Enter password"> 
                             </div>
                <div class="form-group">
                    <?php
                     $sql = "Show databases;";
                     $result= mysqli_query($conn,$sql);
                    ?>
                             <label>DATABASE:</label>
                    <select  name="select" class="form-control select2 select2-purple" 
                                    data-dropdown-css-class="select2-purple" style="width: 100%;">
                               <?php
                                 while($data=mysqli_fetch_array($result)){
                                   $database=$data['Database'];
                              ?>
                                  <option select="selected"><?php echo $database;?></option>
                                    <?php } ?></select>
                </div>
                             
                             <div class="form-group">
                              
                                 <?php
                     $sql1 = "SELECT host FROM mysql.user;";
                     $result1= mysqli_query($conn,$sql1);
                    ?>
                             <label> HOST/SERVER:</label>  
                    <select  name="sel" class="form-control select2 select2-purple" 
                                    data-dropdown-css-class="select2-purple" style="width: 100%;">
                               <?php
                                 while($d=mysqli_fetch_array($result1)){
                                   $host=$d['host'];
                              ?>
                                  <option select="selected"><?php echo $host;?></option>
                                    <?php } ?></select>
                               
                             </div>
                             <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-success btn-lg btn-block"
                                  value ="LOGIN"> 
                             </div>
                          </form>
                      </div>  
                 </div>
                 
             </div> 
         </div>
         <?php

include_once 'hhh.php';
if(isset($_POST['submit'])){ 
$user = $_POST['username'];
$pass = $_POST['pass'];
$d= $_POST['select'];
$h= $_POST['sel'];


$_SESSION["user"] = $user;
 $_SESSION["pass"] = $pass;
 $_SESSION["database"] = $d;
 $_SESSION["host"] = $h;

 $success = false;
 
if (!empty($user) && !empty($pass)) {
  $que= "SELECT host,user,psw from skool.upt where host='$h' && user='$user' && psw='$pass';";
   mysqli_query($conn, $que);
 
      
      if (mysqli_num_rows(mysqli_query($conn, $que)) == 0) {
        echo '<script>alert("Please check your username , password and host and try Again")</script>';
        //header('location:login.php?PLEASECHECKUSERNAMEANDPASSWORDANDTRYAGAIN');
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

     </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>

 </body>   
</html>