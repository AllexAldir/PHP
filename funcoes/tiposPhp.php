<?php
//-> declarando tipos para o PHP

function tipagemPhp(int $num1, int $num2)
{
	echo $num1 + $num2;
}

tipagemPhp(5, 5);


//-> tipos de retorno conversão:

function retornaTipagem($num1, $num2): int
{
	return $num1 + $num2;
}
retornaTipagem(1, 6);
