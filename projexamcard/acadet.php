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
          $this->Image('logo.jpg',85,3,30,30);
          $this->SetFont("Helvetica",'B',12);

          //$this->cell(110,5,'MASENO UNIVERSITY',0,0,'C');
          $this->Ln(3);
          $this->cell(110,5,'P.O BOX Private Bag',0,0,'');
          $this->Ln();
          $this->cell(110,5,'Kisumu',0,0,'');
          $this->Ln();
            
          $this->SetFont("Helvetica",'',12);
          $this->cell(185,5,'                                      Tel: +254-57-351620/22;',0,0,'R');
          $this->Ln();
          $this->cell(185,5,'                                      Fax: +254-57-351221',0,0,'R');
          $this->Ln();
          
            $html="<a href='https://www.maseno.ac.ke'>https://www.maseno.ac.ke</a>";
          $this->writeHTMLcell(170,5,145,27,$html,0);
          $this->Ln(8);
          $this->SetFont("helvetica",'BI',12);
           
          $this->cell(180,5,'MASENO UNIVERSITY',0,0,'C');

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
    $pdf->setFont('HELVETICA','B',14) ;
    $pdf->ln(32);

    $pdf->cell(180,5,'PROVISIONAL ACADEMIC TRANSCRIPT',0,0,'C');
    $pdf->ln();
    $pdf->setFont('helvetica','',12) ;
    $box="<table>
    <tr>
    <td><b>Reg.Number:</b>$regno</td>
    <td><b>Name:</b>$fn $ln</td>
    </tr>
    <tr>
    <td><b>Email:</b>$email</td>
    <td><b>Stage:</b>$stage</td>
    </tr>
</table>
    ";}
$pdf->writeHTMLcell(183,5,11,'',$box,1);
 $pdf->ln();

    $sql1 = "SELECT * from $pass;";
          
    $r= mysqli_query($conn,$sql1);
    $pdf->setFont('HELVETICA','',9) ;

   

    $html="
       <table border='1'>
        <tr>
         <th>COURSE CODE AND TITLE</th>
         <th>UNITS</th>
         <th>GRADE</th>


        </tr>";
        while($data=mysqli_fetch_array($r)){
          $unit= $data['unit'];
          $grade=$data['grade'];
     $html.="
     <tr>
        <td>$unit</td>
        <td>1</td>
        <td>$grade</td>

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
      $pdf->writeHTMLcell(185,5,'','',$html,0);
    $pdf->setFont('HELVETICA','',8) ;
$curr="
   <table>
   <tr>
    <td>CURRENT AVERAGE:</td>
   </tr>
   </table>
";
$curr1="
<table>
   <tr>
    <td>70</td>
   </tr>
   </table>
";
$curr2="
   <table>
   <tr>
    <td>CUMMULATIVE AVERAGE:</td>
   </tr>
   </table>
";
$curr3="
<table>
   <tr>
    <td>31</td>
   </tr>
   </table>
";
$curr4="
   <table>
   <tr>
    <td>RECOMMENDATION:</td>
   </tr>
   </table>
";
$pdf->ln();
$pdf->writeHTMLcell(122,5,11,'',$curr,1);
$pdf->writeHTMLcell(61,5,133,'',$curr1,1);
$pdf->ln();
$pdf->writeHTMLcell(122,5,11,'',$curr2,1);
$pdf->writeHTMLcell(61,5,133,'',$curr3,1);
$pdf->ln();
$pdf->writeHTMLcell(183,5,11,'',$curr4,1);


//$pdf->writeHTMLcell(183,13,11,'',$box2,0);

$pdf->ln();

$pdf->setFont('times','BU',9) ;
$pdf->cell(100,5,'Legend:',0,0,'');
$pdf->ln();
$pdf->setFont('times',' ',9) ;

$curr6="
<table>
<tr>
<td>DEFAULT</td>
</tr>
</table>
<style>
td{ text-align:center;}
</style>
";
$pdf->writeHTMLcell(68,5,11,'',$curr6,1);

$pdf->setFont('times',' ',9) ;
$pdf->ln();

$curr5="
<table>
<tr>
<td>A</td>
<td>EXCELLENT</td>
<td>70%-100%</td>
</tr>
<tr>
<td>B</td>
<td>VERY GOOD</td>
<td>60%-69%</td>
</tr>
<tr>
<td>C</td>
<td>GOOD</td>
<td>50%-59%</td>
</tr>
<tr>
<td>D</td>
<td>FAIR</td>
<td>40%-49%</td>
</tr>
<tr>
<td>E</td>
<td>Fail</td>
<td>0%-39%</td>
</tr>
<tr>
<td>X</td>
<td>Missing Marks</td>
<td>0.00-0.00</td>
</tr>
</table>
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
$pdf->writeHTMLcell(70,5,'','',$curr5,0);
$pdf->ln();


$pdf->setFont('times','B',9) ;
$pdf->cell(183,5,'Dean:                                    ......................................................',0,0,'');
$pdf->ln();
$pdf->setFont('times','B',11) ;
$pdf->cell(180,5,'SCHOOL OF MATHEMATICS AND ACTURIAL SCIENCES',0,0,'C');
$pdf->ln();

$pdf->setFont('times','B',9) ;
$pdf->cell(140,5,'Date Issued:                         ......................................................',0,0,'');

  
$date=date("F ,d Y h:i:s A");
    $pdf->cell(40,5,"".$date,0,1);


   


    $pdf->output('transcript.php');
        }
  }
   
?>