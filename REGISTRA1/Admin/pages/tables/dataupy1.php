<?php
session_start();
$user=$_POST['user'];
$pass=$_POST['pass'];
$school=$_POST['school'];
include_once 'hhh.php';
			  
               
              $psid=$_SESSION['id'];
              //echo $psid;
             
$sql = "UPDATE admini SET school='$school',username='$user',pass='$pass' WHERE pass='$psid'";
               $query = mysqli_query($conn, $sql);
                if($query)
                {
                  header("Location:data1.php");
            
                }
               
      
      
      else{
       
         header("Location:dataup1.php");
      }
      ?>