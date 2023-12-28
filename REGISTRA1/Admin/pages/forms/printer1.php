<?php
require('tcpdf/tcpdf.php');
include_once 'hhh.php';

$adm2=$_POST['adm'];
if( isset($_POST['submit'])){


$sql = "SELECT * FROM student120 WHERE adm='$adm2';";
          
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
/*session_start();
$adm = isset($_SESSION['adm'])?$_SESSION['adm']:0;
$idno = isset($_SESSION['idno'])?$_SESSION['idno']:0;
$prof = isset($_SESSION['prof'])?$_SESSION['prof']:0;
$fname= isset($_SESSION['fname'])?$_SESSION['fname']:0;
$lname= isset($_SESSION['lname'])?$_SESSION['lname']:0;
$course= isset($_SESSION['course'])?$_SESSION['course']:0;
$email = isset($_SESSION['email'])?$_SESSION['email']:0;
$school = isset($_SESSION['school'])?$_SESSION['school']:0;
$phoneno = isset($_SESSION['phoneno'])?$_SESSION['phoneno']:0;
$gender = isset($_SESSION['gender'])?$_SESSION['gender']:0;*/
class PDF extends TCPDF{
        function header(){
          $this->Image('logo.jpg',90,2,30,30);
          $this->SetFont("Helvetica",'B',12);

          $this->cell(50,5,'MASENO UNIVERSITY',0,0,'');
          $this->Ln();
          $this->cell(50,5,'Private Bag Maseno',0,0,'');
          $this->Ln();
          $this->SetFont("Helvetica",'',12);
          $this->cell(50,5,'+254-57-351620/22;',0,0,'');
          $this->Ln();
         $html="<a href='https://www.maseno.ac.ke' style='padding-left:50px;'>https://www.maseno.ac.ke</a>";
         $this->writeHTML($html);
         

        }function footer(){
          $this->SetY(-15);
          $this->SetFont('Times','',13);
          $this->cell(190,5,'----------------------maseno university fountain of excellence---------------------',0,0,'C');

         $this->Cell(0,10,'page'.$this->PageNo(),0,0,'C');

            
        }
}

    $pdf=new PDF('P','mm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Helvetica','',14);
    $prof="images/$prof";
    $pdf->Ln(25);
    $pdf->SetFont('HELVETICA','BI',15);
    $pdf->cell(190,5,'THE UNIVERSITY OF MASENO ',0,1,'C');
    $pdf->Ln(5);
    $pdf->cell(190,5,'                                         STUDENT DETAILS',0,1);
    $pdf->SetFont('courier','B',15);
    $pdf->Image($prof, 10, $pdf->GetY()-5,55);
    $pdf->cell(40,10,'                    FirST NamE :',0,0);
    $pdf->SetFont('times','',13);
    $pdf->cell(90,10,$fname,0,1,'R');

    $pdf->SetFont('courier','B',15);
    $pdf->cell(40,10,'                    lAST NaMe :',0,0);
    $pdf->SetFont('Times','',13);
    $pdf->cell(80,10,$lname,0,1,'R');
    $pdf->SetFont('courier','B',15);
    $pdf->cell(60,10,'                    ADMIssION NUmBER :',0,0);
    $pdf->SetFont('Times','',13);
    $pdf->cell(100,10,$adm,0,1,'R');
    $pdf->SetFont('courier','B',15);
    $pdf->cell(40,10,'                    CoUrSE :',0,0);
    $pdf->SetFont('Times','',13);
    $pdf->cell(100,10,$course,0,1,'R');
    $pdf->SetFont('courier','B',15);
    $pdf->cell(40,10,'                    EmAiL:',0,0);
    $pdf->SetFont('Times','',13);
    $pdf->cell(110,10,$email,0,1,'R');
    $pdf->SetFont('courier','B',15);
    $pdf->cell(40,10,'                    GeNDeR:',0,0);
    $pdf->SetFont('Times','',13);
    $pdf->cell(70,10,$gender,0,1,'R');
    $pdf->SetFont('courier','B',15);
    $pdf->cell(40,10,'                    cONTAcT:',0,0);
    $pdf->SetFont('Times','',13);
    $pdf->cell(80,10,$phoneno,0,1,'R');
    $pdf->SetFont('courier','B',15);
    $pdf->cell(40,10,'                    Id nUMbER:',0,0);
    $pdf->SetFont('Times','',13);
    $pdf->cell(70,10,$idno,0,1,'R');
    $pdf->Ln(40);
    $pdf->SetFont('Times','BI',13);
    $pdf->cell(60,10,'This is to CERTIFY that the above student has cleared fees',0,1);
    
    $pdf->cell(60,10,"STUDENT'S SIGN ----------------------------",0,1);
    $pdf->Ln(10);
    $pdf->SetFont('Helvetica','B',15);
    $pdf->cell(60,10,"FOR REGISTRA",0,1);
    $pdf->cell(60,10,"SIGN ......................... DATE AND STAMP............................",0,1);
    $date=date("F ,d Y h:i:s A");
    $pdf->Ln(10);
    $pdf->cell(60,10,"                                                                      ".$date,0,1);

    $pdf->Output('feeStage.pdf');
}
?>