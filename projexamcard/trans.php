<?php
session_start();
$user=$_SESSION["user"];
$pass=$_SESSION["pass"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>STUDENT PORTAL</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="select2.min.css">
  <link rel="stylesheet" href="select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminlte.min.css">
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
        <a href="#" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
   </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="logo.jpg" alt="MSU" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">MSU</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

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
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
              
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="semreg.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Semester Registration</p>
                </a>
              </li>
              <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Academics
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="unitreg.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register units</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="examcard.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Examcard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="trans.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Transcript</p>
                </a>
              </li>
            </ul>
          </li>
            </ul>
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
            <h1>TRANSCRIPT</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Advanced Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <section class="content-header">
       <div class="container-fluid">
         <div class="row mb-2">
           <div class="col-md-5 col-md-offset-5">
             <marquee>click the download button</marquee>
            <form action="acadet.php" method="post"> 
             <button class="btn btn-success"name="download">DOWNLOAD</button>
           </form>
           </div>
         </div>
       </div>
    </section>

    <!-- Main content -->
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="moment.min.js"></script>
<script src="jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="demo.js"></script>
<!-- Page specific script -->

<!--<script type="text/javascript">
   function downexam() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
             document.getElementById("examcard").innerHTML = xhttp.responseText;
             
            }
       };
              xhttp.open("GET", "card.php", true);
              xhttp.send();
      }
</script>-->

</body>
</html>
