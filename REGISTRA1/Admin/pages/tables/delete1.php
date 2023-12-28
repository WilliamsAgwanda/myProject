<?php
    include 'hhh.php';
    session_start();
    $id=$_GET['id'];
    
    $_SESSION['id']=$id;
    $sql = "DELETE from admini where pass='$id';";
   
    $query = mysqli_query($conn,$sql);
    /*echo"<script> conf=confirm('delete this record');
     if(conf){";
        $query = mysqli_query($conn,$sql);
        echo"

     }else{window.location('data1.php');}
    </script>";*/
   header('location:data1.php');
?>