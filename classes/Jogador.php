
<?php

class Jogador {

     //todos
    public $nota;
    private $nome;
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

    
    public function __construct($nome, $posicao, $passeIncompleto, $cartaoAmarelo, $faltasCometidas, $faltasSofridas, $assistencia, $gols, $golsContra, $saldoGols, $finalizacaoFora, $finalizacaoDefendida, $desarmes, $impedimento, $golsSofrido, $defesaDificil)
    {

         //todos
        $this->nome = $nome;
        $this->posicao = $posicao;
        $this->passeIncompleto = $passeIncompleto;
        $this->cartaoAmarelo = $cartaoAmarelo;
        $this->faltasCometidas = $faltasCometidas;
        $this->faltasSofridas = $faltasSofridas;
        $this->assistencia = $assistencia;
        $this->gols = $gols;
        $this->golsContra = $golsContra;

        //goleiros/zagueiro/lateral
        if($posicao == "goleiro" || $posicao == "zagueiro" || $posicao == "lateral"){
            $this->saldoGols = $saldoGols;
        }else{
            $this->saldoGols = null;
        }       
        

        //zagueiro/lateral/meia/atacante
        if($posicao == "zagueiro" || $posicao == "lateral" || $posicao == "meia" ||  $posicao == "atacante"){
            $this->finalizacaoFora = $finalizacaoFora;
            $this->finalizacaoDefendida = $finalizacaoDefendida;
            $this->desarmes = $desarmes;
            $this->impedimento = $impedimento;
        }else{
            $this->finalizacaoFora = null;
            $this->finalizacaoDefendida = null;
            $this->desarmes = null;
            $this->impedimento = null;
        }

        //goleiro
         if($posicao == "goleiro"){
            $this->golsSofrido = $golsSofrido;
            $this->defesaDificel = $defesaDificil;
        }else{
            $this->golsSofrido = null;
            $this->defesaDificel = null;
        }
        
    }

     public function getPosicao()
    {
        return $this->posicao;
    }

     public function setNota($nota)
    {
        $this->nota = $nota;
    }

    public function getNota()
    {
       return $this->nota;
    }

    public function getNome()
    {
       return $this->nome;
    }

    public function calcularNota(Pesos $pes)
    {   

        //todos
        $negativo = $pes->getPasseIncompleto() * $this->passeIncompleto + $this->cartaoAmarelo * $pes->getCartaoAmarelo() + $this->faltasCometidas * $pes->getFaltasCometidas() + $this->golsContra * $pes->getGolsContra();

        $nota =  $this->faltasSofridas * $pes->getFaltasSofridas() + $this->assistencia * $pes->getAssistencia() + $this->gols * $pes->getGols();

        //goleiros/zagueiro/lateral
        if($this->posicao == "goleiro" || $this->posicao == "zagueiro" || $this->posicao == "lateral"){
            $nota += $this->saldoGols * $pes->getSaldoGols();
        }       
        

        //zagueiro/lateral/meia/atacante
        if($this->posicao == "zagueiro" || $this->posicao == "lateral" || $this->posicao == "meia" ||  $this->posicao == "atacante"){

            $negativo += $this->finalizacaoFora * $pes->getFinalizacaoFora() + $this->impedimento * $pes->getImpedimento();

            $nota += $this->finalizacaoDefendida * $pes->getFinalizacaoDefendida() + $this->desarmes * $pes->getDesarmes();
        }

        //goleiro
         if($this->posicao == "goleiro"){
            $nota += ($this->golsSofrido * $pes->getGolsSofrido()) + $this->defesaDificel * $pes->getDefesaDificil();
        }
        
        $nota = $nota / $negativo;
        $this->nota = $nota;
       
    }

}