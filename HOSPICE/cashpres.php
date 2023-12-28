<?php
include "db.php";
session_start();
$pass=$_SESSION['pass'];
$reg=$_SESSION['reg'];
?>
<?php
    if(isset($_POST['pay'])){
      $s="UPDATE prescription set payment='Paid',datepaid=curdate() where regno='$reg' && payment='Not Paid';";
      $f=mysqli_query($conn,$s);
      $s1="UPDATE test set payment='Paid',datepaid=curdate() where regno='$reg' && payment='Not Paid';";
      $f1=mysqli_query($conn,$s1);
      $s2="UPDATE admit set statuss='DischargedPaid',datepaid=curdate() where regno='$reg' && statuss='Discharged';";
      $f2=mysqli_query($conn,$s2);

      for($i=0;$i<sizeof($_POST['service']);$i++){
        $service=$_POST['service'][$i];

        $s3="UPDATE inventory set quantity=quantity-1 where item='$service';";
        $f3=mysqli_query($conn,$s3);
        
  }
      

      if($f && $f1 && $f2){
        header('location:receipt.php');
      }
       
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
    hr{
      background-color:#0F92F6;
      }
      .tbl{
        width:50%;
      }
      input{
        
        
       
        width:120px;
         border:0px;
       border-top-left-radius: 10px;
       border-bottom-right-radius: 10px;
       border-top-right-radius: 10px;
       border-bottom-left-radius: 10px;
       
      
     }
     .med{
       width:230px;
         border:0px;
       border-top-left-radius: 10px;
       border-bottom-right-radius: 10px;
       border-top-right-radius: 10px;
       border-bottom-left-radius: 10px;
     }
     .log{
       background-color:#0F92F6;
       margin-left:190px;
       width:100px;
     }
     .log1{
       background-color:#0F92F6;
       margin-right:190px;
       width:100px;


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
                <a href="cashrec.php"><img src="arrow.jpg"></a>
                <a><img src="menu.jpg"></a></a>
      
    </nav>
                  <i><h2>Patient Details</h2><br></i>
                   
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
        
                          </tr> <?php } ?>  </table><hr><hr><br>
              <i><h2>Billing Records</h2><br><br></i>
           <table border="1" class=" tbl table table-striped table-bordered table-hover table-condensed">
               <tr class="hds">
                   <th>Service</th>
                   <th>Price</th>
                   
                  </tr>

                  <?php
                  $sql="SELECT inventory.price,prescription.medicineInjection from inventory,prescription where
                  inventory.item=prescription.medicineInjection && regno='$reg' && prescription.payment='Not Paid';";
                  $r=mysqli_query($conn,$sql);
                  if(mysqli_num_rows($r)!=0){

                  while($d=mysqli_fetch_array($r)){
                   $services=$d['medicineInjection'];
                   $price=$d['price'];
                   
              
                  ?>
               <tr>
                   <td><input class="med" type="text" name="service[]" readonly value="<?php echo $services; ?>"></td>
                   <td><input  type="number" name="price[]" readonly value="<?php echo $price; ?>"></td>
                   
                   
                </tr><?php } }else{
                  echo'<tr>
                  <td><input class="med" type="text" name="service[]" readonly value="Service Fee"></td>
                  <td><input  type="number" name="price[]" readonly value="0"></td>
                  
                  
               </tr>';
                }?>
                <?php
                  $sql1="SELECT dod-doa AS d FROM admit where regno='$reg' && statuss='Discharged';";
                  $r1=mysqli_query($conn,$sql1);
                  if(mysqli_num_rows($r1)==1){
                  while($d=mysqli_fetch_array($r1)){
                   $days=$d['d'];
                  $calculate=$days*400;
                  $_SESSION['calculate']=$calculate;
                   
            echo'
               <tr>
               <td><input class="med" type="text" name="admission[]" readonly value="Admission Fee"></td>
                   
                   <td><input  type="number" name="calc" readonly value="'.$calculate.'" ></td>
                   
                   
                   
                </tr>'; }}else{
                  $calculate=0;
                  $_SESSION['calculate']=$calculate;
                         
                  echo '
                  <tr>
                  <td><input class="med" type="text" name="admission[]" readonly value="Admission Fee"></td>
                      
                      <td><input  type="number" name="calc" readonly value="0" ></td>
                      
                      
                      
                   </tr>';
                } ?>
                <?php
                  $sql2="SELECT test,results from test where regno='$reg' && payment='Not Paid' && results!='Not Yet In';";
                  $r2=mysqli_query($conn,$sql2);
                  if(mysqli_num_rows($r2)!=0){

                  while($d=mysqli_fetch_array($r2)){
                   $results=$d['results'];
                   $test=$d['test'];

                 if($results!="Not Yet In"){
                   $labfee=500;
              
                  ?>
               <tr>
               <td><input class="med" type="text" name="labfee[]" readonly value="<?php echo 'Laboratory Fee: '.$test; ?>"></td>
                   
                   <td><input  type="number" name="labcalc[]" readonly value="<?php echo $labfee; ?>"></td>
                   
                   
                   
                </tr><?php } } }else{
                  echo'               
                <tr>
                  <td><input class="med" type="text" name="labfee[]" readonly value="Laboratory Fee: "></td>
                      
                      <td><input  type="number" name="labcalc[]" readonly value="0"></td>
                 </tr>';
                } ?>
                <?php
                if(isset($_POST['total'])){
                  $calc=$_POST['calc'];
                  $totlab=0;
                  $totmed=0;

                 
      for($i=0;$i<sizeof($_POST['price']);$i++){
            $price=$_POST['price'][$i];
            $totmed=$totmed+$price;
      }
      for($i=0;$i<sizeof($_POST['labcalc']);$i++){
            $labcalc=$_POST['labcalc'][$i];
            $totlab=$totlab+$labcalc;
             
      }
              $ttl=$calc+$totmed+$totlab;
              echo"
              <tr>
              <td>TOTAL CHARGES</td>
                   
                   <td>$ttl</td>
              </tr>
              ";
              $_SESSION['ttl']=$ttl;
                }
               
                ?>
                
                
           </table><br>
           
           <div class="navbar">
            <input class="log" type="submit" value="CALCULATE" name="total">
            <input class="log1" type="submit" value="PAY" name="pay">
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