<?php
session_start();
include "db.php";
require_once 'tcpdf/tcpdf.php';
$pass=$_SESSION["pass"];


class PDF extends TCPDF{
        function header(){
          $this->Ln(5);
          $this->Image('banklogo.jpg',10,1,30,30);
          $this->SetFont("Helvetica",'B',12);
          $this->cell(110,5,'MONEY TRUST BANK',0,0,'C');
          $this->Ln();
          $this->cell(110,5,'Private Bag IBIZA',0,0,'C');
          $this->Ln();
          $this->SetFont("Helvetica",'',12);
          $this->cell(110,5,'+254-57-351620/22;',0,0,'C');
          $this->Ln(5);
            $html="<a href='https://www.maseno.ac.ke'>https://www.moneybanktrust.co.ke</a>";
          $this->writeHTMLcell(110,5,45,20,$html,0);


        }
         
        
}

    $pdf=new PDF('P','mm','A5');
    $pdf->AddPage();
    $pdf->setFont('HELVETICA','BU',14) ;
    $sql1="SELECT prof from customer where idno='$pass';";
    $r1=mysqli_query($conn,$sql1);
    while($d=mysqli_fetch_array($r1)){
        $prof=$d['prof'];
    $profile="prof/$prof";
      }
      $pdf->Image($profile, 111, $pdf->GetY()-5,30);
    $pdf->ln(20);
    $pdf->cell(100,10,'Bank Statement',0,0,'C');
    $pdf->ln(10);
    $sql="SELECT fname,lname,accountno,prof from customer where idno='$pass';";
    $r=mysqli_query($conn,$sql);
    while($d=mysqli_fetch_array($r)){
        $fname=$d['fname'];
        $lname=$d['lname'];
        $accountno=$d['accountno'];
        $prof=$d['prof'];
    $personal="
      <h2>Personal Information</h2>
      <h4>Name: $fname $lname</h4>
      <h4>Account NO: $accountno</h4>";
    }
    
    $pdf->setFont('HELVETICA','',14) ;
    $pdf->writeHTMLcell(137,10,5,'',$personal,1);
    $pdf->ln(30);
    $sql="SELECT dat,deposit,withdraw from stat where idno='$pass';";
    $r=mysqli_query($conn,$sql);
    $state="<table border='1'>
    <tr>
    <th>Date</th>
    <th>Deposit</th>
    <th>Withdraw</th>

    </tr>";
    while($d=mysqli_fetch_array($r)){
      $date=$d['dat'];
      $deposit=$d['deposit'];
      $withdraw=$d['withdraw'];
      $state.="
                <tr>
                    <td>$date</td>
                    <td>$deposit</td>
                    <td>$withdraw</td>

                  </tr>

      ";
    }
    $state.="</table>
    <style>
    th{
      font-weight:bold;
      border:1px solid #000;
    }
    td{
      border:1px solid #000;
    }
    table{border-collapse:collapse;}

    </style>";
    $pdf->writeHTMLcell(137,10,5,'',$state,1);

    $pdf->ln();
   
   
    

    
    $pdf->setFont('HELVETICA','B',14) ;
  
 $date=date("F ,d Y h:i:s A");
    $pdf->cell(60,10,"                     ".$date,0,1);


   


    $pdf->output();

 

   
?>