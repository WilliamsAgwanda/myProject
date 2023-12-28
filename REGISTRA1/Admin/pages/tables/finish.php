<?php
if( isset($_POST['delete'])){
header("location:del.html");
}
if( isset($_POST['update'])){
    header("location:update.html");
    }
?>