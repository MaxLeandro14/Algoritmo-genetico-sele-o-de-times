<?php

//classes
require './classes/Jogador.php';
require './classes/Populacao.php';
require './classes/Pesos.php';
require './classes/Time.php';
require './helpers.php';



$dadosPopulacao = [
            0 =>
                ['nome' => "Wilson Rodrigues de Moura Júnior", 'posicao'=> "goleiro", 'passeIncompleto' => 100050, 'cartaoAmarelo' => 0, 'faltasCometidas' => 0, 'faltasSofridas' => 2, 'assistencia' => 0, 'gols' => 0, 'golsContra' => 0, 'saldoGols' => 0 , 'finalizacaoFora' => 5, 'finalizacaoDefendida'=> 3, 'desarmes' => 0, 'impedimento' => 0, 'golsSofrido' => 22, 'defesaDificil' => 17],
           1 =>
                ['nome' => "Aderbar Melo dos Santos Neto", 'posicao'=> "goleiro", 'passeIncompleto' => 75, 'cartaoAmarelo' => 0, 'faltasCometidas' => 1, 'faltasSofridas' => 0, 'assistencia' => 0, 'gols' => 0, 'golsContra' => 0, 'saldoGols' => 2 , 'finalizacaoFora' => 0, 'finalizacaoDefendida'=> 0, 'desarmes' => 3, 'impedimento' => 0, 'golsSofrido' => 13, 'defesaDificil' => 8],
          2 =>
                ['nome' => "Roger de Carvalho", 'posicao'=> "zagueiro", 'passeIncompleto' => 5, 'cartaoAmarelo' => 0, 'faltasCometidas' => 2, 'faltasSofridas' => 2, 'assistencia' => 0, 'gols' => 0, 'golsContra' => 0, 'saldoGols' => 3 , 'finalizacaoFora' => 0, 'finalizacaoDefendida'=> 0, 'desarmes' => 0, 'impedimento' => 0, 'golsSofrido' => 0, 'defesaDificil' => 0],
          3 =>
                ['nome' => "Felipe Melo de Carvalho", 'posicao'=> "zagueiro", 'passeIncompleto' => 19, 'cartaoAmarelo' => 2, 'faltasCometidas' => 4, 'faltasSofridas' => 4, 'assistencia' => 0, 'gols' => 0, 'golsContra' => 0, 'saldoGols' => 0 , 'finalizacaoFora' => 0, 'finalizacaoDefendida'=> 0, 'desarmes' => 0, 'impedimento' => 0, 'golsSofrido' => 0, 'defesaDificil' => 0],
          4 =>
                ['nome' => "Rodrigo Modesto da Silva Moledo", 'posicao'=> "zagueiro", 'passeIncompleto' => 15, 'cartaoAmarelo' => 1, 'faltasCometidas' => 4, 'faltasSofridas' => 8, 'assistencia' => 0, 'gols' => 1, 'golsContra' => 0, 'saldoGols' => 5 , 'finalizacaoFora' => 1, 'finalizacaoDefendida'=> 0, 'desarmes' => 0, 'impedimento' => 0, 'golsSofrido' => 0, 'defesaDificil' => 0],
          5 =>
                ['nome' => "David Braz de Oliveira Filho", 'posicao'=> "zagueiro", 'passeIncompleto' => 51, 'cartaoAmarelo' => 0, 'faltasCometidas' => 10, 'faltasSofridas' => 4, 'assistencia' => 0, 'gols' => 1, 'golsContra' => 0, 'saldoGols' => 3 , 'finalizacaoFora' => 5, 'finalizacaoDefendida'=> 2, 'desarmes' => 0, 'impedimento' => 0, 'golsSofrido' => 0, 'defesaDificil' => 0],
          6 =>
                ['nome' => "Douglas Moreira Fagundes", 'posicao'=> "volante", 'passeIncompleto' => 49, 'cartaoAmarelo' => 2, 'faltasCometidas' => 20, 'faltasSofridas' => 28, 'assistencia' => 0, 'gols' => 1, 'golsContra' => 0, 'saldoGols' => 0 , 'finalizacaoFora' => 7, 'finalizacaoDefendida'=> 4, 'desarmes' => 56, 'impedimento' => 0, 'golsSofrido' => 0, 'defesaDificil' => 0],
          7 =>
                ['nome' => "Jair Rodrigues Júnior", 'posicao'=> "volante", 'passeIncompleto' => 51, 'cartaoAmarelo' => 4, 'faltasCometidas' => 33, 'faltasSofridas' => 29, 'assistencia' => 2, 'gols' => 1, 'golsContra' => 0, 'saldoGols' => 0 , 'finalizacaoFora' => 5, 'finalizacaoDefendida'=> 0, 'desarmes' => 39, 'impedimento' => 0, 'golsSofrido' => 0, 'defesaDificil' => 0],
          8 =>
                ['nome' => "Pedro Raul Garay da Silva", 'posicao'=> "volante", 'passeIncompleto' => 63, 'cartaoAmarelo' => 1, 'faltasCometidas' => 19, 'faltasSofridas' => 16, 'assistencia' => 1, 'gols' => 2, 'golsContra' => 0, 'saldoGols' => 0 , 'finalizacaoFora' => 10, 'finalizacaoDefendida'=> 6, 'desarmes' => 5, 'impedimento' => 2, 'golsSofrido' => 0, 'defesaDificil' => 0],
          9 =>
                ['nome' => "Willian Souza Arão da Silva", 'posicao'=> "volante", 'passeIncompleto' => 53, 'cartaoAmarelo' => 2, 'faltasCometidas' => 16, 'faltasSofridas' => 5, 'assistencia' => 0, 'gols' => 0, 'golsContra' => 0, 'saldoGols' => 0 , 'finalizacaoFora' => 6, 'finalizacaoDefendida'=> 1, 'desarmes' => 30, 'impedimento' => 0, 'golsSofrido' => 0, 'defesaDificil' => 0],
          10 =>
                ['nome' => "Everton Augusto de Barros Ribeiro", 'posicao'=> "meia", 'passeIncompleto' => 101, 'cartaoAmarelo' => 2, 'faltasCometidas' => 15, 'faltasSofridas' => 24, 'assistencia' => 1.5, 'gols' => 3, 'golsContra' => 1, 'saldoGols' => 6 , 'finalizacaoFora' => 5, 'finalizacaoDefendida'=> 6, 'desarmes' => 0, 'impedimento' => 0, 'golsSofrido' => 0, 'defesaDificil' => 0],
         11 =>
                ['nome' => "Hudson Rodrigues dos Santos", 'posicao'=> "meia", 'passeIncompleto' => 44, 'cartaoAmarelo' => 0, 'faltasCometidas' => 20, 'faltasSofridas' => 7, 'assistencia' => 2, 'gols' => 0, 'golsContra' => 1, 'saldoGols' => 0 , 'finalizacaoFora' => 2, 'finalizacaoDefendida'=> 0, 'desarmes' => 0, 'impedimento' => 1, 'golsSofrido' => 0, 'defesaDificil' => 0],
         12 =>
                ['nome' => "Elias Mendes Trindade", 'posicao'=> "meia", 'passeIncompleto' => 21, 'cartaoAmarelo' => 1, 'faltasCometidas' => 8, 'faltasSofridas' => 3, 'assistencia' => 0, 'gols' => 0, 'golsContra' => 0, 'saldoGols' => 0 , 'finalizacaoFora' => 2, 'finalizacaoDefendida'=> 0, 'desarmes' => 0, 'impedimento' => 0, 'golsSofrido' => 0, 'defesaDificil' => 0],
         13 =>
                ['nome' => "Wellington Aparecido Martins", 'posicao'=> "meia", 'passeIncompleto' => 41, 'cartaoAmarelo' => 7, 'faltasCometidas' => 28, 'faltasSofridas' => 4, 'assistencia' => 0, 'gols' => 0, 'golsContra' => 0, 'saldoGols' => 0 , 'finalizacaoFora' => 2, 'finalizacaoDefendida'=> 1, 'desarmes' => 0, 'impedimento' => 0, 'golsSofrido' => 0, 'defesaDificil' => 0],
         14 =>
                ['nome' => "Rafael Augusto Sobis do Nascimento", 'posicao'=> "atacante", 'passeIncompleto' => 30, 'cartaoAmarelo' => 2, 'faltasCometidas' => 7, 'faltasSofridas' => 2, 'assistencia' => 0, 'gols' => 0, 'golsContra' => 0, 'saldoGols' => 0 , 'finalizacaoFora' => 10, 'finalizacaoDefendida'=> 5, 'desarmes' => 0, 'impedimento' => 1, 'golsSofrido' => 0, 'defesaDificil' => 0],
         15 =>
                ['nome' => "Rafael Martiniano de Miranda Moura", 'posicao'=> "atacante", 'passeIncompleto' => 45, 'cartaoAmarelo' => 1, 'faltasCometidas' => 19, 'faltasSofridas' => 6, 'assistencia' => 0, 'gols' => 4, 'golsContra' => 0, 'saldoGols' => 0 , 'finalizacaoFora' => 5, 'finalizacaoDefendida'=> 4, 'desarmes' => 4, 'impedimento' => 10, 'golsSofrido' => 0, 'defesaDificil' => 0],
          16 =>
                ['nome' => "Ytalo José Oliveira dos Santos", 'posicao'=> "atacante", 'passeIncompleto' => 16, 'cartaoAmarelo' => 0, 'faltasCometidas' => 9, 'faltasSofridas' => 5, 'assistencia' => 3, 'gols' => 0, 'golsContra' => 0, 'saldoGols' => 0 , 'finalizacaoFora' => 5, 'finalizacaoDefendida'=> 6, 'desarmes' => 9, 'impedimento' => 2, 'golsSofrido' => 0, 'defesaDificil' => 0],
          17 =>
                ['nome' => "Osvaldo Lourenço Filho", 'posicao'=> "atacante", 'passeIncompleto' => 78, 'cartaoAmarelo' => 2, 'faltasCometidas' => 8, 'faltasSofridas' => 13, 'assistencia' => 2, 'gols' => 1, 'golsContra' => 0, 'saldoGols' => 0 , 'finalizacaoFora' => 9, 'finalizacaoDefendida'=> 5, 'desarmes' => 19, 'impedimento' => 2, 'golsSofrido' => 0, 'defesaDificil' => 0],
          18 =>
                ['nome' => "Gilberto Oliveira Souza Júnior", 'posicao'=> "atacante", 'passeIncompleto' => 57, 'cartaoAmarelo' => 2, 'faltasCometidas' => 9, 'faltasSofridas' => 1, 'assistencia' => 1.5, 'gols' => 3, 'golsContra' => 14, 'saldoGols' => 0 , 'finalizacaoFora' => 12, 'finalizacaoDefendida'=> 14, 'desarmes' => 9, 'impedimento' => 5, 'golsSofrido' => 0, 'defesaDificil' => 0],
          19 =>
                ['nome' => "Marcos Rogério Ricci Lopes", 'posicao'=> "lateral", 'passeIncompleto' => 83, 'cartaoAmarelo' => 3, 'faltasCometidas' => 23, 'faltasSofridas' => 18, 'assistencia' => 0, 'gols' => 0, 'golsContra' => 1, 'saldoGols' => 0 , 'finalizacaoFora' => 7, 'finalizacaoDefendida'=> 2, 'desarmes' => 27, 'impedimento' => 2, 'golsSofrido' => 0, 'defesaDificil' => 0],
          20 =>
                ['nome' => "Carlos Emiliano Pereira", 'posicao'=> "lateral", 'passeIncompleto' => 71, 'cartaoAmarelo' => 1, 'faltasCometidas' => 17, 'faltasSofridas' => 10, 'assistencia' => 0, 'gols' => 0, 'golsContra' => 0, 'saldoGols' => 6 , 'finalizacaoFora' => 2, 'finalizacaoDefendida'=> 0, 'desarmes' => 17, 'impedimento' => 1, 'golsSofrido' => 0, 'defesaDificil' => 0],
         21 =>
                ['nome' => "Mariano Ferreira Filho", 'posicao'=> "lateral", 'passeIncompleto' => 72, 'cartaoAmarelo' => 1, 'faltasCometidas' => 8, 'faltasSofridas' => 5, 'assistencia' => 1, 'gols' => 0, 'golsContra' => 0, 'saldoGols' => 1 , 'finalizacaoFora' => 0, 'finalizacaoDefendida'=> 1, 'desarmes' => 18, 'impedimento' => 0, 'golsSofrido' => 0, 'defesaDificil' => 0],
          22 =>
                ['nome' => "Victor Ferraz Macedo", 'posicao'=> "lateral", 'passeIncompleto' => 37, 'cartaoAmarelo' => 1, 'faltasCometidas' => 3, 'faltasSofridas' => 1, 'assistencia' => 1, 'gols' => 0, 'golsContra' => 0, 'saldoGols' => 0 , 'finalizacaoFora' => 2, 'finalizacaoDefendida'=> 1, 'desarmes' => 4, 'impedimento' => 0, 'golsSofrido' => 0, 'defesaDificil' => 0]

        ];

