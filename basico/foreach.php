<?php
//-> Utilizando o foreach

$diasDaSemana = [
	'segunda',
	'terça',
	'quarta',
	'quinta',
	'sexta',
	'sabado',
	'domingo',
];

$keysArray = array_keys($diasDaSemana);

foreach ($diasDaSemana as $valor) {
	//echo $valor;
};

//-> utilizando chaves nos arrays:

$diasDaSemana2 = [
	1 => 'segunda',
	'terça',
	'quarta',
	'quinta',
	'sexta',
	'sabado',
	'domingo',
];

foreach ($diasDaSemana2 as $chave => $valor) {
	//echo "Valor da chave {$chave} e o seu respectivo valor {$valor}  \r\n";
};

//-> Exemplo com matrix:

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

foreach ($matrix as $segunArray) {
	foreach($segunArray as $chaves => $valores){
		echo "chaves: {$chaves}{$valores}";
	};
};
