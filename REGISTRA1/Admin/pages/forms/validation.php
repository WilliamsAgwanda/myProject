
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MASENO|STUDENT</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <style>
         .error{
           color:red;
         }
       </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index.php" class="brand-link">
      <img src="../../dist/img/logo.jpg" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Maseno</span>
    </a>
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <?php
                  include 'hhh.php';
    
    
    
    
    
                  $pass=$_SESSION['pass'];
                  $user=$_SESSION['user'];
              
                  $que= "SELECT photo FROM admini WHERE username='$user' AND pass= '$pass';";
                  $result= mysqli_query($conn,$que);
                  while($data=mysqli_fetch_array($result)){
                  $photo= $data['photo'];
              
              
              echo'<img src="../../dist/img/'.$photo; } echo '" class="img-circle elevation-2" alt="User Image">';
              ?>  
            </div>
            <div class="info">
              <a href="#" class="d-block">ADMIN</a>
            </div>
          </div>
    
     
   
    <!-- Sidebar -->
   <!-- <div class="sidebar">
       Sidebar user (optional) 
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>-->

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
             
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation + Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-sidebar-custom.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar <small>+ Custom Area</small></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li>
          
          
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="../forms/validation.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Students</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/validation2.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admins</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="../tables/data.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student Table</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/data1.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin Table</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="../calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../gallery.html" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>STUDENT TABLES</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Validation</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Fill The Form</h3>
              </div>
              <?php
                    include_once 'hhh.php';
                   
                    $ferr=$lerr=$aerr=$mailerr=$perr=$ierr=$serr=$cerr=$gerr="";
                  $fname=$lname=$adm=$email=$phoneno=$idno=$school=$course=$gender="";
                 
                  function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                  }
                  if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["fname"]) || empty($_POST["lname"] )) {
                      $ferr="first name required";
                      $lerr="last name required";
                      $aerr="adm required";
                      $mailerr="email required";
                      $perr="phone no required";
                      $ierr="id no required";
                      $serr="school required";
                      $cerr="course required";
                      $gerr="gender required";


                    } else {
                      $fname = test_input($_POST["fname"]);
                      $lname= test_input($_POST["lname"]);
                      $adm= test_input($_POST["adm"]);
                      $email= test_input($_POST["email"]);
                      $phoneno= test_input($_POST["phoneno"]);
                      $idno= test_input($_POST["idno"]);
                      $course= test_input($_POST["course"]);
                      $school=$_POST['school'];
                      $gender=$_POST['gender'];
                      $_SESSION['adm']=$adm;
                      // check if e-mail address is well-formed
                      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $mailerr= "Invalid email format";
                        //$passerr= "Only letters and white space allowed";
                        //$scherr="Only letters and white space allowed";
                      }elseif(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        
                        $file=$_FILES['file'];
                        //print_r($file);
                        $fileName=$_FILES['file']['name'];
                        $fileTmpName=$_FILES['file']['tmp_name'];
                        $fileSize=$_FILES['file']['size'];
                        $fileError=$_FILES['file']['error'];
                        $fileType=$_FILES['file']['type'];
                      
                        $fileExt= explode('.',$fileName);
                        $fileActualExt= strtolower(end($fileExt));
                        $allowed= array('jpg','jpeg','png','pdf');
                        if(in_array($fileActualExt,$allowed)){
                          if($fileError===0){
                            if($fileSize<10000000000){
                                     $fileNameNew= uniqid('',true).".".$fileActualExt;
                               $fileDestination='images/'.$fileNameNew;
                               $profile=$fileDestination;
                               $prof=$fileNameNew;
                                     move_uploaded_file($fileTmpName, $fileDestination);
                                      
                               include_once 'hhh.php';
                               $sql = "INSERT INTO student120(fname,lname,adm,email,phoneno,idno,school,course,gender,prof)
                              VALUES('$fname','$lname','$adm','$email','$phoneno','$idno','$school','$course','$gender','$prof');";
                               mysqli_query($conn, $sql);
                      
                                     $que= "SELECT fname,lname,adm FROM student120 WHERE adm='$adm';";
                                     mysqli_query($conn, $que);
                       
                            
                            //if (mysqli_num_rows(mysqli_query($conn, $que)) == 0) {
                               // header("Location:validation.html?error=EnterAllDetails");
                                //exit();
                            if(mysqli_num_rows(mysqli_query($conn, $que))==1) {
                              echo '<script>alert("Student records added successfully")</script>
                              <a href="stage_1.php" class="btn btn success" >CONTINUE</a>
                              ';
                                
                            } 
                                   }else{
                              echo "your file is too big!";
                            }
                      
                          }else{
                            echo "there was an error uploading your file!";
                          }
                      
                        }else{
                          echo "you cannot upload files of this type!";
                        }
                  }
                      }
                    
                  
              ?>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="firstname">FIrst Name</label>
                    <input type="text" name="fname" class="form-control" id="fname" placeholder="Enter first name" value="<?php $fname;?>">
                    <span class="error">* <?php echo $ferr;?></span>
                  
                  </div>
                  <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lname" class="form-control" id="fname" placeholder="Enter last name" value="<?php $lname;?>">
                    <span class="error">* <?php echo $lerr;?></span>
                  
                  </div>
                  <div class="form-group">
                    <label for="admission">Admission Number</label>
                    <input type="text" name="adm" class="form-control" id="adm" placeholder="Enter admission number" value="<?php $adm;?>">
                    <span class="error">* <?php echo $aerr;?></span>
                  
                  </div>
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="<?php $email;?>">
                    <span class="error">* <?php echo $mailerr;?></span>
                  
                  </div>
                 
                    <div class="form-group">
                      <label for="phoneno">Phone Number</label>
                      <input type="text" name="phoneno" class="form-control" id="phoneno" placeholder="enter phone number" value="<?php $phoneno;?>">
                      <span class="error">* <?php echo $perr;?></span>
                    
                    </div>
                    <div class="form-group">
                      <label for="idno">ID Number</label>
                      <input type="text" name="idno" class="form-control" id="idno" placeholder="enter id number" value="<?php $idno;?>">
                      <span class="error">* <?php echo $ierr;?></span>
                    
                    </div>
                    <div class="form-group">
                      <label for="school">CLICK ON YOUR SCHOOL</label><br>
                      
                       <input  onclick="mao();"type="radio"  name="school" value="MATHEMATICS" checked> MATHEMATICS<br>
                       <input  onclick="two();"type="radio"  name="school" value="COMPUTING"> COMPUTING<br>  
                    <span class="error">* <?php echo $serr;?></span>
                        
                    </div>
                    <div class="form-group" id="cores">
                      
                      
                    </div>
                    <div class="form-group">
                      <label for="gender">Gender</label>
                      <input type="radio" name="gender"  value="male" id="gender"  checked>male
                      <input type="radio" name="gender"  value="female" id="gender" >female
                      <input type="radio" name="gender"  value="other" id="gender" >other<br>
                      <span class="error">* <?php echo $gerr;?></span>
                    
                    </div>
                  <div class="form-group">
                    <label for="profile">profile</label>
                    <input type="file" name="file" class="form-control">
                  </div>
                  <!--<div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                    </div>
                  </div>
                </div>
                /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://maseno.ac.ke">maseno.ac.ke</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
 
 <script type="text/javascript">
   function mao() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
              document.getElementById("cores").innerHTML = xhttp.responseText;
            }
        };
              xhttp.open("GET", "mao.php", true);
              xhttp.send();
      }

    function two(){
  
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200) {
        document.getElementById("cores").innerHTML = xhr.responseText;
        }
  };
  xhr.open("GET", "comp.php", true);
  xhr.send();

  
   }
</script>

</body>
</html>
