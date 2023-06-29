<?php

$matrixTreino = [
	[
		'nome1' => 'Carlos',
		'idade' => 25,
		'nome2' => 'Lucas',
		'idade' => 78,
		'nome3' => 'Thiago',
		'idade4' => 26,
		'nome' => 'Emanuel',
		'idade' => 7,
	]
];


foreach ($matrixTreino as $array2) {
	foreach ($array2 as $chave) {
		echo $chave;
	};
};
