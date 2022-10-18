<?php

namespace model;

class Fundamentus
{
    private $papel;
    private $seguimento;
    private $cotacao;
    private $ffoy;
    private $dy;
    private $pvp;
    private $valorMercado;
    private $liquidez;
    private $qtdeImoveis;
    private $precoM2;
    private $aluguelM2;
    private $capRate;
    private $vacanciaMedia;
    private $fundamentusDetalhes;

    /**
     * Fundamentus constructor.
     * @param $papel
     * @param $seguimento
     * @param $cotacao
     * @param $ffoy
     * @param $psr
     * @param $dy
     * @param $pvp
     * @param $liquidez
     * @param $qtdeImoveis
     * @param $precoM2
     * @param $aluguelM2
     * @param $capRate
     * @param $vacanciaMedia
     * @param $fundamentusDetalhes
     */
    public function __construct($papel, $seguimento, $cotacao, $ffoy, $dy, $pvp, $valorMercado, $liquidez, $qtdeImoveis, $precoM2, $aluguelM2, $capRate, $vacanciaMedia, $fundamentusDetalhes)
    {
        $this->papel = $papel;
        $this->seguimento = $seguimento;
        $this->cotacao = $cotacao;
        $this->ffoy = $ffoy;
        $this->dy = $dy;
        $this->pvp = $pvp;
        $this->valorMercado = $valorMercado;
        $this->liquidez = $liquidez;
        $this->qtdeImoveis = $qtdeImoveis;
        $this->precoM2 = $precoM2;
        $this->aluguelM2 = $aluguelM2;
        $this->capRate = $capRate;
        $this->vacanciaMedia = $vacanciaMedia;
        $this->fundamentusDetalhes = $fundamentusDetalhes;
    }


    /**
     * @return mixed
     */
    public function getPapel()
    {
        return $this->papel;
    }

