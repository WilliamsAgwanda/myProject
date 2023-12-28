<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
       <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="well">
<div class="row">
 <div class="col-lg-4 col-lg-offset-4">        
<form style="background-color: rgb(238, 234, 217);  box-shadow: 2px 4px 8px 4px #45a082;" 
class="well form-group"action="stage3.php" method="post">
    <h3 class="text-success text-left">HOSTELS PAGE</h3><br>    
    <div>    
        ADMISSION NUMBER:<?php  $adm=$_SESSION['adm'];?>
        <input class="btn btn-btn-success"type="text" name="adm" id="adm" value="<?php echo $adm;?>"> 
        </div>
 <div>
     HOSTELS:   
 <select name="stage3">
        <option>KIT MIKAYI</option>
        <option>NILES</option>
        <option>ELGON</option>
        <option>MAKERERE</option>
        <option>EQUATOR</option>
         
</select><br><br><br><br>
<button class="form-control btn btn-success"type="submit" name="submit">SUBMIT</button>

</div>
</form>
</div></div></div>  
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/jquery/jquery.min.js"></script>

</body>
<html>