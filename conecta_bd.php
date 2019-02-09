
<link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
<script src="/bootstrap/js/bootstrap.min.js"></script>

<?php

function exibirMensagem($mensagem, $titulo, $tamanho, $tipo){

  echo "<div class=\"alert alert-$tipo\" role=\"alert\">
  <h$tamanho class=\"alert-heading\">$titulo</h$tamanho>
    $mensagem
    </div>";
}
function conectar(){
	$configDB = require 'db.config.local.php';

	$conexao = pg_connect("host={$configDB['host']}  port={$configDB['port']} dbname={$configDB['dbname']} user={$configDB['user']} password={$configDB['password']}");

	return $conexao;
}

function inserirUsuario($nome, $email, $senha){
echo $nome;
echo "<br>";
echo $email;
echo "<br>";
echo $senha;
echo "<br>";

	$conexao = conectar();
var_dump($conexao);	
echo "<br>";

	$insert = "INSERT INTO usuarios (nome, email, senha)  
	VALUES ('$nome', '$email', '$senha')";
	var_dump($insert);
	$retorno = pg_exec($conexao, $insert);
	if ($retorno === true) {
		exibirMensagem("Sucesso na gravação", "Gravação BD", 4, "alert");
	}
}




//inserirUsuario("teste manual", "teste@uol.com", "122344");
