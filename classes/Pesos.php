<?php

class Pesos {
    
     //todos
    private $posicao;
    private $passeIncompleto;
    private $cartaoAmarelo;
    private $faltasCometidas;
    private $faltasSofridas;
    private $assistencia;
    private $gols;
    private $golsContra;

    //goleiros/zagueiro/lateral
    private $saldoGols;

    //zagueiro/lateral/meia/atacante
    private $finalizacaoFora;
    private $finalizacaoDefendida;
    private $desarmes;
    private $impedimento;

    //goleiro
    private $golsSofrido;
    private $defesaDificil;


    public function __construct($posicao, $passeIncompleto, $cartaoAmarelo, $faltasCometidas, $faltasSofridas, $assistencia, $gols, $golsContra, $saldoGols, $finalizacaoFora, $finalizacaoDefendida, $desarmes, $impedimento, $golsSofrido, $defesaDificil)
    {

        $this->posicao = $posicao;
        $this->passeIncompleto = $passeIncompleto;
        $this->cartaoAmarelo = $cartaoAmarelo;
        $this->faltasCometidas = $faltasCometidas;
        $this->faltasSofridas = $faltasSofridas;
        $this->assistencia = $assistencia;
        $this->gols = $gols;
        $this->golsContra = $golsContra;
        $this->saldoGols = $saldoGols;
        $this->saldoGols =  $saldoGols;
        $this->finalizacaoFora = $finalizacaoFora;
        $this->finalizacaoDefendida = $finalizacaoDefendida;
        $this->desarmes = $desarmes;
        $this->impedimento = $impedimento;
        $this->finalizacaoFora = $finalizacaoFora;
        $this->finalizacaoDefendida = $finalizacaoDefendida;
        $this->desarmes =  $desarmes;
        $this->impedimento = $impedimento;
        $this->golsSofrido = $golsSofrido;
        $this->defesaDificel = $defesaDificil;
        $this->golsSofrido = $golsSofrido;
        $this->defesaDificel = $defesaDificil;
        
    }


    public function getPosicao()
    {
        return $this->posicao;
    }

    public function getPasseIncompleto()
    {
        return $this->passeIncompleto;
    }

    public function getCartaoAmarelo()
    {
        return $this->cartaoAmarelo;
    }

    public function getFaltasCometidas()
    {
        return $this->faltasCometidas;
    }

    public function getFaltasSofridas()
    {
        return $this->faltasSofridas;
    }

    public function getAssistencia()
    {
        return $this->assistencia;
    }

    public function getGols()
    {
        return $this->gols;
    }

    public function getGolsContra()
    {
        return $this->golsContra;
    }

    public function getSaldoGols()
    {
        return $this->saldoGols;
    }

    public function getFinalizacaoFora()
    {
        return $this->finalizacaoFora;
    }

    public function getFinalizacaoDefendida()
    {
        return $this->finalizacaoDefendida;
    }

    public function getDesarmes()
    {
        return $this->desarmes;
    }

    public function getImpedimento()
    {
        return $this->impedimento;
    }

    public function getGolsSofrido()
    {
        return $this->golsSofrido;
    }

    public function getDefesaDificil()
    {
        return $this->defesaDificil;
    }
}