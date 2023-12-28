

<?php
session_start();
require('fpdf/fpdf.php');




class PDF extends FPDF
{
    // Page header
    function Header()
    {
        // GFG logo image
        $this->Image('logo.png', 30, 8, 20);
          
        // GFG logo image
        $this->Image($_SESSION['img'], 160, 8, 20);
          
        // Set font-family and font-size
        $this->SetFont('Times','B',20);
          
        // Move to the right
        $this->Cell(80);
          
        // Set the title of pages.
        $this->Cell(30, 20, 'Welcome to Maseno University', 0, 2, 'C');
          
        // Break line with given space
        $this->Ln(5);
    }
       
    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
          
        // Set font-family and font-size of footer.
        $this->SetFont('Arial', 'I', 8);
          
        // set page number
        $this->Cell(0, 10, 'Page ' . $this->PageNo() .
              '/{nb}', 0, 0, 'C');
    }
}


   
// Create new object.
$pdf = new PDF();
$pdf->AliasNbPages();
  
// Add new pages
$pdf->AddPage();
  
// Set font-family and font-size.
$pdf->SetFont('Times','',12);
$pdf ->SetFontSize(15);


  
// Loop to display line number content
$pdf->Cell(30, 10, $_SESSION['password'] , 0, 2, 'L');

 //Result: ferrari

//ob_end_flush(); 

$pdf->Cell(30, 10, 'Username : Habi ' , 0, 2, 'L');
$pdf->Cell(30, 10, 'First name: Habiba' , 0, 2, 'L');
$pdf->Cell(30, 10, 'Last name : Abdullahi' , 0, 2, 'L');
$pdf->Cell(30, 10, 'Email : habibaabdul352@gmail.com' , 0, 2, 'L');
$pdf->Cell(30, 10, 'password : habiba123' , 0, 2, 'L');

      
$pdf->Output();
  
?>

