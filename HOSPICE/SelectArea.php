<?php 
session_start();
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
      width:30%;
    }
    input{
        width: 300px;
        height: 45px;
        margin-bottom: 20px;
        background-color: #0F92F6;
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
  </style>
  
</head>
<body>
  <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-b">



    
</section>


  <center><section class="sec1">
    
     
   <div class="container">
       <form method="POST" action="<?php $_SERVER["PHP_SELF"];?>">
            <nav class="navbar navbar-light bg-light">
       <div class="mn"><a><img src="menu.jpg"></a></a></div>
      
    </nav>
           <h2>Select Your Area</h2><br><br>
        <a href="mgrlogin.php"><input type="button" value="Manager"name="manager"></a><br>
        <a href="doclogin.php"><input type="button" value="Doctor" name="doctor"></a><br>
        <a href="nurselogin.php"><input type="button" value="Nurse" name="nurse"></a><br>
        <a href="recelogin.php"><input type="button" value="Receptionist" name="receptionist"></a><br>
        <a href="lablogin.php"><input type="button" value="Lab Technician" name="labtech"></a><br>
        <a href="cashlogin.php"><input type="button" value="Cashier" name="cashier"></a><br>
        <a href="pharmlogin.php"><input type="button" value="Pharmacist" name="pharmacist"></a><br>
        <a href="storelogin.php"><input type="button" value="Store Keeper" name="storekeeper"></a><br><br>
    </form>    
    <?php
        // if(isset($_POST['manager']) || isset($_POST['doctor']) || isset($_POST['nurse'])
        // || isset($_POST['receptionist']) || isset($_POST['labtech']) || isset($_POST['cashier'])
        // || isset($_POST['pharmacist']) || isset($_POST['storekeeper'])){
// if(isset($_POST['manager'])){
//             $manager=$_POST['manager'];
//             $_SESSION["manager"]=$manager;
// }

// if(isset($_POST['nurse'])){
//      $nurse=$_POST['nurse'];
//      $_SESSION["nurse"]=$nurse;
// }
        
            // $doctor=$_POST['doctor'];
            // $_SESSION["doctor"]=$doctor;
          
           
          
            // $rece=$_POST['receptionist'];
            // $_SESSION["receptionist"]=$rece;
         
            // $labtech=$_POST['labtech'];
            // $_SESSION["labtech"]=$labtech;
          
            // $cashier=$_POST['cashier'];
            // $_SESSION["cashier"]=$cashier;
          
            // $pharm=$_POST['pharmacist'];
            // $_SESSION["pharmacist"]=$pharm;
          
            // $storek=$_POST['storekeeper'];
            // $_SESSION["storekeeper"]=$storek;
        
          
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