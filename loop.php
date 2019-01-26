<?php
echo "<pre>";

echo "Loop Continue <br>";


for ($contador = 0 ; $contador <= 10 ; $contador++)
{
	
	if ($contador % 2 != 0 ) 
		{
			continue;
		}

	echo "Números Pares => $contador" . "<br>";
}

echo "Loop break <br>";

for ($contador = 0 ; $contador <= 10 ; $contador++)
{
	
	if ($contador == 5 ) 
		{
			break;
		}

	echo "Números => $contador" . "<br>";
}

echo "<pre>";