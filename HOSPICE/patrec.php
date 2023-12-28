<?php
include "db.php";
session_start();
$pass=$_SESSION['pass'];
$idno=$_SESSION['idno'];

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
       font-weight: 100;
       margin-bottom: 20px;
       margin-top: 20px;
    }
    form{
      
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.4), 0 6px 20px 0 rgba(0,0,0,0.3);
      width:50%;
    }
    input{
        width: 100px;
        height:40px;
        margin-bottom: 20px;
        background-color:#0F92F6;
        border:0px;
      border-top-left-radius: 10px;
      border-bottom-right-radius: 10px;
      border-top-right-radius: 10px;
      border-bottom-left-radius: 10px;
      color:#fff;
      font-size: 25px;
      font-weight: 100;
    }
    nav{
        height: 50px;
    }
    .mn{
        margin-left: 270px;
    }
    a{
        color: #fff;
    }
    table{
        color: #fff;
    }
    button{
        color: #fff;
        background-color: red;
        border:0px;
        border-top-left-radius: 10px;
      border-bottom-right-radius: 10px;
      border-top-right-radius: 10px;
      border-bottom-left-radius: 10px;
    }
    .hds{
      
      color: rgb(110, 189, 253);
      font-size:30px;
    }
  </style>
  
</head>
<body>
  <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-b">



    
</section>


  <center><section class="sec1">
    
     
   <div class="container">
       <form>
            <nav class="navbar navbar-light bg-light">
                <a href="receptionhome.php"><img src="arrow.jpg"></a>
                <a><img src="menu.jpg"></a></a>
      
    </nav>
           <i><h2>Patient Records</h2><br><br><br><br></i>
           <table border="1" class="table table-striped table-bordered table-hover table-condensed">
             <?php
                 $sql="SELECT idno,regno,fname,lname,phoneno,gender from patients where idno='$idno';";
                 $r=mysqli_query($conn,$sql);
                 if(mysqli_num_rows($r)==1){
                 while($d=mysqli_fetch_array($r)){
                   $idno=$d['idno'];
                   $reg=$d['regno'];
                   $fname=$d['fname'];
                   $lname=$d['lname'];
                   $phoneno=$d['phoneno'];
                   $gender=$d['gender'];

                 
             ?>
            <tr>
                   <th class="hds">ID No</th>
                   <td><?php echo $idno; ?></td>
            </tr>  
           <tr>
                   <th class="hds">Regno</th>
                   <td><?php echo $reg; ?></td>
            </tr>
            <tr>
                   <th class="hds">Name</th>
                   <td><?php echo $fname." ".$lname; ?></td>

            </tr>
            <tr>
                   <th class="hds">Phone No</th>
                   <td><?php echo $phoneno; ?></td>

            </tr>
            <tr>
                   <th class="hds">Gender</th>
                   <td><?php echo $gender; ?></td>

            </tr><?php } }else{
              echo"<script>alert('Check ID No and try again')</script>";
            } ?>
              
                
           </table><br>
           
           <div>
            <a href="card.php"><input class="log" type="button" value="PRINT"></a>
          </div><br><br><br>
           <br><br>
       
        
        <br><br><br><br><br><br><br><br><br><br><br>
    </form>    
        
             
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