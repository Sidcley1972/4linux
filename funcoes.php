<?php
/*
include 'tabuada.php';

echo "numero dentro do php funcoes = $numero";
*/

echo "<h1> Função anônima </h1>";

$funcao = function ($texto){echo $texto;};

var_dump($funcao);

$nome = 'Sidcley';

function exibirNome($nome){
	echo "<h1> Nome </h1>";
	echo "meu nome é $nome";
	echo "<br>";

}


exibirNome($nome);

exibirNome('Carvalho');


$fatorial = function ($fat){

	global $original;
	$original = $fat;
	$resul = 1;
		for($i = $fat; $i >= 1; $i--){
			$resul *= $fat; 
			$fat--;
		}
	return $resul;
};

$numeros = [1,2,3,4,5];
$fatoriais = array_map($fatorial, $numeros);

echo "<h1> Função anônima Fatorial </h1>";
print_r($fatoriais);


function exibirNomeSemParm(){
	//global $nome;
	$nome = $GLOBALS['nome'] . ' de Carvalho';
	echo "<h1> $nome </h1>";
}

exibirNomeSemParm();

echo $nome;

function soma($a , $b) {
	echo "<h1> soma </h1>";
	echo "Resultado = " . $a + $b;
}

soma(2,3);

function calcularTotal($preco , $qtd = 1) {
	echo "<h1> Total </h1>";
	$resultado = $preco * $qtd;
	echo "Resultado = " . $resultado;
	return $resultado;
}

calcularTotal(2,2);


$resultado = calcularTotal(3,2);
echo "<br>";
echo "<h1> Preço </h1>";
echo $resultado;

/*
function cube($n)
{
    return($n * $n * $n);
}

$a = array(1, 2, 3, 4, 5);
$b = array_map("cube", $a);
print_r($b);
*/


