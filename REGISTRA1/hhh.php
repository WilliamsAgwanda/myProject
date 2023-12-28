<?php 

$username="root";
$password="jestan";
$server="localhost";
$db="computing";

$conn=mysqli_connect($server,$username,$password,$db);
if(!$conn){
    die("Connection failed: ".mysqli_connect_errno());
}

?>