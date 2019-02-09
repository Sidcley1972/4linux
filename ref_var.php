<?php

$a = 1;
$b = &$a; // a e b passam a ser a mesma variável
$a = 2;

define('NOME_APLICACAO','4linux');

echo "a = $a";
echo "<br>";
echo "b = $b";
echo "<br>";

function adicionarSobrenome(&$nome) {
	$nome .= ' de carvalho';
}

$texto = 'Sidcley';

adicionarSobrenome($texto);
echo $texto;

echo "<br>";
echo NOME_APLICACAO;
