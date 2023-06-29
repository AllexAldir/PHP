<?php
//Implementando while e do while...

$contagem = 10;

while ($contagem > 0) {
	echo $contagem-- . "\r\n";
};

do {
	echo $contagem-- . "\r\n";
} while ($contagem > 0); //-> primeiro irá fazer
