<?php
$linguagem = 'PHP';

echo "<pre>";
echo "<h1> POST </h1>";
print_r($_POST);

echo "<h1> GET </h1>";
print_r($_GET);


echo "<h1> REQUEST </h1>";
print_r($_REQUEST);

echo "<h1> SERVER </h1>";
print_r($_SERVER);

echo "<h1> GLOBALS </h1>";
print_r($GLOBALS);

echo "<h1> FILES </h1>";
print_r($_FILES);

?>

<form method="post" enctype="multipart/form-data">
	numero :<input type="text" name="numero" id="numero"><br>
	arquivo : <input type="file" name="foto">
	<input type="submit" value="Calcular">
</form>
