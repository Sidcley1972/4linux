<?php
echo "<pre>";

echo "Mês Echo Array <br>";
$meses = array(
				'janeiro',
				'fevereiro',
				'março',
				'abril',
				'maio',
				'junho',
				'julho',
				'agosto',
				'setembro',
				'outubro',
				'novembro',
				'dezembro',
			);

echo $meses[0] . "<br>";
echo $meses[1] . "<br>";
echo $meses[2] . "<br>";
echo $meses[3] . "<br>";
echo $meses[4] . "<br>";
echo $meses[5] . "<br>";
echo $meses[6] . "<br>";
echo $meses[7] . "<br>";
echo $meses[8] . "<br>";
echo $meses[9] . "<br>";
echo $meses[10] . "<br>";
echo $meses[11] . "<br>";

echo "Mês Echo while <br>";

$contador = 0;

while ($contador <= 11){
	echo "$contador => $meses[$contador]" . "<br>";
	$contador++;
}

echo "Mês Echo For plus <br>";


for ($contador = 0 ; $contador <= 11 ; $contador++){
	echo "$contador => $meses[$contador]" . "<br>";
}

echo "Mês Echo do while <br>";

$contador = 0;

do {
	echo "$contador => $meses[$contador]" . "<br>";
	$contador++;
} while ($contador <=11);

echo "<pre>";
