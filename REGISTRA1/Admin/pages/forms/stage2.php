<?php
session_start();
include_once 'hhh.php';
$doc= $_POST['stage2'];
$adm1= $_POST['adm'];


 $success = false;
 if( isset($_POST['submit'])){
if ($doc=="ISSUED") {
    $success = true;
    echo'
    <html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    </head>
    <Body>
      ';  
      $sql = "SELECT * FROM student120 WHERE adm='$adm1';";
          
      $result= mysqli_query($conn,$sql);
      
      $data = mysqli_fetch_array($result);
      $fname= $data['fname'];
      $lname = $data['lname'];
      $adm= $data['adm'];
      $email = $data['email'];
      $phoneno= $data['phoneno'];
      $idno = $data['idno'];
      $school = $data['school'];
      $course = $data['course'];
      $gender= $data['gender'];
      $prof=$data['prof'];
    if($success){
      
          echo '
           <div class="well">
           <div class="row">
           <div class="col-lg-4 col-lg-offset-4"><div class="well" 
           style="background-color:floralwhite; box-shadow:2px 3px 4px 5px purple ;">';
     echo '<h1>CREDENTIALS</h1><br><img src="images/'.$prof.'" class="img-rounded img-responsive" style="height:200px; width:200px;"/>';
     echo '<h2 class="text-info">WELCOME,<br>'.$fname.' '.$lname.' '; 
     echo'</h2><h3>CREDENTIALS: '.$doc.'</h3>
                ';
              
            echo '<div><b>Admission:</b> '.$adm.'<br>'.'<b>Course:</b> '.$course.'</div>';
            echo '<div><b>Email:</b> '.$email.'<br></div>';
            echo '<div><b>ID NO:</b> '.$idno.'<br></div>';
            echo '<div><b>Gender:</b> '.$gender.'<br></div>';
            echo '<div><b>Phone NO:</b> '.$phoneno.'<br></div>';
            
           echo ' 
            <button a class="btn btn-info" title="proceed to print stage form" data-toogle="tooltip"><a class="btn btn-info" href="print2.php" target="_blank">PRINT</a></button>
            <button <a class="btn btn-info" title="proceed to stage 3" data-toogle="tooltip"><a class="btn btn-info" href="stage_3.php">PROCEED</a></button>
    
                    </div></div></div></div>
                   
    ';
    
    }
    echo'
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/jquery/jquery.min.js"></script>
    </Body>
    </html>';
    
 }elseif($doc=="NOT ISSUED"){
     header("location:stage_2.php");
 }
 
}
 
?>
 
