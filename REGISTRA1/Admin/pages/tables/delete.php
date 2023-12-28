<?php
    include 'hhh.php';
    session_start();
    $id=$_GET['id'];
    
    $_SESSION['id']=$id;
    $sql = "DELETE from student120 where adm='$id';";
    /*echo"<script> conf=confirm('delete this record');
     if(conf){".
        mysqli_query($conn,$sql);
        "
       window.location.assign('data.php');
     }else{window.location.assign('data.php');}
    </script>";*/
    $query = mysqli_query($conn,$sql);
    header('location:data.php');

    /*echo"
    <div class='container'>
    <div class='row'>
      <div class='col-lg-4 col-lg-offset-4'>
      <p>DELETE THIS RECORD?</p>
      <a href='deleter.php' class='btn btn-danger'>DELETE</a>
      <a href='cancel.php' class='btn btn-danger'>CANCEL</a>

      </div>    
    </div>
    </div>
    ";*/
?>