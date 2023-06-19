<?php
//-> atribuição por referencia

$test1 = 1;
$test2 = &$test1; //-> atribuindo o valor ao valor de referencia ou seja compartilham o mesmmo endereço de memoria
$test2 = 3;
echo "{$test2} e agora esse é o teste2 {$test1}";
