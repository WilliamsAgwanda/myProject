<?php
session_start();


 $username = $_POST['admin'];
 $pass = $_POST['password'];
 $_SESSION["user"] = $username;
 $_SESSION["pass"] = $pass;
 
 $success = false;
 echo'
 <html>
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
   .container{
       color: gray;
       border: 3px solid green;
       width: 50%;
       margin: auto;
       text-align: center;
       border-radius: 8px;
       font-size: 20px;
       margin-top: 5%;
   }
   b{
       color: green;
   }
   button{
   background-color: #04AA6D;
   color: white;
   padding: 12px 20px;
   border: none;
   border-radius: 4px;
   cursor: pointer;
   margin-top: 5px;
   margin-bottom: 3px;
   
 }
 button a{
   text-decoration: none;
   color: white;
 }
 .avatar{
   border-radius:50%;
   width: 100px;
   height: 100px;
 }
</style>
</head>
<Body>
 ';  
if($username == 'root' && $pass == 'admin'){
   
    echo '

    <div class="container">';
    echo '<img src="images/avatar.png" class ="avatar"/>';
 echo '<h2>Hello, <br>Admin'; 
 echo'</h2>
 <div class="col-25">';
          
        echo '<div><b>EMPLOYEE ID:</b> MSU/SCI/00255<br>'.'<b>SCHOOL:</b> SCHOOL OF COMPUTING</div>';
       echo ' </div>
                <button><a href="printadmin.php" target="_blank">PRINT</a></button>
                <button><a href="Admin.php">Signout</a></button>
                </div>
               
';
   
}
 
else{
    echo '<div class = "alert alert-danger">Invalid Details</div>';
}
echo'
</Body>
</html>';

?>