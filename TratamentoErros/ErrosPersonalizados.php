<?php

/*

Erros personalizados gerando excessões

*/

class FaixaEtariaException extends Exception
{
  public function __construct(string $message, $code = 0, $previus = null)
  {
    //echo "Erro personalizado: $message";
    parent::__construct($message, $code, $previus); //Se refencia ao Exception
  }
}

function calculaIdade($idade)
{
  if ($idade < 18) {
    throw new FaixaEtariaException('Menor que 18');
  }
  if ($idade >= 70) {
    throw new FaixaEtariaException('Já pode se aposentar!');
  }
  return 70 - $idade;
}

$idades = [1, 56, 70];

foreach ($idades as $i) {
  try {
    $tempoRestante = calculaIdade($i);
    echo "Tempo Restante: $tempoRestante";
  } catch (FaixaEtariaException $e) {
    echo "ERROR: {$e->getMessage()} || {$e->getCode()}";
  }
}
