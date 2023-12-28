<?php
session_start();
include "db.php";
require_once 'tcpdf/tcpdf.php';
$pass=$_SESSION["pass"];
$reg=$_SESSION['reg'];
$ttl=$_SESSION['ttl'];
$calculate=$_SESSION['calculate'];


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

    $pdf=new PDF('P','mm','A5');
    $pdf->AddPage();
    $pdf->setFont('HELVETICA','BU',14);
    $pdf->ln(20);
    $pdf->cell(100,10,'Payment Receipt',0,0,'C');
    $pdf->ln(20);
    $sql="SELECT fname,lname,regno from patients where regno='$reg';";
    $r=mysqli_query($conn,$sql);
    while($d=mysqli_fetch_array($r)){
        $fname=$d['fname'];
        $lname=$d['lname'];
        $regno=$d['regno'];
        
    $personal="
    Name:<b>$fname $lname</b><br><br>
    RegNo:<b>$regno</b>";
    }
    $pdf->setFont('HELVETICA','',12) ;
    $pdf->writeHTMLcell(125,20,15,'',$personal,1);
    $pdf->ln(20);
     $med="<table>
                <tr>
                   <th>Service</th>
                   <th>Price</th>
                </tr>
     ";
    $sql="SELECT inventory.price,prescription.medicineInjection from inventory,prescription where
    inventory.item=prescription.medicineInjection && regno='$reg' && prescription.datepaid=curdate();";
    $r=mysqli_query($conn,$sql);
    while($d=mysqli_fetch_array($r)){
     $services=$d['medicineInjection'];
     $price=$d['price'];
     $med.="<tr>
                   <td>$services</td>
                   <td>$price</td>
            </tr>";

    }
    $med.="
   <tr>
    <td>Admission Fee</td>
    <td>$calculate</td>
   </tr>
    ";
    $sql2="SELECT test,results from test where regno='$reg' && datepaid=curdate() && results!='Not Yet In';";
                  $r2=mysqli_query($conn,$sql2);
                  if(mysqli_num_rows($r)!=0){

                  while($d=mysqli_fetch_array($r2)){
                   $results=$d['results'];
                   $test=$d['test'];
    $med.="<tr>
                   <td>$test</td>
                   <td>500</td>
            </tr>";

    }}
    $med.="<tr>
                   <td>Total</td>
                   <td>$ttl</td>
            </tr>";

    $med.="</table>
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

    $pdf->writeHTMLcell(125,20,15,'',$med,1);
    $pdf->ln(50);

    $pdf->setFont('HELVETICA','B',14) ;
    $date=date("F ,d Y h:i:s A");
    $pdf->cell(125,10,"    ".$date,0,0,'C');
    $pdf->ln();
    
    $pdf->setFont('HELVETICA','I',10) ;
    $pdf->cell(125,10,'GET WELL SOON',0,0,'C');


   


    $pdf->output();

 

   
?>