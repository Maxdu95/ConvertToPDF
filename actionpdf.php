<?php
require('WriteHTML.php');


	$titre = $_POST['titre'];
	$description = $_POST['description'];
	$image = $_POST['image'];
	$titreP1= $_POST['titreP1'];
	$paragraphe = $_POST['paragraphe1'];
	$titreP2= $_POST['titreP2'];
	$paragraphe = $_POST['paragraphe2'];
	$titreLiens= $_POST['titreLiens'];
	
$pdf=new PDF_HTML();

$pdf->AliasNbPages();
$pdf->SetAutoPageBreak(true, 15);

$pdf->AddPage();

$pdf->SetFont('Arial','B',14);


$pdf->SetFont('Arial','B',20);
 




$pdf->SetDrawColor(255,165,0);
$pdf->MultiCell(0, 10, "$titre" , 1, "C", 0);
$pdf->WriteHTML("<br><br>");
$pdf->SetFont('Arial','I', 15);
$pdf->MultiCell(90, 10, "$description", 1, "C", 0);
$pdf->WriteHTML("<br><br><br><br>");
$pdf->Image("./$image", 110, 30, 40 , 40);
$pdf->Image("./$image", 160, 30, 40 , 40);
$pdf->Image("./$image", 110, 80, 40 , 40);
$pdf->Image("./$image", 160, 80, 40 , 40);
//$pdf->WriteHTML("<br><br>");
$pdf->MultiCell(0, 10, "$titreP1" , 0, "C", 0);
$pdf->WriteHTML("<br>");
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(0, 10, "$paragraphe1", 1, "C", 0);
$pdf->WriteHTML("<br><br><br><br>");
$pdf->MultiCell(0, 10, "$titreP2" , 0, "C", 0);
$pdf->WriteHTML("<br>");
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(0, 10, "$paragraphe2", 1, "C", 0);
$pdf->WriteHTML("<br><br><br><br>");
$pdf->MultiCell(0, 10, "$titreLiens" , 0, "C", 0);
$pdf->WriteHTML("<br>");
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(0, 10, "$paragraphe", 1, "C", 0);
$pdf->Output(); 
?>