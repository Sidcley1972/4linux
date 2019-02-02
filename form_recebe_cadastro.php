<?php

print_r($_POST);

print_r($_FILES);

$nome     = $_POST['nome'];
$email    = $_POST['email'];
$senha    = $_POST['senha'];
$senhacf  = $_POST['senha-confirmacao'];
$arquivo  = $_FILES['arquivo'];

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

if (array_key_exists('arquivo', $arquivo)) {
	# code...
} else {
	echo "Campo Arquivo Vazio <br>";
}


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