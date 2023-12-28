<?php
include('tcpdf/tcpdf.php');
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
	 $html="<a href='https://www.maseno.ac.ke'>https://www.maseno.ac.ke</a>";
	 $this->writeHTML($html);
	 

	}function footer(){
	  $this->SetY(-15);
	  $this->SetFont('Times','',13);
	  $this->cell(190,5,'----------------------maseno university fountain of excellence---------------------',0,0,'C');

	 $this->Cell(0,10,'page'.$this->PageNo(),0,0,'C');

		
	}}
$pdf=new PDF('p','mm','A4');

$pdf->AddPage();
$pdf->Ln(30);
$pdf-> setFont('helvetica','',14);
$pdf->cell(195,10,"STUDENT DATA",0,0,'C');
$pdf->Ln();
$pdf-> setFont('helvetica','',8);
$pdf-> setTextColor(253,3,3);


$pdf->Ln();

/*$html="
<table>
  <tr>
  <th>Fname</th> <th>Lname</th> <th>Regno</th> <th>Course</th> <th>Idno</th> <th>Phoneno</th> <th>Email</th> <th>Gender</th> <th>Pic</th>
  </tr>
";

$html.="
<tr>
<td>".$std->fname."</td>
<td>".$std->lname."</td>
<td>".$std->regno."</td>
<td>".$std->course."</td>
<td>".$std->idno."</td>
<td>".$std->phoneno."</td>
<td>".$std->email."</td>
<td>".$std->gender."</td>
<td>".$std->pic."</td>
</tr></table>
<style>
table{
	border-collapse:collapse;
}th,td{
	border:1px solid #888;
}tr th{
	background-color:#888;
	color:#fff;
	font-weight:bold;
}
</style>
";

$pdf->WriteHTMLCell(195,5,'','',$html,1);*/
$pdf->cell(20,10,'FIRST NAME',1);
$pdf->cell(20,10,'LAST NAME',1);
$pdf->cell(20,10,'REGNO',1);
$pdf->cell(30,10,'COURSE',1);
$pdf->cell(20,10,'ID NO',1);
$pdf->cell(20,10,'CONTACT',1);
$pdf->cell(40,10,'EMAIL',1);
$pdf->cell(15,10,'GENDER',1);
$pdf->cell(10,10,'PIC',1);
$pdf->Ln();
$pdf-> setFont('helvetica','',8);
$pdf-> setTextColor(0,0,0);

$file=file_get_contents('students1.json');
$data=json_decode($file);

foreach($data as $std){
$pdf->cell(20,15,$std->fname,1);
$pdf->cell(20,15,$std->lname,1);
$pdf->cell(20,15,$std->regno,1);
$pdf->cell(30,15,$std->course,1);
$pdf->cell(20,15,$std->idno,1);
$pdf->cell(20,15,$std->phoneno,1);
$pdf->cell(40,15,$std->email,1);
$pdf->cell(15,15,$std->gender,1);
$profile="$std->pic";
$pdf->cell(10,15,$pdf->Image($profile,195,$pdf->GetY()+1,10),1);
$pdf->Ln();
}

$pdf->Output('msenangu.pdf');

 
 
 

/*$log=file_get_contents("student.txt");
if(strpos($log,$name)>0){
	echo "LOGIN SUCCESSFUL\n";
}else{
	echo"LOGIN ERROR";
}*/


?>