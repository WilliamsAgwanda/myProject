<?php
session_start();
include "db.php";
require_once 'tcpdf/tcpdf.php';
$idno=$_SESSION['idno'];


class PDF extends TCPDF{
        function header(){
          $this->Ln(5);
          $this->Image('logohospice.jpg',9,1,30,30);
          $this->SetFont("Helvetica",'B',12);
          $this->Ln();
          $this->cell(110,5,'HOSPICE',0,0,'C');
          $this->Ln();
          $this->cell(110,5,'Private Bag SAN DIEGO',0,0,'C');
          $this->Ln();
          $this->SetFont("Helvetica",'',12);
          $this->cell(110,5,'+254-57-351620/22;',0,0,'C');
          $this->Ln(5);
            $html="<a href='https://www.maseno.ac.ke'>https://www.hospice.co.ke</a>";
          $this->writeHTMLcell(110,5,45,20,$html,0);


        }
         
        
}

    $pdf=new PDF('P','mm','A6');
    $pdf->AddPage();
    $pdf->setFont('HELVETICA','BU',16) ;
    $pdf->ln(25);
    $pdf->cell(60,10,'Hospice Card',0,0,'C');
    $pdf->ln(15);
    $sql="SELECT fname,lname,regno from patients where idno='$idno';";
    $r=mysqli_query($conn,$sql);
    while($d=mysqli_fetch_array($r)){
        $fname=$d['fname'];
        $lname=$d['lname'];
        $regno=$d['regno'];
        
    $personal="
    Name:<b>$fname $lname</b>
    RegNo:<b>$regno</b>";
    }
    
    $pdf->setFont('HELVETICA','',14) ;
    $pdf->writeHTMLcell(60,10,20,'',$personal,1);
    $pdf->ln(15);
   
    

    
    $pdf->setFont('HELVETICA','B',14) ;
    $date=date("F ,d Y h:i:s A");
    $pdf->cell(80,10,"    ".$date,0,0,'C');
    $pdf->ln();
    
    $pdf->setFont('HELVETICA','I',10) ;
    $pdf->cell(80,10,'GET WELL SOON',0,0,'C');
   


    $pdf->output();

 

   
?>