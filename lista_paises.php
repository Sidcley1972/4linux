<?php

$estados = file_get_contents ('http://www.geonames.org/childrenJSON?geonameId=3469034');
$estados = json_decode($estados,true);

echo "<pre>";

//print_r($estados);

/*
echo $paises['geonames'][0]['toponymName'];
	
echo " - População = ";
	
echo $paises['geonames'][0]['population'];
	
echo " - Sigla = ";
echo $estados['geonames'][0]['adminCodes1']['ISO3166_2'];

echo "<br>";
*/	


for ($contador = 0 ; $contador < $estados['totalResultsCount'] ; $contador++){
	
echo $estados['geonames'][$contador]['toponymName'];
	
echo " - População = ";
	
echo $estados['geonames'][$contador]['population'];

echo " - Sigla = ";

echo $estados['geonames'][$contador]['adminCodes1']['ISO3166_2'];
	
echo "<br>";

}

echo "<br>outro jeito de fazer <br>";

foreach ($estados['geonames'] as $estado ) {

	echo $estado['toponymName'] . " - População = " . $estado['population'];

	echo " - Sigla = " . $estado['adminCodes1']['ISO3166_2'];
    
    echo "<br>";

    //print_r($estado['adminCodes1']);
    //die;
    
}




