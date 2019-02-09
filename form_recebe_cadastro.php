<?php
require"formulario_html.html";
echo "<pre>";
echo "Número aleatório <br>";
$cod = rand(99999554967,99999999999);
echo "$cod <br>";
echo substr($cod, 2, -3);
echo "<br>";

print_r($_POST);

echo "<br>";

print_r($_FILES);


$nome     = $_POST['nome'];
$email    = $_POST['email'];
$senha    = $_POST['senha'];
$senhacf  = $_POST['senha-confirmacao'];
$arquivo  = $_FILES['arquivo'];

function exibirErro($mensagem){

	echo "<div class=\"alert alert-danger\" role=\"alert\">
	<h4 class=\"alert-heading\">Muito Bem!</h4>
    $mensagem
    </div>";
}


echo "teste isset";
echo "<br>";
echo($arquivo);

//if isset($arquivo) {
//	echo "arquivo <br>";
//	echo $arquivo;
//}

if ($_FILES['arquivo']['size'] != 0) {
	echo " testar arquivo vazio <br>";
	echo $_FILES['arquivo']['name'];
	echo "<br>";
	echo "arquivo existe <br>";
	$msg = "arquivo existe";
	exibirErro($msg);
}

if (array_key_exists('arquivo', $_FILES)) {
	echo "Campo Arquivo Existe array <br>";
} else {
	echo "Campo Arquivo Vazio array <br>";
}

$campos = array_keys($_POST);

foreach ($campos as $campo) {
	if (empty($_POST[$campo])){
		echo "$campo é um campo obrigatório foreach <br>";
	}
}
print_r($_POST);
$dados = array_map('strtoupper', $_POST);

$dados = array_map('strip_tags', $_POST);
print_r($_POST);

echo "teste arry map para executar uma função";
echo "<br>";
print_r($dados);
echo "<br>";

if (empty($nome)) {
	echo "Campo Nome Vazio <br>";
}
if (empty($email)) {
	echo "Campo Email Vazio <br>";
}
if (empty($senha)) {
	echo "Campo Senha Vazio <br>";
}
if (empty($senhacf)) {
	echo "Campo Senha Conf Vazio <br>";
}

if (array_key_exists('arquivo', $_FILES)) {
	echo "Campo Arquivo Existe <br>";
} else {
	echo "Campo Arquivo Vazio <br>";
}

echo "<br>";

/*


echo "imprimindo por print_r";
echo "<br>";
print_r($_POST);


$nome  = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$foto  = $_FILES['arquivo'];

echo "<br>";

echo "imprimindo por echo";
echo "<br>";
echo $nome;
echo "<br>";
echo $email;
echo "<br>";
echo $senha;
echo "<br>";
echo $foto;
*/
