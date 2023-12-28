<?php 
session_start();
include "db.php";
?>
<?php
 if(isset($_REQUEST['id'])){
     $id=$_GET['id'];
 } 
   if(isset($_POST['cancel'])){
       header('location:removeemp.php');
   }
   if(isset($_POST['delete'])){
       echo $id;
       $sql="DELETE from employee where idno='$id';";
       $r=mysqli_query($conn,$sql);
       header('location:removeemp.php');
       
   }
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
  
  
  <title>DEL</title>
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
      background-color: #03305D;
      margin-top:100px;
    
    }
    
    input{
      
      border-top-left-radius: 10px;
      border-bottom-right-radius: 10px;
      border-top-right-radius: 10px;
      border-bottom-left-radius: 10px;
      height: 50px;
      width: 90%;
      font-size:25px;

    }
    
    form{
      
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.4), 0 6px 20px 0 rgba(0,0,0,0.3);
      width:90%;
    }
.toleft{
  text-align: left;
  margin-left: 20px;
}
a{
  margin-left: 100px;
  margin-bottom: 20px;
}

button{
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
      background-color:#0F92F6;
      width: 100px;
      height: 40px;
      margin-left:70px;
      
      border: 0px;
}
.log1{
      border-top-left-radius: 15px;
      border-bottom-right-radius: 15px;
      border-top-right-radius: 15px;
      border-bottom-left-radius: 15px;
      background-color:#0F92F6;
      width: 100px;
      height: 40px;
      margin-left:0px;
      border: 0px;
}
img{
  border-radius: 50%;
}
.hds{
      
      color: rgb(110, 189, 253);
      font-size:30px;
    }
    table{
        color:#fff;
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
    
      <form class="form" method="POST" action="<?php $_SERVER["PHP_SELF"];?>"><br>
        
             <i><b><h2 >Confirm Deletion</h2></b></i><br><br>
              
              <?php
                  $sql="SELECT idno,fname,lname,phoneno,email,position,gender from employee where idno='$id';";
                  $r=mysqli_query($conn,$sql);?>

           <table border="1" class="table table-striped table-bordered table-hover table-condensed">
           <tr class="hds">
                  <th>ID NO</th>
                  <th>Name</th>
                   <th>Phone No</th>
                   <th>Email</th>
                   <th>Position</th>
                   <th>Gender</th>
                   
           </tr>
<?php
                  while($d=mysqli_fetch_array($r)){
                    $idno=$d['idno'];
                    $fname=$d['fname'];
                    $lname=$d['lname'];
                    $phoneno=$d['phoneno'];
                    $email=$d['email'];
                    $position=$d['position'];
                    $gender=$d['gender'];
                    echo"<tr>
                  <td>$idno</td>
                   <td> $fname".' '."$lname </td>
                   <td>$phoneno </td>
                   <td> $email </td>
                   <td> $position </td>
                   <td>$gender </td>
                   
                   </tr>";}?></table>
                   <div class="form-group toleft">
                <h5>Proceed to delete this user?</h5><br><br>
                
              </div><br>

             <div>
              <input class="log1" type="submit" value="CANCEL" name="cancel">
                
                <input class="log" type="submit" value="DELETE" name="delete">
              </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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