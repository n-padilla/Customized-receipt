<?php
include('tcpdf-library/tcpdf.php');

$pageLayout = array(468,306);
$pdf = new TCPDF('P','pt',$pageLayout, true, 'UTF-8', false);
$pdf -> SetMargins(18,43.2,18,true);
$pdf -> setPrintHeader(false);
$pdf -> setPrintFooter(false);
$pdf -> AddPage();
$pdf -> SetFont('', '', 18.5, '','',true);
$pdf->Cell(270,18.5,"Innolead Electronics",0,1,'C');
$pdf -> SetFont('', '', 7.5, '','',true);
$pdf->Cell(270,7.5,"218 Barasoain Street, Little Baguio, San Juan City",0,1,'C');
$pdf->Cell(270,7.5,"innoleadelectronics@gmail.com | 0905-283-4993",0,1,'C');
$pdf-> Ln();
$pdf -> SetFont('', 'BU', 10, '','',true);
$pdf->Cell(270,10,"ACKNOWLEDGEMENT RECEIPT",0,1,'C');

$pdf-> Ln();
$pdf -> SetFont('', '', 7, '','',true);
$pdf->Cell(155,10,"Sold to:",0,0);
$pdf->Cell(115,10,"Date:",0,1);
$pdf-> Ln();
$pdf->Cell(155,10,"Address:",0,0);
$pdf->Cell(115,10,"Contact No:",0,1);
$pdf-> Ln();
$pdf->Cell(155,10,"Order Type:",0,0);
$pdf->Cell(115,10,"Payment:",0,1);
$pdf -> SetFont('', '', 8, '','',true);
$pdf->Cell(50,28,"QTY",1,0,'C');
$pdf->Cell(110,28,"ARTICLES",1,0,'C');
$pdf->MultiCell(50,28,"UNIT \n PRICE",1,'C',false,0);
$pdf->Cell(50,28,"AMOUNT",1,0,'C');
$pdf->Output();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Innolead - PDF</title>
</head>
<body>
  test
</body>
</html>