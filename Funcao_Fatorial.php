<?php

function calculaFatorial($fat){

	
	global $original;
	$original = $fat;
	$resul = 1;
		for($i = $fat; $i >= 1; $i--){
			$resul *= $fat; 
			$fat--;
		}
	return $resul;
}

$fatorial = calculaFatorial(5);

echo "Fatorial de $original = ".$fatorial."<br>";


