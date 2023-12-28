<?php
include "db.php";
session_start();
$pass=$_SESSION['pass'];
$reg=$_SESSION['reg'];
?>
 <?php
    if(isset($_POST['submit'])){
      for($i=0;$i<sizeof($_POST['dat']);$i++){
        $dat1=$_POST['dat'][$i];
        $test1=$_POST['test'][$i];
        $results1=$_POST['results'][$i];
        
        $sql1="UPDATE test set results='$results1' where regno='$reg' && dat='$dat1' && test='$test1';";
        $r1=mysqli_query($conn,$sql1);  
      }
     
        echo"<script>alert('Done! Results In')</script>";
      
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
      width:70%;
    }
    input{
        width: 200px;
        height:40px;
        margin-bottom: 20px;
       
        border:0px;
      border-top-left-radius: 10px;
      border-bottom-right-radius: 10px;
      border-top-right-radius: 10px;
      border-bottom-left-radius: 10px;
      
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
    .log{
      background-color:#0F92F6;
    }
    .hds{
      
      color: rgb(110, 189, 253);
      font-size:30px;
    }
    hr{
      background-color:#0F92F6;
      }
  </style>
  
</head>
<body>
  <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-b">



    
</section>


  <center><section class="sec1">
    
     
   <div class="container">
   <form class="form" enctype="multipart/form-data" method="POST" action=<?php $_SERVER["PHP_SELF"];?>>
       
            <nav class="navbar navbar-light bg-light">
                <a href="lab.php"><img src="arrow.jpg"></a>
                <a><img src="menu.jpg"></a></a>
      
    </nav>
    <i><h2>Patient Details</h2><br><br></i>
                   
                   <table border="1" class="table table-striped table-bordered table-hover table-condensed">
                       <tr class="hds">
                           <th>Reg No</th>
                           <th>Name</th>
                           <th>Gender</th>
                           <th>Date of Birth</th>
                          </tr>
        
                          <?php
                          $sql="SELECT regno,fname,lname,gender,dob from patients where regno='$reg';";
                          $r=mysqli_query($conn,$sql);
                          while($d=mysqli_fetch_array($r)){
                           $regno=$d['regno'];
                           $fname=$d['fname'];
                           $lname=$d['lname'];
                           $gender=$d['gender'];
                           $dob=$d['dob'];
                      
                          ?>
                          <tr>
                            <td><?php echo $regno; ?></td>
                            <td><?php echo $fname." ".$lname; ?></td>
                            <td><?php echo $gender; ?></td>
                            <td><?php echo $dob; ?></td>
        
                          </tr> <?php } ?>  </table><hr><hr>
    <i><h2>Test Records</h2><br><br></i>
           <table border="1" class="table table-striped table-bordered table-hover table-condensed">
               <tr class="hds">
                   <th>Date Scheduled</th>
                   <th>Test</th>
                   <th>Results</th>
                   
                  </tr>

                  <?php
                  $sql="SELECT dat,test,results from test where regno='$reg' && dat=curdate();";
                  $r=mysqli_query($conn,$sql);
                  while($d=mysqli_fetch_array($r)){
                   $dat=$d['dat'];
                   $test=$d['test'];
                   $results=$d['results'];
                   
              
                  ?>
               <tr>
                   <td><input type="text" name="dat[]" require readonly value="<?php echo $dat; ?>"></td>
                   <td><input type="text" name="test[]" require readonly value="<?php echo $test; ?>"></td>
                   <td><input type="text" name="results[]"  require value="<?php echo $results; ?>"></td>
                   
                   
                </tr><?php } ?>
                
                
           </table>
           <br>
           
           <div>
            <input class="log" type="submit" value="SUBMIT" name="submit">
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