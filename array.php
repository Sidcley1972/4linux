<?php
echo "<pre>";

echo "Teste Array Simples <br>";
$dias_da_semana = array('Domingo'
						,'Segunda-feira'
						,'Terça-feira'
						,'Quarta-feira'
						,'Quinta-feira'
						,'Sexta-feira'
						,'Sábado');

echo "Imprindo Echo <br>";

echo $dias_da_semana[0] . "<br>"; 
echo $dias_da_semana[1] . "<br>";
echo $dias_da_semana[2] . "<br>";
echo $dias_da_semana[3] . "<br>";
echo $dias_da_semana[4] . "<br>";
echo $dias_da_semana[5].  "<br>";
echo $dias_da_semana[6] . "<br>";

echo "Imprindo Print_r <br>";
print_r($dias_da_semana);

echo "<br>";

echo "Imprindo Var_dump <br>";
var_dump($dias_da_semana);

echo "<br>";

echo "For Each <br>";

foreach ($dias_da_semana as $dia) {
	echo "$dia" . "<br>";
}

echo "<br>";

echo "For Each outra sintax <br>";

foreach ($dias_da_semana as $key => $dia) {
	echo "$key --> $dia" . "<br>";
}

echo "</pre>";