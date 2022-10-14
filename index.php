<?php

include_once('vendor/autoload.php');
include_once('lib/fundamentuslib.php');

use lib\FundamentusLib;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


set_time_limit(0); 
ini_set('max_execution_time', 0);
ini_set("memory_limit",-1);


$fundamentusLib = new FundamentusLib();
$fundamentusLib->loadDados();

$fundamentus = $fundamentusLib->getFundamentus();


$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Papel');

for($i = 0; $i < count($fundamentus); $i++){
    $fundamentu = $fundamentus[$i];
    $sheet->setCellValue('A' . ($i+2), $fundamentu->getPapel());
}

$writer = new Xlsx($spreadsheet);
unlink(date('Y-m-d').'.xlsx');
$writer->save(date('Y-m-d').'.xlsx');
echo '<a href="' . date('Y-m-d').'.xlsx' . '">' . date('Y-m-d').'.xlsx' . "</a>";
// header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
// header('Content-Disposition: attachment; filename="'. urlencode($fileName).'"');
// $writer->save('php://output');
