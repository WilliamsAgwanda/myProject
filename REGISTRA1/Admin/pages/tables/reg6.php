<?php
$adm=$_POST['adm'];
if( isset($_POST['delete1'])){
    include_once 'hhh.php';
    $que= "DELETE FROM student120 WHERE adm='$adm';";
               mysqli_query($conn, $que);
     
                  
                  header("location:data.php");           
}
?>