<form action="calc.php" method="post">
	Número 1:<input type="text" name="num1"><br>
	Número 2:<input type="text" name="num2"><br>
	Operacao:
 	<select name="operador">
  		<option value="+">Adição</option>
  		<option value="-">Subtração</option>
  		<option value="*">Multiplicação</option>
  		<option value="/">Divisão</option>
	</select> 
	<input type="submit" value="Calcular">
</form>
<?php

//$operacao  = null;


$num1      = ($_POST['num1']) ?? null;
$num2      = ($_POST['num2']) ?? null;
$operacao  = ($_POST['operador']) ?? null;
$resultado = null;


print_r($_POST);


if ($operacao == '+') {
    $resultado =  $num1 + $num2;
} elseif ($operacao == '-') {
    $resultado =  $num1 - $num2;
} elseif ($operacao == '*') {
    $resultado =  $num1 * $num2;
} elseif ($operacao == '/') {
    $resultado =  $num1 / $num2;
}

if ($_POST):

?>

<h1>Resultado operação:<?=$resultado?></h1>

<?php
endif;
?>

