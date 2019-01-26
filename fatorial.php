<br><br>
<h1> Fatorial </h1>
<form method="post" action="fatorial.php">
<input type="text" name="fat"><br>
<input type="submit" name="aa" value="enviar">
</form>

<?php


$fat = $_POST['fat'];
$original = $fat;
$resul = 1;
	for($i = $fat; $i >= 1; $i--){

		//echo "i = $i <br>";
		//echo "fat Antes = $fat <br>";
		//echo "resul antes = $resul <br>";
		$resul *= $fat; 
		//echo "resul depois = $resul <br>";
		$fat--;
		//echo "fat depois = $fat <br>";			
	}

echo "Fatorial de $original = ".$resul."<br>";

?>
