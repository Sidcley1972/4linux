<?php
$dia = (int) $_GET['dia'];

echo "switch Visual Studio <br>";

switch ($dia) {
    case 1:
        echo "Domingo";
        break;
    case 2:
        echo "Segunda-feira";
        break;
    case 3:
        echo "Ter�a-feira";
        break;
	case 4:
        echo "Quarta-feira";
        break;
    case 5:
        echo "Quinta-feira";
        break;
    case 6:
        echo "Sexta-feira";
        break;
    case 7:
        echo "S�bado";
        break;
    default:
        echo "Valor Inv�lido";   
}      

Echo "<br> if/else <br>";

if ($dia == 1) {
    echo "Domingo";
} elseif ($dia == 2) {
    echo "Segunda-feira";
} elseif ($dia == 3) {
    echo "Ter�a-feira";
} elseif ($dia == 4) {
    echo "Quarta-feira";
} elseif ($dia == 5) {
    echo "Quinta-feira";
} elseif ($dia == 6) {
    echo "Sexta-feira";
} elseif ($dia == 7) {
    echo "S�bado";
} else {
    echo "Valor Inv�lido";
}