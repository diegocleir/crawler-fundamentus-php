<?php

include_once('vendor/autoload.php');
include_once('lib/fundamentuslib.php');

use lib\FundamentusLib;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Style\Fill;


set_time_limit(0); 
ini_set('max_execution_time', 0);
ini_set("memory_limit",-1);


$fundamentusLib = new FundamentusLib();
$fundamentusLib->loadDados();

$fundamentus = $fundamentusLib->getFundamentus();


$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Papel');
$sheet->setCellValue('B1', 'Seguimento');
$sheet->setCellValue('C1', 'Cotação');
$sheet->setCellValue('D1', "Ffoy");
$sheet->setCellValue('E1', "Dy");
$sheet->setCellValue('F1', "Pvp");
$sheet->setCellValue('G1', "ValorMercado");
$sheet->setCellValue('H1', "Liquidez");
$sheet->setCellValue('I1', "QtdeImoveis");
$sheet->setCellValue('J1', "PrecoM2");
$sheet->setCellValue('K1', "AluguelM2");
$sheet->setCellValue('L1', "CapRate");
$sheet->setCellValue('M1', "VacanciaMedia");
$sheet->setCellValue('N1', 'Nome');
$sheet->setCellValue('O1', 'DataUltimaCotacao');
$sheet->setCellValue('P1', 'Mandato');
$sheet->setCellValue('Q1', 'Min52Semana');
$sheet->setCellValue('R1', 'Max52Semana');
$sheet->setCellValue('S1', 'Gestao');
$sheet->setCellValue('T1', 'VolMedio2m');
$sheet->setCellValue('U1', 'NCotas');
$sheet->setCellValue('V1', 'Relatorio');
$sheet->setCellValue('W1', 'UltimoInfoTrimestral');
$sheet->setCellValue('X1', 'OcilacoesDia');
$sheet->setCellValue('Y1', 'FfoCota');
$sheet->setCellValue('Z1', 'OcilacoesMes');
$sheet->setCellValue('AA1', 'DdyCota');
$sheet->setCellValue('AB1', 'Ocilacoes30dias');
$sheet->setCellValue('AC1', 'VpCota');
$sheet->setCellValue('AD1', 'Ocilacoes12meses');
$sheet->setCellValue('AE1', 'Ocilacoes2022');
$sheet->setCellValue('AF1', 'Ocilacoes2021');
$sheet->setCellValue('AG1', 'Resultado12mesesReceita');
$sheet->setCellValue('AH1', 'Resultado3mesesReceita');
$sheet->setCellValue('AI1', 'Ocilacoes2020');
$sheet->setCellValue('AJ1', 'Resultado12mesesVendaAtivos');
$sheet->setCellValue('AK1', 'Resultado3mesesVendaAtivos');
$sheet->setCellValue('AL1', 'Ocilacoes2019');
$sheet->setCellValue('AM1', 'Resultado12mesesFFO');
$sheet->setCellValue('AN1', 'Resultado3mesesFFO');
$sheet->setCellValue('AO1', 'Ocilacoes2018');
$sheet->setCellValue('AP1', 'Resultado12mesesRendDistribuido');
$sheet->setCellValue('AQ1', 'Resultado3mesesRendDistribuido');
$sheet->setCellValue('AR1', 'Ocilacoes2017');
$sheet->setCellValue('AS1', 'BalancoPatrimonialAtivos');
$sheet->setCellValue('AT1', 'BalancoPatrimonialPatrimonioLiquido');
$sheet->setCellValue('AU1', 'AreaM2');
$sheet->setCellValue('AV1', 'QtdeUnidades');
$sheet->setCellValue('AW1', 'ImoveisPLFFI');

$sheet->getStyle('A1:AW1')->getFont()->setBold(true);
$sheet->getStyle('A1:AW1')->getFont()->getColor()->setARGB('FFFFFF');
$sheet->getStyle('A1:AW1')->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setARGB('DD4B39');


