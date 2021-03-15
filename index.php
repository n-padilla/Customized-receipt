<?php
include('tcpdf-library/tcpdf.php');

$pageLayout = array(468,306);
$pdf = new TCPDF('P','pt',$pageLayout, true, 'UTF-8', false);
$pdf -> SetMargins()
$pdf -> setPrintHeader(false);
$pdf -> setPrintFooter(false);
$pdf -> AddPage();

$pdf->Cell(190,10,"this is a cell",1,1,'C');
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