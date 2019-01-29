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
        echo "Terça-feira";
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
        echo "Sábado";
        break;
    default:
        echo "Valor Inválido";   
}      

Echo "<br> if/else <br>";

if ($dia == 1) {
    echo "Domingo";
} elseif ($dia == 2) {
    echo "Segunda-feira";
} elseif ($dia == 3) {
    echo "Terça-feira";
} elseif ($dia == 4) {
    echo "Quarta-feira";
} elseif ($dia == 5) {
    echo "Quinta-feira";
} elseif ($dia == 6) {
    echo "Sexta-feira";
} elseif ($dia == 7) {
    echo "Sábado";
} else {
    echo "Valor Inválido";
}