    /**
     * @param mixed $papel
     * @return Fundamentus
     */
    public function setPapel($papel)
    {
        $this->papel = $papel;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSeguimento()
    {
        return $this->seguimento;
    }

    /**
     * @param mixed $seguimento
     * @return Fundamentus
     */
    public function setSeguimento($seguimento)
    {
        $this->seguimento = $seguimento;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCotacao()
    {
        return $this->cotacao;
    }

    /**
     * @param mixed $cotacao
     * @return Fundamentus
     */
    public function setCotacao($cotacao)
    {
        $this->cotacao = $cotacao;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFfoy()
    {
        return $this->ffoy;
    }

    /**
     * @param mixed $ffoy
     * @return Fundamentus
     */
    public function setFfoy($ffoy)
    {
        $this->ffoy = $ffoy;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDy()
    {
        return $this->dy;
    }

    /**
     * @param mixed $dy
     * @return Fundamentus
     */
    public function setDy($dy)
    {
        $this->dy = $dy;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPvp()
    {
        return $this->pvp;
    }

    /**
     * @param mixed $pvp
     * @return Fundamentus
     */
    public function setPvp($pvp)
    {
        $this->pvp = $pvp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValorMercado()
    {
        return $this->valorMercado;
    }

    /**
     * @param mixed $valorMercado
     * @return Fundamentus
     */
    public function setValorMercado($valorMercado)
    {
        $this->valorMercado = $valorMercado;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLiquidez()
    {
        return $this->liquidez;
    }

    /**
     * @param mixed $liquidez
     * @return Fundamentus
     */
    public function setLiquidez($liquidez)
    {
        $this->liquidez = $liquidez;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQtdeImoveis()
    {
        return $this->qtdeImoveis;
    }

    /**
     * @param mixed $qtdeImoveis
     * @return Fundamentus
     */
    public function setQtdeImoveis($qtdeImoveis)
    {
        $this->qtdeImoveis = $qtdeImoveis;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrecoM2()
    {
        return $this->precoM2;
    }

    /**
     * @param mixed $precoM2
     * @return Fundamentus
     */
    public function setPrecoM2($precoM2)
    {
        $this->precoM2 = $precoM2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAluguelM2()
    {
        return $this->aluguelM2;
    }

    /**
     * @param mixed $aluguelM2
     * @return Fundamentus
     */
    public function setAluguelM2($aluguelM2)
    {
        $this->aluguelM2 = $aluguelM2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCapRate()
    {
        return $this->capRate;
    }

    /**
     * @param mixed $capRate
     * @return Fundamentus
     */
    public function setCapRate($capRate)
    {
        $this->capRate = $capRate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVacanciaMedia()
    {
        return $this->vacanciaMedia;
    }

    /**
     * @param mixed $vacanciaMedia
     * @return Fundamentus
     */
    public function setVacanciaMedia($vacanciaMedia)
    {
        $this->vacanciaMedia = $vacanciaMedia;
        return $this;
    }

       /**
     * @return mixed
     */
    public function getDetalhes()
    {
        return $this->fundamentusDetalhes;
    }

    /**
     * @param FundamentusDetalhes $fundamentusDetalhes
     * @return Fundamentus
     */
    public function setDetalhes($fundamentusDetalhes)
    {
        $this->fundamentusDetalhes = $fundamentusDetalhes;
        return $this;
    }
    
}


class FundamentusDetalhes
{
    private $papel;
    private $nome;
    private $dataUltimaCotacao;
    private $mandato;
    private $min52Semana;
    private $max52Semana;
    private $gestao;
    private $volMedio2m;
    private $nCotas;
    private $relatorio;
    private $ultimoInfoTrimestral;
    private $ocilacoesDia;    
    private $ffoCota;
    private $ocilacoesMes;
    private $ddyCota;
    private $ocilacoes30dias;
    private $vpCota;
    private $ocilacoes12meses;
    private $ocilacoes2022;
    private $ocilacoes2021;
    private $resultado12mesesReceita;
    private $resultado3mesesReceita;
    private $ocilacoes2020;
    private $resultado12mesesVendaAtivos;
    private $resultado3mesesVendaAtivos;
    private $ocilacoes2019;
    private $resultado12mesesFFO;
    private $resultado3mesesFFO;
    private $ocilacoes2018;
    private $resultado12mesesRendDistribuido;
    private $resultado3mesesRendDistribuido;
    private $ocilacoes2017;
    private $balancoPatrimonialAtivos;
    private $balancoPatrimonialPatrimonioLiquido;
    private $areaM2;
    private $qtdeUnidades;
    private $imoveisPLFFI;

    /**
     * @return mixed
     */
    public function getPapel()
    {
        return $this->papel;
    }

    /**
     * @param mixed $papel
     * @return FundamentusDetalhes
     */
    public function setPapel($papel)
    {
        $this->papel = $papel;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     * @return FundamentusDetalhes
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDataUltimaCotacao()
    {
        return $this->dataUltimaCotacao;
    }

    /**
     * @param mixed $dataUltimaCotacao
     * @return FundamentusDetalhes
     */
    public function setDataUltimaCotacao($dataUltimaCotacao)
    {
        $this->dataUltimaCotacao = $dataUltimaCotacao;
        return $this;
    }
    
    /**
     * Get the value of mandato
     */ 
    public function getMandato()
    {
        return $this->mandato;
    }

    /**
     * Set the value of mandato
     *
     * @return  self
     */ 
    public function setMandato($mandato)
    {
        $this->mandato = $mandato;

        return $this;
    }

    /**
     * Get the value of min52Semana
     */ 
    public function getMin52Semana()
    {
        return $this->min52Semana;
    }

    /**
     * Set the value of min52Semana
     *
     * @return  self
     */ 
    public function setMin52Semana($min52Semana)
    {
        $this->min52Semana = $min52Semana;

        return $this;
    }

    /**
     * Get the value of max52Semana
     */ 
    public function getMax52Semana()
    {
            return $this->max52Semana;
    }

    /**
     * Set the value of max52Semana
     *
     * @return  self
     */ 
    public function setMax52Semana($max52Semana)
    {
            $this->max52Semana = $max52Semana;

            return $this;
    }

    /**
     * Get the value of gestao
     */ 
    public function getGestao()
    {
            return $this->gestao;
    }

    /**
     * Set the value of gestao
     *
     * @return  self
     */ 
    public function setGestao($gestao)
    {
            $this->gestao = $gestao;

            return $this;
    }

    /**
     * Get the value of volMedio2m
     */ 
    public function getVolMedio2m()
    {
            return $this->volMedio2m;
    }

    /**
     * Set the value of volMedio2m
     *
     * @return  self
     */ 
    public function setVolMedio2m($volMedio2m)
    {
            $this->volMedio2m = $volMedio2m;

            return $this;
    }

    /**
     * Get the value of nCotas
     */ 
    public function getNCotas()
    {
            return $this->nCotas;
    }

    /**
     * Set the value of nCotas
     *
     * @return  self
     */ 
    public function setNCotas($nCotas)
    {
            $this->nCotas = $nCotas;

            return $this;
    }

    /**
     * Get the value of relatorio
     */ 
    public function getRelatorio()
    {
            return $this->relatorio;
    }

    /**
     * Set the value of relatorio
     *
     * @return  self
     */ 
    public function setRelatorio($relatorio)
    {
            $this->relatorio = $relatorio;

            return $this;
    }

    /**
     * Get the value of ultimoInfoTrimestral
     */ 
    public function getUltimoInfoTrimestral()
    {
            return $this->ultimoInfoTrimestral;
    }

    /**
     * Set the value of ultimoInfoTrimestral
     *
     * @return  self
     */ 
    public function setUltimoInfoTrimestral($ultimoInfoTrimestral)
    {
            $this->ultimoInfoTrimestral = $ultimoInfoTrimestral;

            return $this;
    }

    /**
     * Get the value of ocilacoesDia
     */ 
    public function getOcilacoesDia()
    {
            return $this->ocilacoesDia;
    }

    /**
     * Set the value of ocilacoesDia
     *
     * @return  self
     */ 
    public function setOcilacoesDia($ocilacoesDia)
    {
            $this->ocilacoesDia = $ocilacoesDia;

            return $this;
    }

    /**
     * Get the value of ffoCota
     */ 
    public function getFfoCota()
    {
            return $this->ffoCota;
    }

    /**
     * Set the value of ffoCota
     *
     * @return  self
     */ 
    public function setFfoCota($ffoCota)
    {
            $this->ffoCota = $ffoCota;

            return $this;
    }

    /**
     * Get the value of ocilacoesMes
     */ 
    public function getOcilacoesMes()
    {
        return $this->ocilacoesMes;
    }

    /**
     * Set the value of ocilacoesMes
     *
     * @return  self
     */ 
    public function setOcilacoesMes($ocilacoesMes)
    {
        $this->ocilacoesMes = $ocilacoesMes;

        return $this;
    }

    /**
     * Get the value of ddyCota
     */ 
    public function getDdyCota()
    {
        return $this->ddyCota;
    }

    /**
     * Set the value of ddyCota
     *
     * @return  self
     */ 
    public function setDdyCota($ddyCota)
    {
        $this->ddyCota = $ddyCota;

        return $this;
    }

    /**
     * Get the value of ocilacoes30dias
     */ 
    public function getOcilacoes30dias()
    {
        return $this->ocilacoes30dias;
    }

    /**
     * Set the value of ocilacoes30dias
     *
     * @return  self
     */ 
    public function setOcilacoes30dias($ocilacoes30dias)
    {
        $this->ocilacoes30dias = $ocilacoes30dias;

        return $this;
    }

    /**
     * Get the value of vpCota
     */ 
    public function getVpCota()
    {
        return $this->vpCota;
    }

    /**
     * Set the value of vpCota
     *
     * @return  self
     */ 
    public function setVpCota($vpCota)
    {
        $this->vpCota = $vpCota;

        return $this;
    }

    /**
     * Get the value of ocilacoes12meses
     */ 
    public function getOcilacoes12meses()
    {
        return $this->ocilacoes12meses;
    }

    /**
     * Set the value of ocilacoes12meses
     *
     * @return  self
     */ 
    public function setOcilacoes12meses($ocilacoes12meses)
    {
        $this->ocilacoes12meses = $ocilacoes12meses;

        return $this;
    }

    /**
     * Get the value of ocilacoes2022
     */ 
    public function getOcilacoes2022()
    {
        return $this->ocilacoes2022;
    }

    /**
     * Set the value of ocilacoes2022
     *
     * @return  self
     */ 
    public function setOcilacoes2022($ocilacoes2022)
    {
        $this->ocilacoes2022 = $ocilacoes2022;

        return $this;
    }

    /**
     * Get the value of ocilacoes2021
     */ 
    public function getOcilacoes2021()
    {
        return $this->ocilacoes2021;
    }

    /**
     * Set the value of ocilacoes2021
     *
     * @return  self
     */ 
    public function setOcilacoes2021($ocilacoes2021)
    {
        $this->ocilacoes2021 = $ocilacoes2021;

        return $this;
    }

    /**
     * Get the value of resultado12mesesReceita
     */ 
    public function getResultado12mesesReceita()
    {
        return $this->resultado12mesesReceita;
    }

    /**
     * Set the value of resultado12mesesReceita
     *
     * @return  self
     */ 
    public function setResultado12mesesReceita($resultado12mesesReceita)
    {
        $this->resultado12mesesReceita = $resultado12mesesReceita;

        return $this;
    }

    /**
     * Get the value of resultado3mesesReceita
     */ 
    public function getResultado3mesesReceita()
    {
        return $this->resultado3mesesReceita;
    }

    /**
     * Set the value of resultado3mesesReceita
     *
     * @return  self
     */ 
    public function setResultado3mesesReceita($resultado3mesesReceita)
    {
        $this->resultado3mesesReceita = $resultado3mesesReceita;

        return $this;
    }

    /**
     * Get the value of ocilacoes2020
     */ 
    public function getOcilacoes2020()
    {
        return $this->ocilacoes2020;
    }

    /**
     * Set the value of ocilacoes2020
     *
     * @return  self
     */ 
    public function setOcilacoes2020($ocilacoes2020)
    {
        $this->ocilacoes2020 = $ocilacoes2020;

        return $this;
    }

    /**
     * Get the value of resultado12mesesVendaAtivos
     */ 
    public function getResultado12mesesVendaAtivos()
    {
        return $this->resultado12mesesVendaAtivos;
    }

    /**
     * Set the value of resultado12mesesVendaAtivos
     *
     * @return  self
     */ 
    public function setResultado12mesesVendaAtivos($resultado12mesesVendaAtivos)
    {
        $this->resultado12mesesVendaAtivos = $resultado12mesesVendaAtivos;

        return $this;
    }

    /**
     * Get the value of resultado3mesesVendaAtivos
     */ 
    public function getResultado3mesesVendaAtivos()
    {
        return $this->resultado3mesesVendaAtivos;
    }

    /**
     * Set the value of resultado3mesesVendaAtivos
     *
     * @return  self
     */ 
    public function setResultado3mesesVendaAtivos($resultado3mesesVendaAtivos)
    {
        $this->resultado3mesesVendaAtivos = $resultado3mesesVendaAtivos;

        return $this;
    }

    /**
     * Get the value of ocilacoes2019
     */ 
    public function getOcilacoes2019()
    {
        return $this->ocilacoes2019;
    }

    /**
     * Set the value of ocilacoes2019
     *
     * @return  self
     */ 
    public function setOcilacoes2019($ocilacoes2019)
    {
        $this->ocilacoes2019 = $ocilacoes2019;

        return $this;
    }

    /**
     * Get the value of resultado12mesesFFO
     */ 
    public function getResultado12mesesFFO()
    {
        return $this->resultado12mesesFFO;
    }

    /**
     * Set the value of resultado12mesesFFO
     *
     * @return  self
     */ 
    public function setResultado12mesesFFO($resultado12mesesFFO)
    {
        $this->resultado12mesesFFO = $resultado12mesesFFO;

        return $this;
    }

    /**
     * Get the value of resultado3mesesFFO
     */ 
    public function getResultado3mesesFFO()
    {
        return $this->resultado3mesesFFO;
    }

    /**
     * Set the value of resultado3mesesFFO
     *
     * @return  self
     */ 
    public function setResultado3mesesFFO($resultado3mesesFFO)
    {
        $this->resultado3mesesFFO = $resultado3mesesFFO;

        return $this;
    }

    /**
     * Get the value of ocilacoes2018
     */ 
    public function getOcilacoes2018()
    {
        return $this->ocilacoes2018;
    }

    /**
     * Set the value of ocilacoes2018
     *
     * @return  self
     */ 
    public function setOcilacoes2018($ocilacoes2018)
    {
        $this->ocilacoes2018 = $ocilacoes2018;

        return $this;
    }

    /**
     * Get the value of resultado12mesesRendDistribuido
     */ 
    public function getResultado12mesesRendDistribuido()
    {
        return $this->resultado12mesesRendDistribuido;
    }

    /**
     * Set the value of resultado12mesesRendDistribuido
     *
     * @return  self
     */ 
    public function setResultado12mesesRendDistribuido($resultado12mesesRendDistribuido)
    {
        $this->resultado12mesesRendDistribuido = $resultado12mesesRendDistribuido;

        return $this;
    }

    /**
     * Get the value of resultado3mesesRendDistribuido
     */ 
    public function getResultado3mesesRendDistribuido()
    {
        return $this->resultado3mesesRendDistribuido;
    }

    /**
     * Set the value of resultado3mesesRendDistribuido
     *
     * @return  self
     */ 
    public function setResultado3mesesRendDistribuido($resultado3mesesRendDistribuido)
    {
        $this->resultado3mesesRendDistribuido = $resultado3mesesRendDistribuido;

        return $this;
    }

    /**
     * Get the value of ocilacoes2017
     */ 
    public function getOcilacoes2017()
    {
        return $this->ocilacoes2017;
    }

    /**
     * Set the value of ocilacoes2017
     *
     * @return  self
     */ 
    public function setOcilacoes2017($ocilacoes2017)
    {
        $this->ocilacoes2017 = $ocilacoes2017;

        return $this;
    }

    /**
     * Get the value of balancoPatrimonialAtivos
     */ 
    public function getBalancoPatrimonialAtivos()
    {
        return $this->balancoPatrimonialAtivos;
    }

    /**
     * Set the value of balancoPatrimonialAtivos
     *
     * @return  self
     */ 
    public function setBalancoPatrimonialAtivos($balancoPatrimonialAtivos)
    {
        $this->balancoPatrimonialAtivos = $balancoPatrimonialAtivos;

        return $this;
    }

    /**
     * Get the value of balancoPatrimonialPatrimonioLiquido
     */ 
    public function getBalancoPatrimonialPatrimonioLiquido()
    {
        return $this->balancoPatrimonialPatrimonioLiquido;
    }

    /**
     * Set the value of balancoPatrimonialPatrimonioLiquido
     *
     * @return  self
     */ 
    public function setBalancoPatrimonialPatrimonioLiquido($balancoPatrimonialPatrimonioLiquido)
    {
        $this->balancoPatrimonialPatrimonioLiquido = $balancoPatrimonialPatrimonioLiquido;

        return $this;
    }

    

    /**
     * Get the value of areaM2
     */ 
    public function getAreaM2()
    {
        return $this->areaM2;
    }

    /**
     * Set the value of areaM2
     *
     * @return  self
     */ 
    public function setAreaM2($areaM2)
    {
        $this->areaM2 = $areaM2;

        return $this;
    }

    /**
     * Get the value of qtdeUnidades
     */ 
    public function getQtdeUnidades()
    {
        return $this->qtdeUnidades;
    }

    /**
     * Set the value of qtdeUnidades
     *
     * @return  self
     */ 
    public function setQtdeUnidades($qtdeUnidades)
    {
        $this->qtdeUnidades = $qtdeUnidades;

        return $this;
    }

    /**
     * Get the value of imoveisPLFFI
     */ 
    public function getImoveisPLFFI()
    {
        return $this->imoveisPLFFI;
    }

    /**
     * Set the value of imoveisPLFFI
     *
     * @return  self
     */ 
    public function setImoveisPLFFI($imoveisPLFFI)
    {
        $this->imoveisPLFFI = $imoveisPLFFI;

        return $this;
    }

    /**
     * FundamentusDetalhes constructor.
     * @param $papel
     */
    public function __construct($papel, $nome, 
        $dataUltimaCotacao, $mandato,
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
        $imoveisPLFFI)
    {
        $this->papel = $papel;
        $this->nome = $nome;
        $this->dataUltimaCotacao = $dataUltimaCotacao;
        $this->mandato = $mandato;
        $this->min52Semana = $min52Semana;
        $this->max52Semana = $max52Semana;
        $this->gestao = $gestao;
        $this->volMedio2m = $volMedio2m;
        $this->nCotas = $nCotas;
        $this->relatorio = $relatorio;
        $this->ultimoInfoTrimestral = $ultimoInfoTrimestral;
        $this->ocilacoesDia = $ocilacoesDia;
        $this->ffoCota = $ffoCota;
        $this->ocilacoesMes = $ocilacoesMes;
        $this->ddyCota = $ddyCota;
        $this->ocilacoes30dias = $ocilacoes30dias;
        $this->vpCota = $vpCota;
        $this->ocilacoes12meses = $ocilacoes12meses;
        $this->ocilacoes2022 = $ocilacoes2022;
        $this->ocilacoes2021 = $ocilacoes2021;
        $this->resultado12mesesReceita = $resultado12mesesReceita;
        $this->resultado3mesesReceita = $resultado3mesesReceita;
        $this->ocilacoes2020 = $ocilacoes2020;
        $this->resultado12mesesVendaAtivos = $resultado12mesesVendaAtivos;
        $this->resultado3mesesVendaAtivos = $resultado3mesesVendaAtivos;
        $this->ocilacoes2019 = $ocilacoes2019;
        $this->resultado12mesesFFO = $resultado12mesesFFO;
        $this->resultado3mesesFFO = $resultado3mesesFFO;
        $this->ocilacoes2018 = $ocilacoes2018;
        $this->resultado12mesesRendDistribuido = $resultado12mesesRendDistribuido;
        $this->resultado3mesesRendDistribuido = $resultado3mesesRendDistribuido;
        $this->ocilacoes2017 = $ocilacoes2017;
        $this->balancoPatrimonialAtivos = $balancoPatrimonialAtivos;
        $this->balancoPatrimonialPatrimonioLiquido = $balancoPatrimonialPatrimonioLiquido;
        $this->areaM2 = $areaM2;
        $this->qtdeUnidades = $qtdeUnidades;
        $this->imoveisPLFFI = $imoveisPLFFI;
    }

}