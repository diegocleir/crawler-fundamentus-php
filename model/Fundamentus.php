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
    private $mandato;

    /**
     * FundamentusDetalhes constructor.
     * @param $papel
     */
    public function __construct($papel)
    {
        $this->papel = $papel;
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

}