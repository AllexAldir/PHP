<?php

//-> exemplo de forma recursiva:


function recursiva(int $num)
{
  $totalSoma = 0;

  for (; $num >= 1; $num--) {
    $totalSoma += $num;
  }

  echo $totalSoma;
}

// recursiva(5);

//-> com condição de parada:

function condicao(int $num)
{
  return $num === 1 ? 1 : $num + condicao($num - 1);//-> operação ternária
};

// condicao(5);

function condicao2(int $num)
{
  if ($num === 1) {
    return $num;
  }

  return $num + condicao2($num - 1); //-> chamando a própria função
};

echo condicao2(5);
