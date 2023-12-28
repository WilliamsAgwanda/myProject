<?php
$val=$_POST['val'];
$new=$_POST['new'];
$old=$_POST['old'];

if( isset($_POST['update1'])){
    include_once 'hhh.php';
    $que= "UPDATE student120 SET $val='$new'  WHERE $val='$old';";
               mysqli_query($conn,$que);
               
                  
                  header("location:data.php");           
}
?>