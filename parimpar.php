<style>
body {
  background-color: lightblue;
}

h2 {
  color: black;
  text-align: center;
}

p {
  font-family: verdana;
  font-size: 50px;
}

</style>

<form action="parimpar.php" method="post">
	Número 1:<input type="text" name="num1"><br>
	<input type="submit" value="Verificar">
</form>
<?php

//$operacao  = null;


$num1      = ($_POST['num1']) ?? null;
$resultado = null;


print_r($_POST);

echo $num1%2;

if ($num1 % 2 == 0) {
    $resultado = "Número Par";
} else
{
    $resultado =  "Número Ímpar";
}

if ($_POST):

?>

<h2>Resultado Operação:<?=$resultado?></h2>

<?php
endif;
?>