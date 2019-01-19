<?php

$var1 = 1;
$var2 = 2;
$var3 = (float) 3;
$var4 = 4;
$nome = "php";

$expo = $var1 ** $var1;
$soma = $var1 + $var3;
$multi = $var1 * $var2;
$sub = $var4 - $var2;
$div = $var4 / $var1;

echo "Operdores normais";

echo "expo = $expo" . "<br>";
echo "soma = $soma" . "<br>";
echo "multi = ";
echo $multi;
echo "<br>";
echo "sub = ";
echo $sub;
echo "<br>";
echo "div = ";
echo $div;
echo "<br>";


$incr = 1;

echo "Operadores outros <br>";
echo "incr =  " . $incr  . "<br>";
echo "++incr =  " . ++$incr  . "<br>";
$incr = 1;
echo "incr++ =  " . $incr++  . "<br>";

echo "Verdadeiro ou falso <br>";

$var1 = 1;
$var2 = '1';


echo "var1 == var2 - "; 
var_dump($var1 === $var2);  
echo "<br>";

echo "var1 == var1 - ";
var_dump($var1 == $var1); 
echo "<br>";

var_dump($var1 === $var2);
echo "<br>";
var_dump($var1 == $var1);
echo "<br>";
echo "$nome <br>";
echo "<br>";
	

$numero = 0;

if ($numero >0) {
	echo "positivo"; 
} elseif ($numero == 0) {
	echo "zero";
}
	else
{
	echo "negativo";
}


