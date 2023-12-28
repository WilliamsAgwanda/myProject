<?php
session_start();
$user=$_SESSION["user"];
$pass=$_SESSION["pass"];
$h=$_SESSION["host"];
$d=$_SESSION["database"];
require_once 'tcpdf/tcpdf.php';
//include_once 'hhh.php';

if(isset($_POST['download'])){
$reg=$_POST['regno'];
$username="root";
$password="jestan";
$server="localhost";
$db="skool";

$conn=mysqli_connect($server,$username,$password,$db);
if(!$conn){
    die("Connection failed: ".mysqli_connect_errno());
}
if (!empty($reg)) {

$s1="SELECT user from mysql.procs_priv where host='$h' && user='$user' && Routine_name='examcard'";
mysqli_query($conn,$s1);
   
        
if(mysqli_num_rows(mysqli_query($conn,$s1))==0){
      echo '<script>alert("You are not allowed to download examcard")</script>';
    
}elseif(mysqli_num_rows(mysqli_query($conn,$s1))==1) { 


class PDF extends TCPDF{
        function header(){
          $this->Image('logo.jpg',10,1,30,30);
          $this->SetFont("Helvetica",'B',12);

          $this->cell(110,5,'MASENO UNIVERSITY',0,0,'C');
          $this->Ln();
          $this->cell(110,5,'Private Bag Maseno',0,0,'C');
          $this->Ln();
          $this->SetFont("Helvetica",'',12);
          $this->cell(110,5,'+254-57-351620/22;',0,0,'C');
          $this->Ln();
            $html="<a href='https://www.maseno.ac.ke'>https://www.maseno.ac.ke</a>";
          $this->writeHTMLcell(110,5,45,15,$html,0);

        }
         
        
}

    $pdf=new PDF('P','mm','A4');
    $pdf->AddPage();
    $pdf->setFont('HELVETICA','BU',14) ;
    $pdf->ln(20);
     $s2="SELECT * from stureg where regno='$reg';";
     $result= mysqli_query($conn,$s2);
while($data=mysqli_fetch_array($result)){
  $regno= $data['regno'];
  $fn = $data['fn'];
  $ln= $data['lna'];
  $email= $data['email'];
  $stage=$data['stage'];
  $school=$data['school'];
  $gender=$data['gender'];
  $programme=$data['programme'];


    $pdf->cell(100,10,'EXAMINATION CARD',0,0,'C');
    $pdf->ln();
    $pdf->setFont('helvetica','B',12) ;
    $pdf->cell(20,5,'Stu. No:',0,0,'C');
    $pdf->setFont('Times','',12) ;
    $pdf->cell(100,5,$regno,0,0,'');
    $pdf->ln();
    $pdf->setFont('helvetica','B',12) ;
    $pdf->cell(20,5,'Name:',0,0,'C');
    $pdf->setFont('Times','',12) ;
    $pdf->cell(100,5,$fn.' '.$ln,0,0,'');
    $pdf->ln();
    $pdf->setFont('helvetica','B',12) ;
    $pdf->cell(20,5,'Stage:',0,0,'C');
    $pdf->setFont('Times','',12) ;
    $pdf->cell(100,5,$stage,0,0,'');
    $pdf->ln();
    $pdf->setFont('helvetica','B',12) ;
    $pdf->cell(20,5,'Email:',0,0,'C');
    $pdf->setFont('Times','',12) ;
    $pdf->cell(100,5,$email,0,0,'');
    $pdf->ln();
    $pdf->setFont('helvetica','B',12) ;
    $pdf->cell(20,5,'School:',0,0,'C');
    $pdf->setFont('Times','',12) ;
    $pdf->cell(100,5,$school,0,0,'');
    $pdf->ln();
    $pdf->setFont('helvetica','B',12) ;
    $pdf->cell(20,5,'Gender:',0,0,'C');
    $pdf->setFont('Times','',12) ;
    $pdf->cell(100,5,$gender,0,0,'');
    $pdf->ln();
    $pdf->setFont('helvetica','B',12) ;
    $pdf->cell(20,5,'Prog:',0,0,'C');
    $pdf->setFont('Times','',12) ;
    $pdf->cell(100,5,$programme,0,0,'');
    $pdf->ln();
}
    $s3 = "call examcard('$reg');";
          
    $r= mysqli_query($conn,$s3);
    $pdf->setFont('HELVETICA','',10) ;

    $html="
       <table border='1'>
        <tr>
          <th>Code</th>
          <th>Unit</th>
          <th>Invigilator Sign</th>
        </tr>";
        while($dat=mysqli_fetch_array($r)){
          $unitcode= $dat['unit_code'];
          $unitname= $dat['unit_name'];

     $html.="
     <tr>
        <td>$unitcode</td>
        <td>$unitname</td>

        <td></td>
      </tr>";
      }
    $html.=" </table>
    <style>
    th{
      font-weight:bold;
      border:1px solid #000;
    }
    td{
      border:1px solid #000;
    }
    table{border-collapse:collapse;}

    </style>
    ";
    $pdf->ln();
    $pdf->writeHTMLcell(130,10,'','',$html,0);
    $pdf->setFont('HELVETICA','',8) ;
$impo="<p><u><b>IMPORTANT</b></u></p>";
$impo.="
<p>The invigilator <b>MUST</b> sign the Card as he/she collects the scripts.</p>
<p>Any errors on the names must be corrected at the office of the Dean of the</p>
<p>School in which the Candidate is Registered.</p><br><br>
<p>Please Note: Exam cheating is a crime. </p>";
$pdf->ln();
$pdf->writeHTMLcell(128,10,11,'',$impo,1);
$pdf->ln();

$pdf->setFont('times','B',9) ;
$pdf->cell(100,5,'This is to confirm that the above information is correct',0,0,'');
$pdf->ln();

$pdf->setFont('times','',11) ;
$pdf->cell(100,5,'               SIGN:  .....................................',0,0,'');
$pdf->ln();
$pdf->setFont('times','',9) ;
$pdf->cell(30,5,'For Registra ASA:',0,0,'');
$pdf->setFont('times','B',10) ;
$pdf->cell(100,5,'Date and Stamp................................................',0,0,'');
$pdf->Ln();
  
$date=date("F ,d Y h:i:s A");
    $pdf->cell(60,10,"                                                                      ".$date,0,1);


   


    $pdf->output();
}
 }else {  echo '<script>alert("Please enter all the details")</script>';}
}
   
?>