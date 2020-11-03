<?php

class Time {
    private $Jogadores;
    public $nota;
    private $pesos;
    private $qtd;



    public function __construct(array $pesos)
    {
        $this->qtd = 0;
        $this->pesos = $pesos;
    }

    /**
     * @return array
     */
    public function getPosicoes()
    {
        return $this->pesos;
    }

    /**
     * @return array
     */
    public function getJogadores()
    {
        return $this->Jogadores;
    }

    /**
     * Seta um Jogador numa determinada Posição do Time.
     * @param int $index
     * @param Jogador $jogador
     * @throws Exception
     */
    public function setJogador(Jogador $jogador)
    {
        if ($this->qtd == 11)
            throw new Exception('Time cheio!');

        $this->Jogadores[] = $jogador;
        $this->qtd++;
        return;
    }


    public function calcularNota()
    {
        foreach ($this->Jogadores as $jogador) {
            $this->nota += $jogador->getNota();
        }

    }

    /**
     * @return float
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * @return int
     */
    public function getQtd()
    {
        return $this->qtd;
    }

    /**
     * Extrai a primeira ou a segunda metade do time.
     */
    public function getMetadeJogadores($primeiraMetade = true)
    {
        $start = 5;
        $lenght = 6;
        if ( $primeiraMetade ) {
            $start = 0;
            $lenght = 5;
        }
        return array_slice($this->Jogadores, $start, $lenght);
    }

}
