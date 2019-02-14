<?php 

include '../config/config.php';

// Load library spreadsheet
require('vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
// End load library spreadsheet


$spreadsheet = new Spreadsheet();

//Set document properties 
$spreadsheet->getProperties()->setCreator('PT. Arisoft Riset Informatika')
->setLastModifiedBy('Admin')
->setTitle('Tabel Presensi Karyawan')
->setSubject('Tabel Presensi Karyawan')
->setDescription('Tabel presensi karyawan Arisoft')
->setKeywords('tabel presensi excel Arisoft')
->setCategory('tabel result presensi Arisoft');

$spreadsheet->getActiveSheet()->mergeCells('A1:F1');
$spreadsheet->setActiveSheetIndex(0)->setCellValue('A1', 'Data Presensi Karyawan PT. Arisoft Riset Informatika');

//Font color 
$spreadsheet->getActiveSheet()->getStyle('A4:G4')
			->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);

//Background color
  $spreadsheet->getActiveSheet()->getStyle('A4:G4')->getFill()
    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
    ->getStartColor()->setARGB('FFFF0000');	


// Header Tabel
$spreadsheet->setActiveSheetIndex(0)
->setCellValue('A4', 'No')
->setCellValue('B4', 'Tanggal')
->setCellValue('C4', 'ID Karyawan')
->setCellValue('D4', 'Nama Slack')
->setCellValue('E4', 'Waktu IN')
->setCellValue('F4', 'Waktu OUT')
->setCellValue('G4', 'Total Jam')

;

$i=5; 
$no=1; 
$sql = "SELECT a.id, a.tanggal, a.user, b.name, a.waktu_IN, a.waktu_OUT, a.totalJam FROM tb_presensi a INNER JOIN tb_pegawai b ON a.user = b.user ORDER BY a.tanggal";
$result = mysqli_query($connection, $sql);
while ($data = mysqli_fetch_assoc($result)) {
	$spreadsheet->setActiveSheetIndex(0)
	->setCellValue('A'.$i, $no)
	->setCellValue('B'.$i, $data['tanggal'])
	->setCellValue('C'.$i, $data['user'])
	->setCellValue('D'.$i, $data['name'])
	->setCellValue('E'.$i, $data['waktu_IN'])
	->setCellValue('F'.$i, $data['waktu_OUT'])
	->setCellValue('G'.$i, $data['totalJam']);
	$i++; $no++;
}


// Rename worksheet
$spreadsheet->getActiveSheet()->setTitle('Report Presensi '.date('d-m-Y H'));

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$spreadsheet->setActiveSheetIndex(0);

// Redirect output to a client’s web browser (Xlsx)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Report Presensi.xlsx"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header('Pragma: public'); // HTTP/1.0

$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');


 ?>