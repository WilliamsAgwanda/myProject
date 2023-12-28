<?php
session_start();
$user=$_SESSION["user"];
$pass=$_SESSION["pass"];
require('tcpdf/tcpdf.php');
include_once 'hhh.php';

  if (isset($_POST['download'])) {
    $que= "SELECT* from $pass;";
     mysqli_query($conn, $que);
   
        
        if (!mysqli_num_rows(mysqli_query($conn, $que))) {
              echo '<script>alert("Please select your stage and register units")</script>';
            
        }elseif(mysqli_num_rows(mysqli_query($conn, $que))>=1) { 
          $sql = "SELECT *from students where email='$user'&& regno='$pass';";
          
$result= mysqli_query($conn,$sql);
while($data=mysqli_fetch_array($result)){
  $regno= $data['regno'];
  $fn = $data['fn'];
  $ln= $data['ln'];
  $email= $data['email'];
  $stage=$data['stage'];
 


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

        // $this->writeHTML($html); 
        }
         
         /*function footer(){
          $this->SetY(-15);
          $this->SetFont('Times','',13);
          $this->cell(190,5,'----------------------maseno university fountain of excellence---------------------',0,0,'C');

         $this->Cell(0,10,'page'.$this->PageNo(),0,0,'C');

            
        }*/
}

    $pdf=new PDF('P','mm','A4');
    $pdf->AddPage();
    $pdf->setFont('HELVETICA','BU',14) ;
    $pdf->ln(20);

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
}
    $sql1 = "SELECT * from $pass;";
          
    $r= mysqli_query($conn,$sql1);
    $pdf->setFont('HELVETICA','',10) ;

    $html="
       <table border='1'>
        <tr>
         <th>Unit</th>
         <th>Invigilator Sign</th>
        </tr>";
        while($data=mysqli_fetch_array($r)){
          $unit= $data['unit'];
     $html.="
     <tr>
        <td>$unit</td>
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


   


    $pdf->output('examcard.php');
        }
  }
   
?>