<?php
require('fpdf/fpdf.php');

include 'config.php';

$pdf = new FPDF('L', 'mm', 'A4'); 
$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'SMK TOMORROWLAND', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, 'DAFTAR SISWA BARU', 0, 1, 'C');

$pdf->Cell(10, 7, '', 0, 1);

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 8, 'NO', 1, 0, 'C');
$pdf->Cell(50, 8, 'NAMA', 1, 0, 'C');
$pdf->Cell(60, 8, 'ALAMAT', 1, 0, 'C');
$pdf->Cell(40, 8, 'JENIS KELAMIN', 1, 0, 'C');
$pdf->Cell(40, 8, 'AGAMA', 1, 0, 'C');
$pdf->Cell(60, 8, 'SEKOLAH ASAL', 1, 1, 'C');

$pdf->SetFont('Arial', '', 10);
$query = mysqli_query($db, "SELECT * FROM calon_siswa ORDER BY id ASC");

$no = 1;
while ($row = mysqli_fetch_array($query)) {
    $pdf->Cell(20, 8, $no++, 1, 0, 'C');
    $pdf->Cell(50, 8, $row['nama'], 1, 0);
    $pdf->Cell(60, 8, $row['alamat'], 1, 0);
    $pdf->Cell(40, 8, $row['jenis_kelamin'], 1, 0, 'C');
    $pdf->Cell(40, 8, $row['agama'], 1, 0);
    $pdf->Cell(60, 8, $row['sekolah_asal'], 1, 1);
}

$pdf->Output('D', 'Data_Siswa_SMK_Tomorrowland.pdf'); 
?>
