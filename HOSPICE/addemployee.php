<?php
include "db.php";
session_start();
$pass=$_SESSION['pass'];
?>
      <?php
       $ferr="";$lerr="";$iderr="";$perr="";$kerr="";$eerr="";
       $fname="";$lname="";$idno="";$phoneno="";$krapin="";$email="";
if(isset($_POST['submit'])){
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $idno=$_POST['idno'];
  $phoneno=$_POST['phoneno'];
  $krapin=$_POST['krapin'];
  $email=$_POST['email'];
  $gender=$_POST['gender'];
  $role=$_POST['role'];
 // $kracopy=$_POST['kracopy'];
  //$idcopy=$_POST['idcopy'];
  //$prof=$_POST['prof'];
  
  $file=$_FILES['kracopy'];
  $file1=$_FILES['idcopy'];
  $file2=$_FILES['prof'];


	//print_r($file);
	$fileName=$_FILES['kracopy']['name'];
	$fileName1=$_FILES['idcopy']['name'];
	$fileName2=$_FILES['prof']['name'];
  

	$fileTmpName=$_FILES['kracopy']['tmp_name'];
	$fileTmpName1=$_FILES['idcopy']['tmp_name'];
	$fileTmpName2=$_FILES['prof']['tmp_name'];
  
	$fileSize=$_FILES['kracopy']['size'];
	$fileSize1=$_FILES['idcopy']['size'];
	$fileSize2=$_FILES['prof']['size'];

	$fileError=$_FILES['kracopy']['error'];
	$fileError1=$_FILES['idcopy']['error'];
	$fileError2=$_FILES['prof']['error'];
  
	$fileType=$_FILES['kracopy']['type'];
	$fileType1=$_FILES['idcopy']['type'];
	$fileType2=$_FILES['prof']['type'];
  

	$fileExt= explode('.',$fileName);
	$fileExt1= explode('.',$fileName1);
	$fileExt2= explode('.',$fileName2);
  
  
	$fileActualExt= strtolower(end($fileExt));
	$fileActualExt1= strtolower(end($fileExt1));
	$fileActualExt2= strtolower(end($fileExt2));

	$allowed= array('jpg','jpeg','png','pdf');
	$allowed2= array('pdf','doc','docx');


	if(in_array($fileActualExt,$allowed2) && in_array($fileActualExt1,$allowed2) && in_array($fileActualExt2,$allowed)){
		if($fileError===0 && $fileError1===0 && $fileError2===0){
			if($fileSize<100000000000000 && $fileSize1<100000000000000 && $fileSize2<100000000000000){
         $fileNameNew= uniqid('',true).".".$fileActualExt;
         $fileNameNew1= uniqid('',true).".".$fileActualExt1;
         $fileNameNew2= uniqid('',true).".".$fileActualExt2;

			   $fileDestination='kracopy/'.$fileNameNew;
			   $fileDestination1='idcopy/'.$fileNameNew1;
			   $fileDestination2='prof/'.$fileNameNew2;

			   $kc=$fileDestination;
			   $idc=$fileDestination1;
			   $profile=$fileDestination2;

			   $kracopy=$fileNameNew;
			   $idcopy=$fileNameNew1;
			   $prof=$fileNameNew2;
               move_uploaded_file($fileTmpName, $fileDestination);
               move_uploaded_file($fileTmpName1, $fileDestination1); 
               move_uploaded_file($fileTmpName2, $fileDestination2);
               
               $account=date("U");

if(!preg_match("/^[a-z0-9.]+@+[a-z.]*$/",$email)){
	 $eerr="invalid email";}
if(!preg_match("/^[a-zA-Z]*$/",$fname)){
  $ferr="invalid first name";}
if(!preg_match("/^[a-zA-Z]*$/",$lname)){
  $lerr="invalid last name";}
if(!preg_match("/^[0-9]*$/",$idno)){
  $iderr="invalid id No";}
if(!preg_match("/^[0-9]*$/",$phoneno)){
  $perr="invalid phone number";}
if(!preg_match("/^[0-9]*$/",$krapin)){
  $kerr="invalid kra pin";
}
if(preg_match("/^[a-z0-9.]+@+[a-z.]*$/",$email) && preg_match("/^[a-zA-Z]*$/",$fname) && preg_match("/^[a-zA-Z]*$/",$lname)
&& preg_match("/^[0-9]*$/",$idno) && preg_match("/^[0-9]*$/",$phoneno) && preg_match("/^[0-9]*$/",$krapin)){
$sql="INSERT into employee(fname,lname,idno,phoneno,krapin,email,position,gender,salary,idcopy,kracopy,prof)
values('$fname','$lname','$idno','$phoneno','$krapin','$email','$role','$gender',salo('$role'),'$idcopy','$kracopy','$prof');";
$r=mysqli_query($conn,$sql);
$sql2="SELECT lname from employee where idno='$idno';";
$r2=mysqli_query($conn,$sql2);
 

    if(mysqli_num_rows($r2)==1){
      //header('location:loginb.php');
      echo'<script type="text/javascript">alert("Registration Successful");
      window.location.replace("mgrprofile.php");</script>';
      
    
    }else{
      echo"<script>alert('An error occurred, Please try again')</script>";
      
    }
 
  }

}else{
  echo "<script>alert('your file is too big!')</script>";
}

}else{
echo "<script>alert('there was an error uploading your file!')</script>";
}

}else{
echo "<script>alert('you cannot upload files of this type!')</script>";
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
  
  
  <title>Add</title>
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
    span{
      color:red;
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
            <a href="mgrprofile.php"><img src="arrow.jpg"></a>
            <a><img src="menu.jpg"></a>
        </nav>
        <form class="form" enctype="multipart/form-data" method="POST" action=<?php $_SERVER["PHP_SELF"];?>><br><br><br>
          <i><b><h2>Add Employee</h2></b></i><br><br>
           <div class="form-group toleft">
             <h5>First Name:</h5>
             <input type="text" placeholder="Enter first name" required value="<?php echo $fname; ?>" name="fname" ><br>
             <span>*<?php echo $ferr; ?></span>
           </div>
           <div class="form-group toleft">
             <h5>Last Name:</h5>
             <input type="text" placeholder="Enter last name" required value="<?php echo $lname; ?>" name="lname" ><br>
             <span>*<?php echo $lerr; ?></span>
           </div>
           <div class="form-group toleft">
             <h5>ID No:</h5>
             <input type="text" placeholder="Enter id No" required value="<?php echo $idno; ?>" name="idno"><br>
             <span>*<?php echo $iderr; ?></span>
           </div>
           <div class="form-group toleft">
            <h5>Phone No:</h5>
            <input type="text" placeholder="Enter phone No " required value="<?php echo $phoneno; ?>" name="phoneno"><br>
            <span>*<?php echo $perr; ?></span>
          </div>
          <div class="form-group toleft">
            <h5>KRA Pin:</h5>
            <input type="text" placeholder="Enter KRA pin" required value="<?php echo $krapin; ?>" name="krapin"><br>
            <span>*<?php echo $kerr; ?></span>
          </div>
          <div class="form-group toleft">
            <h5>Email:</h5>
            <input type="email"  placeholder="Enter email" required value="<?php echo $email; ?>" name="email"><br>
            <span>*<?php echo $eerr; ?></span>
          </div>
          <div class="toleft">
            Role:<br>
            <select name="role">
             <option>Manager</option>
              <option>Doctor</option>
              <option>Nurse</option>
              <option>Pharmacist</option>
              <option>Lab Technician</option>
              <option>Receptionist</option>
              <option>Cashier</option>
              <option>Store Keeper</option>
             </select>
          </div><br>
          <div class="toleft">
            Gender:
            <select name="gender">
              <option>Male</option>
              <option>Female</option>
            </select>
          </div><br>

          <div class="form-group toleft">
            KRA copy:
            <input type="file"  required name="kracopy"><br>
            <span>*Choose a .pdf or .doc or .docx file</span>
          </div><br>
          <div class="form-group toleft">
            ID copy:
            <input type="file" required name="idcopy"><br>
            <span>*Choose a .pdf or .doc or .docx file</span>

          </div><br>
          <div class="form-group toleft">
            Profile:
            <input type="file" required name="prof"><br>
            <span>*Choose a .jpg or .jpeg or .png file</span>

          </div><br>
         
          
          <br><br>
          
           <div>
             <input class="log" type="submit" value="SUBMIT" name="submit">
           </div><br><br><br>
  </form>
           
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