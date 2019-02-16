
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
	// insert update delete
	$retorno = pg_exec($conexao, $insert);
	echo "retorno<br>";
	echo $retorno;
	//if ($retorno === true) {
		exibirMensagem("Sucesso na gravação", "Gravação BD", 4, "alert");
	//}
}

function retornaQuery($nome, $email, $senha){

	$conexao = conectar();
	var_dump($conexao);	


//	$result=pg_query($conexao, "SELECT * FROM usuarios where nome ='".$nome."'");
	$result=pg_query($conexao, "SELECT * FROM usuarios ");
  		if  (!$result) {
   			echo "NÃO EXECUTOU";
  		}
  		if (pg_num_rows($result) == 0) {
   			echo "0 REGISTROS";
  		}
  	else {
   		while ($row = pg_fetch_array($result)) {
		     //do stuff with $row
   			echo "<br>";
		   	echo "ID: ".$row["id"];
		   	echo "<br>";   	
		   	echo "Nome: ".$row["nome"];
		   	echo "<br>";   	
		   	echo "Email: ".$row["email"];
		   	echo "<br>";   	
		    echo "Senha: ".$row["senha"];
		   	echo "<br>";    
   }

$row = pg_fetch_all($result);
var_dump($row);
echo "<br>";
print_r($row);
  }
}
//inserirUsuario("teste manual", "teste@uol.com", "122344");
