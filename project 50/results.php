<?php
session_start();
include_once 'hhh.php';
$user=$_SESSION["user"];
$pass=$_SESSION["pass"];
$h=$_SESSION["host"];
$d=$_SESSION["database"];


?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>USERS PORTAL</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="logo.jpg" alt="MSU" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index2.php" class="brand-link">
      <img src="logo.jpg" alt="MSU" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
                Database
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
              
            <ul class="nav nav-treeview">
              
           
              <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
             
              <p>ACADEMICS
                 <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="addstu.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Student</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="rsem.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Register Semester</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="unitreg.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Register Units</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="examcard.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Exam card</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="results.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Enter Results</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="trans.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Transcript</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Deregister units</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Drop Student</p>
                    </a>
                </li>
            </ul>
          </li>
            </ul>
         
            <ul class="nav nav-treeview">
              
           
              <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
             
              <p>STATISTICS
                 <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                    <a href="male.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Male Students</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="studentsno.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Student Number by School</p>
                    </a>
                </li>

</ul></li></ul>
      
            
              
            <ul class="nav nav-treeview">
              
           
              <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
             
              <p>ADMINISTATIVE
                 <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Drop</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Alter</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="backup.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Backup</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="restore.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Restore</p>
                    </a>
                </li>
               
            </ul>
          </li>
            </ul>
            <ul class="nav nav-treeview">
              
           
              <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
             
              <p>ADD NEW USER
                 <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="createuser.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="grant.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>GRANT PRIVILEGES</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="revoke.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>REVOKE PRIVILEGES</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="procGrant.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>GRANT PROCEDURE PRIVILEGES</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="procRevoke.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>REVOKE PROCEDURE PRIVILEGES</p>
                    </a>
                </li>
              </ul>
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!--<h1 class="m-0">STUDENT DETAILS</h1>-->
          </div><!-- /.col -->
         <div>
         <table id="example1" class="table table-bordered table-striped">
                  <tr>
                    <th>User Details</th>
                    <!--<th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>EMAIL</th>-->
                    
                  </tr>
           <?php
         $sql = "SELECT host,user from mysql.user where user='$user' && host='$h';";
                   $result= mysqli_query($conn,$sql);
                  while($data=mysqli_fetch_array($result)){
                  $u= $data['user'];
                  $host = $data['host'];
                  
                 
            ?>
                
              <tr>
                <td>USERNAME</td>
                <td><?php echo $u;?></td>
              </tr>
              <tr>
                <td>HOST</td>
                <td><?php echo $host;?></td>
              </tr>
              
              <?php }?>

                  </table>

         </div>
        </div><!-- /.row -->
        <div class="row">
        <div class="col-12 col-sm-6">
          <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">SELECT UNIT TO ENTER RESULTS</h3>
              </div>
              <div class="card-body">
             <div class="form-group">
             <form action="toenter.php" method="post">
                <div class="form-group">
                  SELECT UNIT:
                  
      <select  name="correct" class="form-control select2 select2-purple" data-dropdown-css-class="select2-purple" style="width: 100%;">
      <?php
        $s1="SELECT unit_code,unit_name from units;";
        $r1= mysqli_query($conn,$s1);
        while($d1=mysqli_fetch_array($r1)){
           $unitcode=$d1['unit_code'];
           $unitname=$d1['unit_name'];
      ?>
                <option selected="selected"><?php echo $unitcode." ". $unitname; ?></option><?php } ?>

                </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-success"name="ok">OK</button>
                </div>
              </form>

             </div>
                  </div>
               
                  </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              
            </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="jquery.min.js"></script>
<!-- Bootstrap -->
<script src="bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="jquery.mousewheel.js"></script>
<script src="raphael.min.js"></script>
<script src="jquery.mapael.min.js"></script>
<script src="usa_states.min.js"></script>
<!-- ChartJS -->
<script src="Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dashboard2.js"></script>
</body>
</html>
