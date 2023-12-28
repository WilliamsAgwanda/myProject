<?php 

$username="root";
$password="jestan";
$server="localhost";
$db="skool";

$conn=mysqli_connect($server,$username,$password,$db);
if(!$conn){
    die("Connection failed: ".mysqli_connect_errno());
}

?>

