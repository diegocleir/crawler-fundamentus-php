<?php

namespace lib;

include_once('vendor/autoload.php');
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


            // $html = file_get_contents('http://www.fundamentus.com.br/detalhes.php?papel=' . $papel, false, $context);
        
            // $internalErrors = libxml_use_internal_errors(true);
            // $domDocument = new DOMDocument();
            // $domDocument->loadHTML($html);
            // libxml_use_internal_errors($internalErrors);

            // $tabelas = $domDocument->getElementsByTagName('table');

            // $trs2 = $tabelas[0]->getElementsByTagName('tr');

            // $tds2 = $trs2->item(1)->childNodes;
            // $nome = $tds2->item(1)->nodeValue;
            // $dataUltimaCotacao = $tds2->item(3)->nodeValue;

            // $tds2 = $trs2->item(2)->childNodes;
            // $mandato = $tds2->item(1)->nodeValue;
            // $min52Semana = $tds2->item(3)->nodeValue;

            // $tds2 = $trs2->item(3)->childNodes;
            // $max52Semana = $tds2->item(3)->nodeValue;

            // $tds2 = $trs2->item(2)->childNodes;
            // $gestao = $tds2->item(1)->nodeValue;
            // $volMedio2m = $tds2->item(3)->nodeValue;


            $fundamentusDetalhes = new FundamentusDetalhes(
                $papel
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