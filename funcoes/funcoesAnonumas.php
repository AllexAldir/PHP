<?php
//-> declaração de função anonima:

$testeFunctions = function ($num1, $num2) {
	print_r($num1 + $num2);
};

$testeFunctions(5, 8);


//-> Passando função com parâmetro:

$recebeFuncao = function ($x, $y, string $operacao, $funcao) {
	print_r(
		"Teste operação matemática {$x} {$operacao} {$y}"
	);

	$funcao();
};


$sayHello = function () {
	echo 'Hello';
};

$recebeFuncao(5, 5, '+', $sayHello);
