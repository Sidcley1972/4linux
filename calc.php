
<link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
<script src="/bootstrap/js/bootstrap.min.js"></script>

<form action="calc.php" method="post">
  <head>
  <title>Calculadora</title>
  </head>

  <div class="form-group">
    <label for="num1">Número 1:</label>
    <input type="text" class="form-control" name="num1" id="num1">
  </div>


  <div class="form-group">
    <label for="num1">Número 2:</label>
    <input type="text" class="form-control" name="num2" id="num2">
  </div>

	Operacao:
 	<select name="operador">
  		<option value="+">Adição</option>
  		<option value="-">Subtração</option>
  		<option value="*">Multiplicação</option>
  		<option value="/">Divisão</option>
	</select> 
	<input type="submit" class="btn btn-primary" value="Calcular">
  </form>



<?php

//$operacao  = null;

function exibirMensagem($mensagem, $titulo, $tamanho, $tipo){

  echo "<div class=\"alert alert-$tipo\" role=\"alert\">
  <h$tamanho class=\"alert-heading\">Resultado da Operação!</h$tamanho>
    $mensagem
    </div>";
}

function executarCalculo($operacao,$num1, $num2){
  //$resultado = $num1 .$operador . $num2;
  //$resultado = eval("$num1 $operacao $num2".';');
  $exec = "$num1" . "$operacao" . "$num2";
  echo "exec antes do val = " . eval("\$resultado = \"$exec\";");  
  //eval("$resultado = "."$num1" . "$operacao" . "$num2" . ';');
  //eval("$resultado = " . "$num1" . "$operacao" . "$num2" . ';');
  eval("\$resultado = \"$exec\";");
  echo "exec depois do val = " . eval("\$resultado = \"$exec\";");
  eval("$exec = 2+2;");
  echo "exec forçado = $exec";
  eval('$resultado = '.$exec.';');
  
  //eval('$resultado = '.'2' . '+' . '2' . ';');
  //echo "operacao = $operacao <br>";
  //echo "operacao = $num1 <br>";
  //echo "operacao = $num2 <br>";
  echo "<br> imprimir resultado <br>";
  var_dump($resultado);
 return $resultado; 
}


$num1      = ($_POST['num1']) ?? null;
$num2      = ($_POST['num2']) ?? null;
$operacao  = ($_POST['operador']) ?? null;
$resultado = null;


//print_r($_POST);

/*
if ($operacao == '+') {
    $resultado =  $num1 + $num2;
} elseif ($operacao == '-') {
    $resultado =  $num1 - $num2;
} elseif ($operacao == '*') {
    $resultado =  $num1 * $num2;
} elseif ($operacao == '/') {
    $resultado =  $num1 / $num2;
}
*/


if ($_POST):
/*
?>

<h1>Resultado operação:<?=$resultado?></h1>

<?php
*/
$resultado = executarCalculo($operacao,$num1, $num2);
exibirMensagem("Resultado operação($operacao) = $resultado", "Calculadora", 4, "success");

endif;
?>

