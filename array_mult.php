<?php
echo "<pre>";


echo "Mês Array <br>";
$meses = array(
				'janeiro',
				'fevereiro',
				'março',
				'abril',
				'maio',
				'junho',
				'julho',
				'agosto',
				'setembro',
				'novembro',
				'dezembro',
			);

echo $meses[0] . "<br>";
echo $meses[1] . "<br>";
echo $meses[2] . "<br>";
echo $meses[3] . "<br>";
echo $meses[4] . "<br>";
echo $meses[5] . "<br>";
echo $meses[6] . "<br>";
echo $meses[7] . "<br>";
echo $meses[8] . "<br>";
echo $meses[9] . "<br>";
echo $meses[10] . "<br>";
echo $meses[11] . "<br>";

echo "For Each Mes outra sintax <br>";

foreach ($meses as $key => $mes) {
	echo "$key --> $mes" . "<br>";
}

echo "<br>";

echo "Teste Array Aluno <br>";

$alunos = [
	[
		'id' 	=> 1,
		'nome'	=> 'Ricardo'
	],
	[
		'id' 	=> 2,
		'nome'	=> 'Wesley'
	]
];

$alunos[]  = ['id'=>3,'nome'=>'Felipe'];
$alunos[] = ['id'=>4,'nome'=>'Rafael'];

echo "Imprindo array Echo Alunos inicio <br>";

echo is_array($alunos) ? 'Array' : 'not an Array';

echo "<br>";


echo $alunos[0]{'id'};
echo "<br>";
echo $alunos[0]{'nome'};
echo "<br>";

echo $alunos[1]{'id'};
echo "<br>";
echo $alunos[1]{'nome'};
echo "<br>";

echo "Imprindo array Echo Alunos fim <br>";


echo "Imprindo Print_r Alunos <br>";
print_r($alunos);

echo "<br>";

echo "Imprindo Var_dump <br>";
var_dump($alunos);

echo "<br>";

echo "foreach teste <br>";
foreach ($alunos as $aluno ) {
//	echo "<h3>{$aluno['id']} - {$aluno['nome']}";
	echo $aluno['id'] . "-" . $aluno['nome'];
    echo "<br>";
}


echo "</pre>";