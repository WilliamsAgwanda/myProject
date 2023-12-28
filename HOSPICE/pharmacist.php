<?php
include "db.php";
session_start();
$pass=$_SESSION['pass'];

?>
<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.12.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="logohospice.jpg" type="image/x-icon">
  <meta name="description" content="Web Site Builder Description">


  <title>Area</title>
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
          background-color:#03305D;
    }
    .sec1{
      background-color:#03305D;
      margin-top:100px;

    }
    h2{
      color: #fff;
      font-family: Verdana;
      font-weight: 200;



    }
    .profile{

      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.4), 0 6px 20px 0 rgba(0,0,0,0.3);
      width:30%;
      color: #fff;
    }

    nav{
        height: 50px;
    }
    .mn{
        margin-right: 40px;
    }
    a{
        color: #fff;
    }
    .customer{
        height: 150px;
        background-color:#05548F;

    }
    .imp{
        border-radius: 50%;
    }
    .imp1{
        border-top-left-radius: 43px;
        border-bottom-right-radius: 43px;
        border-top-right-radius: 43px;
        border-bottom-left-radius: 43px;
      }
      label{
          color: #fff;
      }


  </style>

</head>
<body>
  <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-b">




</section>


  <center><section class="sec1">


   <div class="container">
      <div class="profile">
        <nav class="navbar navbar-light bg-light">
            <a href="SelectArea.php"><img src="arrow.jpg"></a>
            <a><img src="menu.jpg"></a>

         </nav>
         <div class="customer  navbar"><br><br>
         <?php
              $sql="SELECT fname,prof from employee where idno='$pass';";
              $r=mysqli_query($conn,$sql);
              while($d=mysqli_fetch_array($r)){
                   $photo=$d['prof'];
                   $fname=$d['fname'];
                
            ?>
            <a><h2>Welcome,<br><?php echo $fname; ?></h2></a>
<a><img class="imp" src="prof/<?php echo $photo; ?>" class=" imp img-rounded img-responsive" style="height:100px; width:100px;"></a><?php } ?>
         
         </div>
         <br><br>
         <center><div>
            <a href="pharmrec.php"><img class="imp1" src="rec.jpg"><br>Records</a>
        </div>
       </center><br>
        <br><br><br><br><br>

      </div>


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
