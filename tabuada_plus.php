<?php
echo "<pre>";

$numero = (int) 0;

//	echo $numero;
//	echo "<br>";


do {

	echo "<br>";
	echo "Tabuada do ";
	switch ($numero) {
		case '0':
			echo "Zero";
			break;
		case '1':
			echo "Um";
			break;
		case '2':
			echo "Dois";
			break;
		case '3':
			echo "Três";
			break;
		case '4':
			echo "Quatro";
			break;
		case '5':
			echo "Cinco";
			break;
		case '6':
			echo "Seis";
			break;
		case '7':
			echo "Sete";
			break;
		case '8':
			echo "Oito";
			break;
		case '9':
			echo "Nove";
			break;
		case '10':
			echo "Dez";
			break;
		default:
			echo "Inválido";
			break;
	}

	//echo $numero;
	echo "<br>";


for ($count=0; $count <= 10 ; $count++) 
	{ 
	
		echo "$count x $numero = ";
		$resultado = $numero * $count;
		//echo "$resultado <br>";
		echo "Resultado = " . str_pad($resultado, 2, '0', STR_PAD_LEFT) . "<br>";
	}

	$numero++;


} while ($numero <=10);

echo "</pre>";