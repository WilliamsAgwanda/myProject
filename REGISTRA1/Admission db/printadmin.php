<?php
include 'dbconnect.php';
 require('fpdf/fpdf.php');
  
    // $pic = $std["pic"];
    $pdf=new FPDF('p','mm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $image = "C:\Server\Apache24\htdocs\Admission\admission2\images\Maseno-University-Logo.png";
    $pdf->Image($image, 90, $pdf->GetY()+1 ,30);
    $pdf->Ln(40);
    $pdf->SetFont('Times','B',15);
    $pdf->cell(200,5,'MASENO UNIVERSITY',0,1,'C');
    $pdf->Ln(2);
    $pdf->cell(200,5,'SCHOOL OF COMPUTING AND INFORMATICS',0,1,'C');
    $pdf->Ln(2);
    $pdf->cell(200,5,'Department Of Computer Science',0,1,'C');
    $pdf->Ln(5);
    $pdf->SetFont('Times','BU',15);
    $pdf->cell(200,5,'STUDENT\'S LIST: From Database',0,1,'C');
    $pdf->Ln(5);
    $pdf->SetFont('Arial','',11);
    $width_cell=array(45,35,35,40,35);
    $pdf->SetFillColor(193,229,252); 
    $pdf->Cell($width_cell[0],10,'ADMISSION NUMBER',1,0,'C',true); 
    $pdf->Cell($width_cell[1],10,'FULL NAMES',1,0,'C',true); 
    $pdf->Cell($width_cell[2],10,'COURSE',1,0,'C',true); 
    $pdf->Cell($width_cell[3],10,'EMAIL',1,0,'C',true); 
    $pdf->Cell($width_cell[4],10,'PICTURE',1,1,'C',true); 

    $pdf->SetFont('Arial','',10);

$query = 'SELECT * FROM details;';
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $fname = $row['fname'];
        $lname = $row['lname'];
        $admno = $row['admno'];
        $course = $row['course'];
        $mail = $row['email'];
        $photo = $row['photo'];

         $fullname = $fname.' '.$lname;
         $profile="images/$photo";
        $pdf->cell($width_cell[0],40,$admno,1,0,'C',false);
         $pdf->Cell($width_cell[1],40,$fullname,1,0,'C',false);  
         $pdf->Cell($width_cell[2],40, $course,1,0,'C',false); 
         $pdf->Cell($width_cell[3],40, $mail,1,0,'C',false); 
         $pdf->Image($profile, 166, $pdf->GetY()+6 ,33);
         $pdf->cell($width_cell[4],40,'',1,1,'C',false);
    }
} else {
   $pdf->Cell(100,'No Students Yet',1,0,'C',true); 
}

$pdf->Ln(5);

 $pdf->SetFont('Times','BI',15);
    $pdf->cell(60,10,'SIGNATURE  ................................................................................................',0,1);
    $pdf->cell(60,10,'DESIGNED AND MAINTAINED BY EZEKIEL, SAMWEL & STEPHEN.',0,0);
    $pdf->Output();
?>