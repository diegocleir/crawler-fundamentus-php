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

for($i = 0; $i < count($fundamentus); $i++){
    $fundamentu = $fundamentus[$i];
    $sheet->setCellValue('A' . ($i+2), $fundamentu->getPapel());
    $sheet->setCellValue('B' . ($i+2), $fundamentu->getSeguimento());
    $sheet->setCellValue('C' . ($i+2), $fundamentu->getCotacao());
    $sheet->setCellValue('D' . ($i+2), $fundamentu->getFfoy());
    $sheet->setCellValue('E' . ($i+2), $fundamentu->getDy());
    $sheet->setCellValue('F' . ($i+2), $fundamentu->getPvp());
    $sheet->setCellValue('G' . ($i+2), $fundamentu->getValorMercado());
    $sheet->setCellValue('H' . ($i+2), $fundamentu->getLiquidez());
    $sheet->setCellValue('I' . ($i+2), $fundamentu->getQtdeImoveis());
    $sheet->setCellValue('J' . ($i+2), $fundamentu->getPrecoM2());
    $sheet->setCellValue('K' . ($i+2), $fundamentu->getAluguelM2());
    $sheet->setCellValue('L' . ($i+2), $fundamentu->getCapRate());
    $sheet->setCellValue('M' . ($i+2), $fundamentu->getVacanciaMedia());
    
    $detalhesFundamentus = $fundamentu->getDetalhes();
    $sheet->setCellValue('N' . ($i+2), $detalhesFundamentus->getNome());
    $sheet->setCellValue('O' . ($i+2), $detalhesFundamentus->getDataUltimaCotacao());
    $sheet->setCellValue('P' . ($i+2), $detalhesFundamentus->getMandato());
    $sheet->setCellValue('Q' . ($i+2), $detalhesFundamentus->getMin52Semana());
    $sheet->setCellValue('R' . ($i+2), $detalhesFundamentus->getMax52Semana());
    $sheet->setCellValue('S' . ($i+2), $detalhesFundamentus->getGestao());
    $sheet->setCellValue('T' . ($i+2), $detalhesFundamentus->getVolMedio2m());
    $sheet->setCellValue('U' . ($i+2), $detalhesFundamentus->getNCotas());
    $sheet->setCellValue('V' . ($i+2), $detalhesFundamentus->getRelatorio());
    $sheet->setCellValue('W' . ($i+2), $detalhesFundamentus->getUltimoInfoTrimestral());
    $sheet->setCellValue('X' . ($i+2), $detalhesFundamentus->getOcilacoesDia());
    $sheet->setCellValue('Y' . ($i+2), $detalhesFundamentus->getFfoCota());
    $sheet->setCellValue('Z' . ($i+2), $detalhesFundamentus->getOcilacoesMes());
    $sheet->setCellValue('AA' . ($i+2), $detalhesFundamentus->getDdyCota());
    $sheet->setCellValue('AB' . ($i+2), $detalhesFundamentus->getOcilacoes30dias());
    $sheet->setCellValue('AC' . ($i+2), $detalhesFundamentus->getVpCota());
    $sheet->setCellValue('AD' . ($i+2), $detalhesFundamentus->getOcilacoes12meses());
    $sheet->setCellValue('AE' . ($i+2), $detalhesFundamentus->getOcilacoes2022());
    $sheet->setCellValue('AF' . ($i+2), $detalhesFundamentus->getOcilacoes2021());
    $sheet->setCellValue('AG' . ($i+2), $detalhesFundamentus->getResultado12mesesReceita());
    $sheet->setCellValue('AH' . ($i+2), $detalhesFundamentus->getResultado3mesesReceita());
    $sheet->setCellValue('AI' . ($i+2), $detalhesFundamentus->getOcilacoes2020());
    $sheet->setCellValue('AJ' . ($i+2), $detalhesFundamentus->getResultado12mesesVendaAtivos());
    $sheet->setCellValue('AK' . ($i+2), $detalhesFundamentus->getResultado3mesesVendaAtivos());
    $sheet->setCellValue('AL' . ($i+2), $detalhesFundamentus->getOcilacoes2019());
    $sheet->setCellValue('AM' . ($i+2), $detalhesFundamentus->getResultado12mesesFFO());
    $sheet->setCellValue('AN' . ($i+2), $detalhesFundamentus->getResultado3mesesFFO());
    $sheet->setCellValue('AO' . ($i+2), $detalhesFundamentus->getOcilacoes2018());
    $sheet->setCellValue('AP' . ($i+2), $detalhesFundamentus->getResultado12mesesRendDistribuido());
    $sheet->setCellValue('AQ' . ($i+2), $detalhesFundamentus->getResultado3mesesRendDistribuido());
    $sheet->setCellValue('AR' . ($i+2), $detalhesFundamentus->getOcilacoes2017());
    $sheet->setCellValue('AS' . ($i+2), $detalhesFundamentus->getBalancoPatrimonialAtivos());
    $sheet->setCellValue('AT' . ($i+2), $detalhesFundamentus->getBalancoPatrimonialPatrimonioLiquido());
    $sheet->setCellValue('AU' . ($i+2), $detalhesFundamentus->getAreaM2());
    $sheet->setCellValue('AV' . ($i+2), $detalhesFundamentus->getQtdeUnidades());
    $sheet->setCellValue('AW' . ($i+2), $detalhesFundamentus->getImoveisPLFFI());
}

$writer = new Xlsx($spreadsheet);
unlink(date('Y-m-d').'.xlsx');
$writer->save(date('Y-m-d').'.xlsx');
echo '<a href="' . date('Y-m-d').'.xlsx' . '">' . date('Y-m-d').'.xlsx' . "</a>";
// header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
// header('Content-Disposition: attachment; filename="'. urlencode($fileName).'"');
// $writer->save('php://output');
