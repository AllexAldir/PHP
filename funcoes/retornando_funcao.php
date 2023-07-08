<?php

//-> Uma função que retorna outra função:

function retorna1($x)
{
  return function ($y) use ($x) //-> indica usará o valor de x
  {
    return $x + $y;
  };
}

echo retorna1(5)(5); //-> primeiro passa o primeiro valor x e depois o valor y que é retornado uma função com o resultado
//-> pode-se utizar como separa o algoritmo:

$dados = retorna1(6);
echo $dados(5);