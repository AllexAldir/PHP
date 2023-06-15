<?php
//Verificar se o número é interio:
echo is_int(9) . '<br>';
echo var_dump(PHP_INT_MAX + 1) . '<br>';

$convercao = (float) 3;
echo var_dump($convercao) . '<br>';
$convercao2 = (int) 3.9;
echo var_dump($convercao2);


/*Operações com strings*/

echo '<p>Strings</p>';

var_dump(3 + "2"); // aqui nesse cenário soma pois o PHP identifica isso como uma soma

