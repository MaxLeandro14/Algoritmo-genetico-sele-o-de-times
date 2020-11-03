<?php
function formarTime(array $jogadores, Time $time)
{


        $convocados = [];
        $total = count($jogadores)-1;
  
 
        //escolhe um jogador que ainda não foi convocado.

        //goleiro
        $jogadorRandom = -1;
        while ( true ) {
            $jogadorRandom = ''.rand(0, $total);

           if($jogadores[$jogadorRandom]->getPosicao() === "goleiro"){

                if ( array_search($jogadorRandom, $convocados) === false )
                    break;
           }
            
        }

        $time->setJogador($jogadores[$jogadorRandom]);
        $convocados[] = $jogadorRandom;




        //volante
        for($i = 0; $i < 2; $i++){
            $jogadorRandom = -1;
            while ( true ) {
                $jogadorRandom = ''.rand(0, $total);

               if($jogadores[$jogadorRandom]->getPosicao() === "volante"){

                    if ( array_search($jogadorRandom, $convocados) === false )
                        break;
               }
                
            }

            $time->setJogador($jogadores[$jogadorRandom]);
            $convocados[] = $jogadorRandom;
        }



        //meia
        for($i = 0; $i < 2; $i++){
            $jogadorRandom = -1;
            while ( true ) {
                $jogadorRandom = ''.rand(0, $total);

               if($jogadores[$jogadorRandom]->getPosicao() === "meia"){

                    if ( array_search($jogadorRandom, $convocados) === false )
                        break;
               }
                
            }

            $time->setJogador($jogadores[$jogadorRandom]);
            $convocados[] = $jogadorRandom;
        }



        //atacante
        for($i = 0; $i < 2; $i++){
            $jogadorRandom = -1;
            while ( true ) {
                $jogadorRandom = ''.rand(0, $total);

               if($jogadores[$jogadorRandom]->getPosicao() === "atacante"){

                    if ( array_search($jogadorRandom, $convocados) === false )
                        break;
               }
                
            }

            $time->setJogador($jogadores[$jogadorRandom]);
            $convocados[] = $jogadorRandom;
        }

         //zagueiro
        for($i = 0; $i < 2; $i++){
            $jogadorRandom = -1;
            while ( true ) {
                $jogadorRandom = ''.rand(0, $total);

               if($jogadores[$jogadorRandom]->getPosicao() === "zagueiro"){

                    if ( array_search($jogadorRandom, $convocados) === false )
                        break;
               }
                
            }

            $time->setJogador($jogadores[$jogadorRandom]);
            $convocados[] = $jogadorRandom;
        }

         //lateral
        for($i = 0; $i < 2; $i++){
            $jogadorRandom = -1;
            while ( true ) {
                $jogadorRandom = ''.rand(0, $total);

               if($jogadores[$jogadorRandom]->getPosicao() === "lateral"){

                    if ( array_search($jogadorRandom, $convocados) === false )
                        break;
               }
                
            }

            $time->setJogador($jogadores[$jogadorRandom]);
            $convocados[] = $jogadorRandom;
        }

        $time->calcularNota();

}

function selecionarTimesCruzar(Populacao $populacao)
{
    $somaNotas = 0.0;
    $acumulado = 0.0;
    $trechos = [];
    $selecionados = [];

    //Organiza as notas dos times em trechos dinâmicamente.
    foreach ($populacao->getTimes() as $index => $time) {
        $trechos[$index] = ($acumulado += $time->getNota());

        //soma as notas.
        $somaNotas += $time->getNota();
    }


    for ($i = 0; $i < 2; $i++) { // seleciona dois times
        $trechoSorteado = rand(0, $somaNotas);

        //Procura o time que se enquadra no trecho sorteado.
        foreach ($trechos as $index => $valorTrecho) {
            if ($trechoSorteado < $valorTrecho) {

                $selecionados[] = $populacao->getTimes()[$index];
                break;
            }
        }
    }
    return $selecionados;
}

function cruzarMutarTime(array $selecionados, Populacao $descendentes, array $jogadores, array $pesos )
{

    //funde os elementos de um ou mais arrays de forma que os elementos de um são colocados no final do array anterior. Retorna o array resultante da fusão. - recebe metade
    $filho1 = array_merge_recursive(
        $selecionados[0]->getMetadeJogadores(true),
        $selecionados[1]->getMetadeJogadores(false)
    );

    $filho2 = array_merge_recursive(
        $selecionados[1]->getMetadeJogadores(true),
        $selecionados[0]->getMetadeJogadores(false)
    );

    $filho1 = fazerMutacao($filho1, $jogadores);
    $filho2 = fazerMutacao($filho2, $jogadores);

    $time1 = new Time($pesos);
    foreach ($filho1 as $filho) {
        $time1->setJogador($filho);
    }
    
    $time1->calcularNota();
  

    $time2 = new Time($pesos);
    foreach ($filho2 as $filho) {
        $time2->setJogador($filho);
    }
    $time2->calcularNota();

    $descendentes->setTime($time1);
    $descendentes->setTime($time2);

}


/**
 * Decide se a mutação será feita ou não, e faz a mesma.
 */
function fazerMutacao(array $time, array $jogadores)
{
    //print_r($time);

  
    $numero = rand(0, 21);

    //não mutou
    if (in_array($jogadores[$numero], $time)) {
        return $time;
    }
    
    foreach ($time as $index => $jogador) {
        if($jogador->getPosicao() === $jogadores[$numero]->getPosicao()){

            $time[$index] = $jogadores[$numero];
            break;
        }
    }

    return $time;
}