$pesosDados = [
            0 =>
                ['posicao'=> 'Goleiro', 'passeIncompleto' => 1, 'cartaoAmarelo' => 5, 'faltasCometidas' => 6 , 'faltasSofridas' => 8, 'assistencia' => 4, 'gols' => 3, 'golsContra' => 5, 'saldoGols' => 5, 'finalizacaoFora' => 5, 'finalizacaoDefendida' => 1, 'desarmes' => 5, 'impedimento' => 4, 'golsSofrido' => 2, 'defesaDificil' => 10],
            1 =>
                ['posicao'=> 'Zagueiro','passeIncompleto' => 1, 'cartaoAmarelo' => 5, 'faltasCometidas' => 6 , 'faltasSofridas' => 8, 'assistencia' => 4, 'gols' => 3, 'golsContra' => 1, 'saldoGols' => 1, 'finalizacaoFora' => 1, 'finalizacaoDefendida' => 1, 'desarmes' => 5, 'impedimento' => 4, 'golsSofrido' => 2, 'defesaDificil' => 10],
            2 =>
                ['posicao'=> 'Lateral', 'passeIncompleto' => 1, 'cartaoAmarelo' => 5, 'faltasCometidas' => 6 , 'faltasSofridas' => 8, 'assistencia' => 4, 'gols' => 3, 'golsContra' => 10, 'saldoGols' => 5, 'finalizacaoFora' => 3, 'finalizacaoDefendida' => 7, 'desarmes' => 5, 'impedimento' => 4, 'golsSofrido' => 2, 'defesaDificil' => 10],
            3 =>
                ['posicao'=> 'Volante', 'passeIncompleto' => 1, 'cartaoAmarelo' => 5, 'faltasCometidas' => 6 , 'faltasSofridas' => 8, 'assistencia' => 4, 'gols' => 3, 'golsContra' => 10, 'saldoGols' => 5, 'finalizacaoFora' => 4, 'finalizacaoDefendida' => 1, 'desarmes' => 5, 'impedimento' => 4, 'golsSofrido' => 2, 'defesaDificil' => 10],
            4 =>
                ['posicao'=> 'Meia', 'passeIncompleto' => 1, 'cartaoAmarelo' => 5, 'faltasCometidas' => 6 , 'faltasSofridas' => 8, 'assistencia' => 4, 'gols' => 3, 'golsContra' => 10, 'saldoGols' => 5, 'finalizacaoFora' => 1, 'finalizacaoDefendida' => 1, 'desarmes' => 5, 'impedimento' => 4, 'golsSofrido' => 2, 'defesaDificil' => 10],
            5 =>
                ['posicao'=> 'Atacante', 'passeIncompleto' => 1, 'cartaoAmarelo' => 5, 'faltasCometidas' => 6 , 'faltasSofridas' => 8, 'assistencia' => 4, 'gols' => 3, 'golsContra' => 10, 'saldoGols' => 5, 'finalizacaoFora' => 4, 'finalizacaoDefendida' => 1, 'desarmes' => 5, 'impedimento' => 4, 'golsSofrido' => 2, 'defesaDificil' => 10]

        ];


	// instancio os pesos - dos dados
    $pesos = [];
    foreach ($pesosDados as $index => $peso) {

    		$nome = strtolower($peso['posicao']);
        $pesos[ $nome ] = new Pesos($peso['posicao'], $peso['passeIncompleto'], $peso['cartaoAmarelo'], $peso['faltasCometidas'], $peso['faltasSofridas'], $peso['assistencia'], $peso['gols'], $peso['golsContra'], $peso['saldoGols'], $peso['finalizacaoFora'], $peso['finalizacaoDefendida'], $peso['desarmes'], $peso['impedimento'], $peso['golsSofrido'], $peso['defesaDificil']);
    }

 

	// instancio os jogadores - dos dados
    $jogadores = [];
    foreach ($dadosPopulacao as $index => $jogador) {

            $aux = new Jogador($jogador['nome'], $jogador['posicao'], $jogador['passeIncompleto'], $jogador['cartaoAmarelo'], $jogador['faltasCometidas'], $jogador['faltasSofridas'], $jogador['assistencia'], $jogador['gols'], $jogador['golsContra'], $jogador['saldoGols'], $jogador['finalizacaoFora'], $jogador['finalizacaoDefendida'], $jogador['desarmes'], $jogador['impedimento'], $jogador['golsSofrido'], $jogador['defesaDificil']);

            $aux->calcularNota($pesos[$jogador['posicao']]);
  					$jogadores[] = $aux;
    }


    //Montagem dos times

    $populacao = new Populacao();
    for ($i = 0; $i < 100 ; $i++) {
        $time = new Time($pesos);
        formarTime($jogadores, $time);
        $populacao->setTime($time);
    }


		///

		for ($i = 0; $i < 5000; $i++) {
		    $descendentes = new Populacao();
		    $contFilhos = count($populacao->getTimes()) / 2;

		    

		    while ($contFilhos > 0) {

		        //Selecionar times pra cruzamento (Roleta)
		    	$selecionados = selecionarTimesCruzar($populacao);

		        //Faz o cruzamento e a mutação..
		      cruzarMutarTime($selecionados, $descendentes, $jogadores, $pesos);
		      $contFilhos--;
		    }
		    //Adiciona os descendentes na População,
		    foreach ($descendentes->getTimes() as $time)
		        $populacao->setTime($time);
		    $populacao->ordenarPorNota(true);
		    $populacao->descartar100Piores();
		}

		$time = $populacao->getTimes()[99];
	
		$dadosRetornar['notaTime'] = $time->getNota();


		foreach ($time->getJogadores() as $i => $jogador){
			 $dadosRetornar['jogadores'][] = [
			 		'nome' => $jogador->getNome(),
          'nota' => $jogador->getNota()
			 ];
		}


		$dadosRetornar['tempoProcessamento'] = (mktime() - $_SERVER['REQUEST_TIME']);
		echo json_encode($dadosRetornar);
		exit();
?>
