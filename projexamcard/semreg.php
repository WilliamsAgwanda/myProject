<?php
include_once 'hhh.php';
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
            <h1>Semester Registration Page</h1>
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <!--<h3 class="card-title">Student Details</h3>-->

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div>
         <table id="example1" class="table table-bordered table-striped">
                  <tr>
                    <th>Student Details</th>
                    <!--<th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>EMAIL</th>-->
                    
                  </tr>
           <?php
         $sql = "SELECT * FROM students where email='$user' && regno='$pass';";
                   $result= mysqli_query($conn,$sql);
                  while($data=mysqli_fetch_array($result)){
                  $regno= $data['regno'];
                  $fn = $data['fn'];
                  $ln= $data['ln'];
                  $email= $data['email'];
                 
            ?>
                
              <tr>
                <td>REG NO</td>
                <td><?php echo $regno;?></td>
              </tr>
              <tr>
                <td>FIRST NAME</td>
                <td><?php echo $fn;?></td>
              </tr>
              <tr>
                <td>LAST NAME</td>
                <td><?php echo $ln;?></td>
              </tr>
              <tr>
                <td>EMAIL</td>
                <td><?php echo $email;?></td>
              </tr><?php }?>

                  </table>

         </div>
         
            
            <div class="row">
              <div class="col-12 col-sm-6">
                  
                     
                <div class="form-group">
                <form action="<?php $_SERVER["PHP_SELF"];?>" method="POST">
                  <label>Register Semester</label>
                  <marquee class="btn-danger">pick your stage below</marquee>
                  <select  name="select" class="form-control select2 select2-purple" data-dropdown-css-class="select2-purple" style="width: 100%;">
                    <option selected="selected">y1s1</option>
                    <option>y1s2</option>
                    <option>y2s1</option>
                    <option>y2s2</option>
                    <option>y3s1</option>
                    <option>y3s2</option>
                    <option>y4s1</option>
                    <option>y4s2</option>
                  </select>
                  
                  
                  <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-danger" ></div>

                </form>
                <?php
                

                if(isset($_POST['submit'])){
                  $stage=$_POST['select'];
                   $q=" DROP TABLE $pass;";
                   mysqli_query($conn, $q);

                      $que="UPDATE students set stage='$stage'where email='$user' && regno='$pass';";
                      mysqli_query($conn, $que);
                      $que1="SELECT stage from students where email='$user' && regno='$pass' && stage='$stage';";
                      mysqli_query($conn, $que1);
                        
                        if (mysqli_num_rows(mysqli_query($conn, $que1)) == 0) {
                           echo '<script>alert("Please try again")</script>';
                            
                        }elseif (mysqli_num_rows(mysqli_query($conn, $que1))==1) {
                          
                  
                            echo '<script>alert("semester registration successful")</script>';
                        }
                      


                }
                ?>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
            the plugin.
          </div>
        </div>
        <!-- /.card -->

       

       
            
             
            
       
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
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
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>
</body>
</html>
