<?php

for ($i = 0; $i <= 12; $i++) {
	echo "{$i} <br>";
};

// $teste = 0;

// for (; $teste <= 12; $i++) { //-> não necessariamente precisa do das 3 partes da estrutura do laço
// 	echo "{$teste} <br>";
// };

//Array
$arrayMes = [
	'Janeiro',
	'fevereiro',
	'março',
	'abril',
	'maio',
	'junho'
];

$arrayKeys = array_keys($arrayMes);

foreach ($arrayKeys as $val) {
	echo "{$val} com o Mês {$arrayMes[$val]} \r\n <br>";
};


/*
	Percorrendo uma matrix
*/

$matrix = [
	[
		"nome" => "teste",
		"idade" => 2
	],
	[
		"nome" => "teste2",
		"idade" => 7
	],
];

for ($i = 0; $i <= count($matrix); $i++) {
	for ($j = 0; $j <= count($matrix[$i]); $j++) {
		echo $matrix[$i][$j];
	}
}
