<?php
session_start();
include "db.php";

?>
<!DOCTYPE html>

<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.12.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="banklogo.jpg" type="image/x-icon">
  
  <meta name="description" content="Web Site Builder Description">
  
  
  <title>login</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  <style>
    body{
          background-color:#244705;
    }
    h2{
      color: #fff;
      font-family: Verdana;
      font-weight: 200;
     
    
    }
    h5{
      color:#fff;
      font-family: Verdana, Geneva, Tahoma, sans-serif;

    }
    .sec1{
      background-color: #244705;
      margin-top:100px;
    
    }
    
    input{
      
      border-top-left-radius: 10px;
      border-bottom-right-radius: 10px;
      border-top-right-radius: 10px;
      border-bottom-left-radius: 10px;
      height: 50px;
      width: 90%;
      font-size:20px;
     

    }
    
    form{
      
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.4), 0 6px 20px 0 rgba(0,0,0,0.3);
      width:30%;
    }
.toleft{
  text-align: left;
  margin-left: 20px;
}
a{
  margin-left: 100px;
  margin-bottom: 20px;
}
h6{
  color:#11CC0A;
}
.bttn{
  border-top-left-radius: 10px;
      border-bottom-right-radius: 10px;
      border-top-right-radius: 10px;
      border-bottom-left-radius: 10px;
      border: 0px;
      width: 100px;
      height: 20px;

}
.log{
      border-top-left-radius: 15px;
      border-bottom-right-radius: 15px;
      border-top-right-radius: 15px;
      border-bottom-left-radius: 15px;
      background-color: #11CC0A;
      width: 100px;
      height: 40px;
      margin-left: 10px; 
      border: 0px;



}
img{
  border-radius: 50%;
}
  </style>
  
</head>
<body>
  <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-b">



    <!--<nav class="navbar navbar-light bg-light">
       
      
    </nav>-->
</section>


  <center><section class="sec1">
   <div class="container">
    
      <form class="form" method="POST" action=<?php $_SERVER["PHP_SELF"];?>><br>
                    <img src="banklogo.jpg"><br><br>
             <i><b><h2>LOGIN</h2></b></i><br><br>
              <div class="form-group toleft">
                <h5>Username:</h5>
                <input type="email" name="username" required placeholder="Enter email" >
              </div><br>
              <div class="form-group toleft">
                <h5>Password:</h5>
                <input type="password" name="password"  required placeholder="Enter id">
              </div><br><br>
              <div>
                <input class="log" type="submit" value="LOGIN" name="login">
              </div><br><br><br><br><br><br>
              <h6>No account?                          <a href="signup.php"><input class="bttn" type="button" value="signup"></a></h6><br>
      </form>
        <?php
        if(isset($_POST['login'])){
          
          $user=$_POST['username'];
          $pass=$_POST['password'];
          $_SESSION['pass']=$pass;

          if(filter_var($user, FILTER_VALIDATE_EMAIL) && preg_match("/^[0-9]*$/",$pass)){

          $sql="SELECT idno from customer where idno='$pass';";
          $r=mysqli_query($conn,$sql);
          if(mysqli_num_rows($r)==1){
            header('location:profile.php');
          }else{
              echo"<script>alert('Check username and password and try again')</script>";

          }

        }else{
          echo"<script>alert('invalid email or password format')</script>";

        }
      }
        ?>
             
        </div>
  </section></center>

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>