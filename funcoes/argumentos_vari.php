<?php

function Soma($a, $b)
{
	return $a + $b;
}


//echo Soma(1, 5);

//-> parâmetros passados dentro de um array:

function somaCompleta(...$arryNumbers)
{
	$soma = 0;
	foreach ($arryNumbers as $valores) {
		$soma += $valores;
	}

	return $soma;
}

//echo somaCompleta(12, 2, 5, 65);//-> passa como array

function testeFuncao($titular, ...$array) //-> O primeiro não entra no array
{
	echo "Esse é titular: {$titular}  \r\n";
	if ($array) {
		foreach ($array as $valores) {
			echo $valores;
		}
	}
};
testeFuncao('Lucas', 5, 65, 6);
