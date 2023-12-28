<?php
require('fpdf/fpdf.php');
//include_once 'dbconnect.php';
session_start();
$admno = isset($_SESSION['adm'])?$_SESSION['adm']:0;
$password = isset($_SESSION['pass'])?$_SESSION['pass']:0;
$pics = isset($_SESSION['pic'])?$_SESSION['pic']:0;
$fname= isset($_SESSION['fname'])?$_SESSION['fname']:0;
$lname= isset($_SESSION['lname'])?$_SESSION['lname']:0;
$course= isset($_SESSION['course'])?$_SESSION['course']:0;
$mail = isset($_SESSION['mail'])?$_SESSION['mail']:0;

   
    // $pic = $std["pic"];
    $pdf=new FPDF('p','mm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $profile="images/$pics";
    $image = "images\Maseno-University-Logo.png";
    $pdf->Image($image, 90, $pdf->GetY()+1 ,30);
    $pdf->Ln(40);
    $pdf->SetFont('Times','BU',15);
    $pdf->cell(200,5,'MASENO UNIVERSITY',0,1,'C');
    $pdf->cell(200,5,'SCHOOL OF COMPUTING AND INFORMATICS',0,1,'C');
    $pdf->cell(200,5,'Department Of Computer Science',0,1,'C');
    $pdf->Ln(5);
    $pdf->cell(200,5,'STUDENT PROFILE REPORT',0,1,'L');
    $pdf->SetFont('Times','B',15);
    $pdf->Image($profile, 170, $pdf->GetY()+1 ,25);
    $pdf->cell(40,10,'FIRST NAME :',0,0,);
    $pdf->SetFont('Times','',15);
    $pdf->cell(25,10,$fname,0,1);
    $pdf->SetFont('Times','B',15);
    $pdf->cell(40,10,'LAST NAME :',0,0);
    $pdf->SetFont('Times','',15);
    $pdf->cell(25,10,$lname,0,1);
    $pdf->SetFont('Times','B',15);
    $pdf->cell(60,10,'ADMISSION NUMBER :',0,0);
    $pdf->SetFont('Times','',15);
    $pdf->cell(25,10,$admno,0,1);
    $pdf->SetFont('Times','B',15);
    $pdf->cell(40,10,'COURSE :',0,0);
    $pdf->SetFont('Times','',15);
    $pdf->cell(25,10,$course,0,1);
    $pdf->SetFont('Times','B',15);
    $pdf->cell(40,10,'EMAIL:',0,0);
    $pdf->SetFont('Times','',15);
    $pdf->cell(25,10,$mail,0,1);
    $pdf->Ln(10);
    $pdf->SetFont('Times','BI',15);
    $pdf->cell(60,10,'STUDENTS SIGNATURE  .............................................................',0,1);
    $pdf->cell(60,10,'TUTOR DR. KAMAU.',0,1);

    $pdf->cell(60,10,'DESIGNED AND MAINTAINED BY EZEKIEL, SAMWEL AND STEPHEN.',0,0);

    $pdf->Output();
    echo $userid;
?>