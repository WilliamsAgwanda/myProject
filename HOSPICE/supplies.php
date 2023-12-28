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
      background-color: #03305D;
      margin-top:100px;
    
    }
    h2{
      color: #fff;
      font-family: Verdana;
      font-weight: 200;
     
      
       
    }
    .profile{
      
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.4), 0 6px 20px 0 rgba(0,0,0,0.3);
      width:50%;
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
        background-color:#1B7202;
       
    }
    .imp{
        border-radius: 50%;
    }
    .imp1{
        border-top-left-radius: 31px;
        border-bottom-right-radius: 31px;
        border-top-right-radius: 31px;
        border-bottom-left-radius: 31px;
      }
      label{
          color: #fff;
      }
      form{
      
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.4), 0 6px 20px 0 rgba(0,0,0,0.3);
      width:60%;
    }
.toleft{
  text-align: left;
  margin-left: 20px;
  color: #fff;
  color:#fff;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      font-size: 10px;  
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
h5{
      color:#fff;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      font-size: 10px;    
    }
    input{
      
      border-top-left-radius: 10px;
      border-bottom-right-radius: 10px;
      border-top-right-radius: 10px;
      border-bottom-left-radius: 10px;
      height: 36px;
      width: 90%;
      font-size:20px;
    }
    select{
      border-top-left-radius: 10px;
      border-bottom-right-radius: 10px;
      border-top-right-radius: 10px;
      border-bottom-left-radius: 10px;
      height: 36px;
      width: 90%;
      font-size:20px;
    }
    button{
      background-color: #0F92F6;
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
            <a href="strkeeper.php"><img src="arrow.jpg"></a>
            <a href="newsupp.php"><button>NEW ITEM</button></a>
        </nav>
   <form class="form" enctype="multipart/form-data" method="POST" action=<?php $_SERVER["PHP_SELF"];?>><br>
       
          <i><b><h2>Add supplies</h2></b></i><br><br>
           <div class="form-group toleft">
             <h5>Item:</h5>
            <select name="item">
                 <?php
                     $sql="SELECT item from inventory;";
                     $r=mysqli_query($conn,$sql);
                     while($data=mysqli_fetch_array($r)){
                       $item=$data['item']; ?>
                       <option><?php echo $item; ?></option>
                     <?php }
                 ?>
            </select>
           </div>
           <br>
           <div class="form-group toleft">
            <h5>Quantity:</h5>
            <input type="text" required name="quantity" >
          </div>
          <br>
          
          <br><br>
          
           <div>
             <input class="log" type="submit" value="ADD" name="add"></a>
           </div><br><br><br><br><br><br><br><br><br><br><br>
        </form>
        <?php
        if(isset($_POST['add'])){
        $item=$_POST['item'];
        $quantity=$_POST['quantity'];
   if(preg_match("/^[0-9]*$/",$quantity)){

          $sql1="UPDATE inventory set quantity=quantity+$quantity where item='$item';";
          $r1=mysqli_query($conn,$sql1);
          if($r1){
            echo"<script>alert('Added Successfully')</script>";
          }else{
            echo"<script>alert('Error try again')</script>";
          }
        }else{
          echo"<script>alert('Please make sure the quantity is a number')</script>";
            
        }
        }
        ?>
           
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