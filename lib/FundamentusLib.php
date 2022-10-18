<?php

namespace lib;

include_once(realpath( __DIR__ . '/../vendor/autoload.php'));
include_once(realpath( __DIR__ . '/../model/fundamentus.php'));

use DOMDocument;
use model\Fundamentus;
use model\FundamentusDetalhes;

class FundamentusLib
{

    private $fundamentus;

    /**
    * @return mixed
    */
    function getFundamentus(){
        return $this->fundamentus;
    }

    /**
    * @param mixed $fundamentus
    * @return FundamentusLib
    */
    function setFundamentus($fundamentus){
        $this->fundamentus = $fundamentus;
        return $this;
    }

    function loadDados(){
        $opts = [
            "http" => [
                "method" => "GET",
                "header" => "User-Agent: Mozilla/5.0 (Windows; U; Windows NT 6.1; rv:2.2) Gecko/20110201\r\n" .
                    "Accept: text/html, text/plain, text/css, text/sgml, */*;q=0.01\r\n"
            ]
        ];
        
        $context = stream_context_create($opts);
        
        $html = file_get_contents('http://www.fundamentus.com.br/fii_resultado.php', false, $context);
        
        $internalErrors = libxml_use_internal_errors(true);
        $domDocument = new DOMDocument();
        $domDocument->loadHTML($html);
        libxml_use_internal_errors($internalErrors);
        
        $tabelas = $domDocument->getElementsByTagName('table');
        $trs = $tabelas[0]->getElementsByTagName('tr');
        
        for($i = 1; $i < $trs->length; $i++){
            $tds = $trs->item($i)->childNodes;

            $papel = $tds->item(1)->nodeValue;
            $seguimento = ($tds->item(3)->nodeValue);
            $cotacao = ($tds->item(5)->nodeValue);
            $ffoy = ($tds->item(7)->nodeValue);
            $dy = ($tds->item(9)->nodeValue);
            $pvp = ($tds->item(11)->nodeValue);
            $valorMercado = ($tds->item(13)->nodeValue);
            $liquidez = ($tds->item(15)->nodeValue);
            $qtdeImoveis = ($tds->item(17)->nodeValue);
            $precoM2 = ($tds->item(19)->nodeValue);
            $aluguelM2 = ($tds->item(21)->nodeValue);
            $capRate = ($tds->item(23)->nodeValue);
            $vacanciaMedia = ($tds->item(25)->nodeValue);


            $html = file_get_contents('http://www.fundamentus.com.br/detalhes.php?papel=' . $papel, false, $context);
        
            $internalErrors = libxml_use_internal_errors(true);
            $domDocument = new DOMDocument();
            $domDocument->loadHTML($html);
            libxml_use_internal_errors($internalErrors);

            $tabelas = $domDocument->getElementsByTagName('table');

            $trs2 = $tabelas[0]->getElementsByTagName('tr');

            $tds2 = $trs2->item(1)->childNodes;
            $nome = $tds2->item(3)->nodeValue;
            $dataUltimaCotacao = $tds2->item(7)->nodeValue;

            $tds2 = $trs2->item(2)->childNodes;
            $mandato = $tds2->item(3)->nodeValue;
            $min52Semana = $tds2->item(7)->nodeValue;

            $tds2 = $trs2->item(3)->childNodes;
            $max52Semana = $tds2->item(7)->nodeValue;

            $tds2 = $trs2->item(4)->childNodes;
            $gestao = $tds2->item(3)->nodeValue;
            $volMedio2m = $tds2->item(7)->nodeValue;

            
            $trs3 = $tabelas[1]->getElementsByTagName('tr');

            $tds3 = $trs3->item(0)->childNodes;
            $nCotas = $tds3->item(7)->nodeValue;

            $tds3 = $trs3->item(1)->childNodes;
            $relatorio = trim($tds3->item(3)->nodeValue);
            $ultimoInfoTrimestral = $tds3->item(7)->nodeValue;


            $trs4 = $tabelas[2]->getElementsByTagName('tr');

            $tds4 = $trs4->item(1)->childNodes;
            $ocilacoesDia = $tds4->item(3)->nodeValue;
            $ffoCota = $tds4->item(11)->nodeValue;

            $tds4 = $trs4->item(2)->childNodes;
            $ocilacoesMes = $tds4->item(3)->nodeValue;
            $ddyCota = $tds4->item(11)->nodeValue;

            $tds4 = $trs4->item(3)->childNodes;
            $ocilacoes30dias = $tds4->item(3)->nodeValue;
            $vpCota = $tds4->item(11)->nodeValue;

            $tds4 = $trs4->item(4)->childNodes;
            $ocilacoes12meses = $tds4->item(3)->nodeValue;

            $tds4 = $trs4->item(5)->childNodes;
            $ocilacoes2022 = $tds4->item(3)->nodeValue;

            $tds4 = $trs4->item(6)->childNodes;
            $ocilacoes2021 = $tds4->item(3)->nodeValue;
            $resultado12mesesReceita = $tds4->item(7)->nodeValue;
            $resultado3mesesReceita = $tds4->item(11)->nodeValue;

            $tds4 = $trs4->item(7)->childNodes;
            $ocilacoes2020 = $tds4->item(3)->nodeValue;
            $resultado12mesesVendaAtivos = $tds4->item(7)->nodeValue;
            $resultado3mesesVendaAtivos = $tds4->item(11)->nodeValue;

            $tds4 = $trs4->item(8)->childNodes;
            $ocilacoes2019 = $tds4->item(3)->nodeValue;
            $resultado12mesesFFO = $tds4->item(7)->nodeValue;
            $resultado3mesesFFO = $tds4->item(11)->nodeValue;

            $tds4 = $trs4->item(9)->childNodes;
            $ocilacoes2018 = $tds4->item(3)->nodeValue;
            $resultado12mesesRendDistribuido = $tds4->item(7)->nodeValue;
            $resultado3mesesRendDistribuido = $tds4->item(11)->nodeValue;

            $tds4 = $trs4->item(10)->childNodes;
            $ocilacoes2017 = $tds4->item(3)->nodeValue;

            $tds4 = $trs4->item(11)->childNodes;
            $balancoPatrimonialAtivos = $tds4->item(7)->nodeValue;
            $balancoPatrimonialPatrimonioLiquido = $tds4->item(11)->nodeValue;
            
            
            $trs4 = $tabelas[4]->getElementsByTagName('tr');

            $tds4 = $trs4->item(1)->childNodes;
            $areaM2 = $tds4->item(7)->nodeValue;

            $tds4 = $trs4->item(2)->childNodes;
            $qtdeUnidades = $tds4->item(3)->nodeValue;

            $tds4 = $trs4->item(3)->childNodes;
            $imoveisPLFFI = $tds4->item(3)->nodeValue;


            $fundamentusDetalhes = new FundamentusDetalhes(
                $papel,
                $nome,
                $dataUltimaCotacao,
                $mandato,
                $min52Semana,
                $max52Semana,
                $gestao,
                $volMedio2m,
                $nCotas,
                $relatorio,
                $ultimoInfoTrimestral,
                $ocilacoesDia,
                $ffoCota,
                $ocilacoesMes,
                $ddyCota,
                $ocilacoes30dias,
                $vpCota,
                $ocilacoes12meses,
                $ocilacoes2022,
                $ocilacoes2021,
                $resultado12mesesReceita,
                $resultado3mesesReceita,
                $ocilacoes2020,
                $resultado12mesesVendaAtivos,
                $resultado3mesesVendaAtivos,
                $ocilacoes2019,
                $resultado12mesesFFO,
                $resultado3mesesFFO,
                $ocilacoes2018,
                $resultado12mesesRendDistribuido,
                $resultado3mesesRendDistribuido,
                $ocilacoes2017,
                $balancoPatrimonialAtivos,
                $balancoPatrimonialPatrimonioLiquido,
                $areaM2,
                $qtdeUnidades,
                $imoveisPLFFI
            );


            $this->fundamentus[] = new Fundamentus(
                $papel,
                $seguimento,
                $cotacao,
                $ffoy,
                $dy,
                $pvp,
                $valorMercado,
                $liquidez,
                $qtdeImoveis,
                $precoM2,
                $aluguelM2,
                $capRate,
                $vacanciaMedia,
                $fundamentusDetalhes
            );

        }
    }

}