<?php 

	function sortear_Megasena(){
		$numeros = array();
		for($i = 0; $i < 6; $i++){
			$numero = rand(1,60);
			if( $i > 0 && in_array($numero, $numeros) )
				$i--;
			else
				$numeros[$i] = $numero;			
		}
		sort($numeros);
		return $numeros;
	}

	function imprimir_Megasena($numeros){
		echo "Os números sorteados são: ";
		for($i = 0; $i < 6; $i++){
			echo $numeros[$i]; 
			if( $i != 5)
				echo " - ";
		}
		echo "<br><br>";
	}
	function imprimir_Sorteio($numeros, $n){
		echo "Números escolhidos: ";
		for($i = 0; $i < $n; $i++){
			echo $numeros[$i];
			if( $i != $n-1)
				echo " - ";
		}
		echo "<br><br>";
	}

	function escolha_Usuario($numero_Usuario, $numeros_Sorteados, $n){
		$acerto = 0;
		for($i = 0; $i < 6; $i++){
			for($j = $i; $j < $n; $j++){
				if( $numero_Usuario[$j] == $numeros_Sorteados[$i] ){
					$acerto++;
				}
			}
		}
		return $acerto;
	}



	$sorteio = sortear_Megasena();
	$numeros_Usuario = array(3,15,23,45,56,58,10,21,7,18,25,33,31,42,47,48,51,59);
	$quantidade_numeros = count($numeros_Usuario);
	sort($numeros_Usuario);

	imprimir_Sorteio($numeros_Usuario, $quantidade_numeros);
	imprimir_Megasena($sorteio);

	echo '<br>ACERTOS = ' . escolha_Usuario($numeros_Usuario, $sorteio, $quantidade_numeros);

?> 