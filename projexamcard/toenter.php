<?php
session_start();
include_once 'hhh.php';
    if(isset($_POST['ok'])){
        $selunit=$_POST['correct'];
            $_SESSION["selunit"] = $selunit;
            
            header('location:enter.php');
        }
                       

                        
?>