
function somar($valorA, $valorB){
	$soma = $valorA + $valorB;
	return $soma;
}


function olaMundo($a, $b, $c){

	for($i = $a; $i <= $b; $i++){	
		echo '<p>Bem vindo .... '.$c. '</p>'; 
	}
	echo 'Valor total = '. somar($a, $b);
}

olaMundo(1,3,"Daniel");