for($i = 0; $i < count($fundamentus); $i++){
    $fundamentu = $fundamentus[$i];
    $sheet->setCellValueExplicit('A' . ($i+2), $fundamentu->getPapel(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('B' . ($i+2), $fundamentu->getSeguimento(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('C' . ($i+2), $fundamentu->getCotacao(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('D' . ($i+2), $fundamentu->getFfoy(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('E' . ($i+2), $fundamentu->getDy(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('F' . ($i+2), $fundamentu->getPvp(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('G' . ($i+2), $fundamentu->getValorMercado(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('H' . ($i+2), $fundamentu->getLiquidez(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('I' . ($i+2), $fundamentu->getQtdeImoveis(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('J' . ($i+2), $fundamentu->getPrecoM2(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('K' . ($i+2), $fundamentu->getAluguelM2(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('L' . ($i+2), $fundamentu->getCapRate(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('M' . ($i+2), $fundamentu->getVacanciaMedia(), DataType::TYPE_STRING);
    
    $detalhesFundamentus = $fundamentu->getDetalhes();
    $sheet->setCellValueExplicit('N' . ($i+2), $detalhesFundamentus->getNome(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('O' . ($i+2), $detalhesFundamentus->getDataUltimaCotacao(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('P' . ($i+2), $detalhesFundamentus->getMandato(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('Q' . ($i+2), $detalhesFundamentus->getMin52Semana(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('R' . ($i+2), $detalhesFundamentus->getMax52Semana(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('S' . ($i+2), $detalhesFundamentus->getGestao(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('T' . ($i+2), $detalhesFundamentus->getVolMedio2m(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('U' . ($i+2), $detalhesFundamentus->getNCotas(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('V' . ($i+2), $detalhesFundamentus->getRelatorio(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('W' . ($i+2), $detalhesFundamentus->getUltimoInfoTrimestral(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('X' . ($i+2), $detalhesFundamentus->getOcilacoesDia(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('Y' . ($i+2), $detalhesFundamentus->getFfoCota(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('Z' . ($i+2), $detalhesFundamentus->getOcilacoesMes(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('AA' . ($i+2), $detalhesFundamentus->getDdyCota(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('AB' . ($i+2), $detalhesFundamentus->getOcilacoes30dias(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('AC' . ($i+2), $detalhesFundamentus->getVpCota(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('AD' . ($i+2), $detalhesFundamentus->getOcilacoes12meses(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('AE' . ($i+2), $detalhesFundamentus->getOcilacoes2022(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('AF' . ($i+2), $detalhesFundamentus->getOcilacoes2021(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('AG' . ($i+2), $detalhesFundamentus->getResultado12mesesReceita(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('AH' . ($i+2), $detalhesFundamentus->getResultado3mesesReceita(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('AI' . ($i+2), $detalhesFundamentus->getOcilacoes2020(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('AJ' . ($i+2), $detalhesFundamentus->getResultado12mesesVendaAtivos(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('AK' . ($i+2), $detalhesFundamentus->getResultado3mesesVendaAtivos(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('AL' . ($i+2), $detalhesFundamentus->getOcilacoes2019(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('AM' . ($i+2), $detalhesFundamentus->getResultado12mesesFFO(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('AN' . ($i+2), $detalhesFundamentus->getResultado3mesesFFO(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('AO' . ($i+2), $detalhesFundamentus->getOcilacoes2018(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('AP' . ($i+2), $detalhesFundamentus->getResultado12mesesRendDistribuido(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('AQ' . ($i+2), $detalhesFundamentus->getResultado3mesesRendDistribuido(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('AR' . ($i+2), $detalhesFundamentus->getOcilacoes2017(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('AS' . ($i+2), $detalhesFundamentus->getBalancoPatrimonialAtivos(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('AT' . ($i+2), $detalhesFundamentus->getBalancoPatrimonialPatrimonioLiquido(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('AU' . ($i+2), $detalhesFundamentus->getAreaM2(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('AV' . ($i+2), $detalhesFundamentus->getQtdeUnidades(), DataType::TYPE_STRING);
    $sheet->setCellValueExplicit('AW' . ($i+2), $detalhesFundamentus->getImoveisPLFFI(), DataType::TYPE_STRING);
}

$sheet->setAutoFilter('A1:AW' . ($i+2));

$writer = new Xlsx($spreadsheet);
if(file_exists(date('Y-m-d').'.xlsx')){
    unlink(date('Y-m-d').'.xlsx');
}
$writer->save(date('Y-m-d').'.xlsx');
echo '<a href="' . date('Y-m-d').'.xlsx' . '">' . date('Y-m-d').'.xlsx' . "</a>";
// header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
// header('Content-Disposition: attachment; filename="'. urlencode($fileName).'"');
// $writer->save('php://output');
