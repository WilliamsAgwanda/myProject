<?php
session_start();
include_once 'hhh.php';
$user=$_SESSION["user"];
$pass=$_SESSION["pass"];
$h=$_SESSION["host"];
$d=$_SESSION["database"];
    if(isset($_POST['ok'])){
        $add2="SELECT user from mysql.procs_priv where host='$h' && user='$user' && Routine_name='sresults'";
        if (mysqli_num_rows(mysqli_query($conn,$add2))==0) {
          echo '<script>alert("You are not allowed to enter results or check the details and try again")</script>';
          
            exit();
        }elseif(mysqli_num_rows(mysqli_query($conn,$add2))==1) {
        $selunit=$_POST['correct'];
            $_SESSION["selunit"] = $selunit;
            
            header('location:enter.php');
        }
                       
    }
                        
?>