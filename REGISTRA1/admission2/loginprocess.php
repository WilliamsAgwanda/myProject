<?php
require('../admission2/fpdf/fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'welcome');
$pdf->Output();


 $adm = $_POST['admno'];
 $pass = $_POST['password'];
 $success = false;

    $data = file_get_contents('students.json');
    $jdata = json_decode($data,true);
    //print_r($json_data);
    foreach ($jdata as $std) {
        if($std['adm'] == $adm && $std['pass'] == $pass ){
           //echo $std["fname"];
           $success =true;
            break;

        }

       
    }
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
    color: blue;
  }
  .avatar{
    border-radius:50%;
    width: 60px;
    height: 60px;
  }
</style>
</head>
<Body>
  ';  
  
if($success){
  $pics=$std['pic'];
echo '<div class="container">';
echo '<img src="images/'.$pics.'" class ="avatar"/>';
echo '<h2>Hello, <br>'.$std["fname"].' '.$std["lname"]; 
echo'</h2>
<div class="col-25">';
          
        echo '<div><b>Admission:</b> '.$std["adm"].'<br>'.'<b>Course:</b> '.$std["course"].'</div>';
       echo ' </div>
                <button><a href="log.php">Signout</a></button>
                </div>
               
';
echo $std["pic"];

}
else{
    echo '<div class = "alert alert-danger">Invalid Details</div>';
}
echo'
</Body>
</html>';
?>