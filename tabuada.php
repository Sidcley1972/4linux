<?php
echo "<pre>";

$numero = ($_GET['numero']) ?? 1;
$numero = (int) $numero;

echo $numero;
echo "<br>";


for ($count=0; $count <= 10 ; $count++) { 
	echo "$count x $numero =";
	$resultado = $numero * $count;
	echo " $resultado <br>";
}

echo "</pre>";