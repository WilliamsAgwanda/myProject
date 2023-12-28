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
  
  
  <title>Salary</title>
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
      width:90%;
    }
    input{
       
       
        border:3px;
        height:35px;
        border-top-left-radius: 5px;
      border-bottom-right-radius: 5px;
      border-top-right-radius: 5px;
      border-bottom-left-radius: 5px;
     
      
     
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
    .log{
      border-top-left-radius: 15px;
      border-bottom-right-radius: 15px;
      border-top-right-radius: 15px;
      border-bottom-left-radius: 15px;
      background-color: #0F92F6;
      width: 100px;
      height: 40px;
      margin-left: 10px; 
      border: 0px;
      color: #fff;



}

  </style>
  
</head>
<body>

  <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-b">



    
</section>


  <center><section class="sec1">
    
     
   <div class="container">
   <?php
    if(isset($_POST['update'])){
      for($i=0;$i<sizeof($_POST['idno']);$i++){
        $idn=$_POST['idno'][$i];
        $name=$_POST['name'][$i];
        $posi=$_POST['pos'][$i];
        $salo=$_POST['sal'][$i];
           
       
        ?>
        <form method="POST" action="<?php $_SERVER["PHP_SELF"]; ?>">
               <h2>Salary for <?php echo " ".$name." "; ?> is now <?php echo " ".$salo; ?></h2>
            </form>
              
    <?php
        $sql1="UPDATE employee set salary=$salo where idno='$idn';";
        $r1=mysqli_query($conn,$sql1);  
      }
     
        echo"<script>alert('Salary updates done')</script>";
      
      }
    ?>   
   
   <form class="form" enctype="multipart/form-data" method="POST" action=<?php $_SERVER["PHP_SELF"];?>>
            <nav class="navbar navbar-light bg-light">
                <a href="mgrprofile.php"><img src="arrow.jpg"></a>
                <a><img src="menu.jpg"></a></a>
      
    </nav>

           <i><h2>Salary  Records</h2><br><br></i>
           <table border="1" class="table table-striped table-bordered table-hover table-condensed">
               <tr class="hds">
                   <th>ID NO</th>
                   <th>Name</th>
                   <th>Position</th>
                   <th>Salary</th>
                  </tr>

                  <?php
                  $sql="SELECT idno,fname,lname,position,salary from employee;";
                  $r=mysqli_query($conn,$sql);
                  while($d=mysqli_fetch_array($r)){
                   $idno=$d['idno'];
                   $fname=$d['fname'];
                   $lname=$d['lname'];
                   $pos=$d['position'];
                   $sal=$d['salary'];
              
                  ?>
               <tr>
                   <td><input type="text" name="idno[]" readonly value="<?php echo $idno; ?>"></td>
                   <td><input type="text" name="name[]" readonly value="<?php echo $fname." ".$lname; ?>"></td>
                   <td><input type="text" name="pos[]" readonly value="<?php echo $pos; ?>"></td>
                   <td><input type="number" name="sal[]" required  value="<?php echo $sal; ?>"></td>
                   
                </tr><?php } ?>
                
                
           </table><br><br>
           <div>
             <input class="log" type="submit" value="UPDATE" name="update">
           </div><br><br><br><br><br>
       
        
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