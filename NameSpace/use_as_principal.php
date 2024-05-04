<?php

namespace TesteUse;
const constante = 'Teste cosnt';
const exemplo = 'Ok';

function soma(int $p_number1, int $p_number2)
{
  return $p_number1 + $p_number2;
}

class use_as_principal
{
  private $nomeGereal = 'teste';

  public function returnName()
  {
    echo __NAMESPACE__ . __CLASS__ . $this->nomeGereal;
  }
}
