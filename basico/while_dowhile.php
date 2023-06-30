<?php
//Implementando while e do while...

$contagem = 10;

while ($contagem > 0) {
	echo $contagem-- . "\r\n";
};

do {
	echo $contagem-- . "\r\n";
} while ($contagem > 0); //-> primeiro irá fazer


$matrix = [
	[1, 2, 3, 4, 5],
	[6, 7, 8, 9, 10],
];


foreach ($matrix as $arrSecu) {
	foreach ($arrSecu as $valor) {
		echo "{$valor} \r\n";
	};
};
