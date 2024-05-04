<?php

namespace ImportFile;

function soma($p_number1, $p_number2)
{
  return $p_number1 . $p_number2; 
}

require_once('use_as_principal.php'); //Importei o arquivo uma vez

use const \TesteUse\constante; //Utilizando a constante do outro arquivo

use \TesteUse as ct; //Acessando o NameSpace com alias

echo constante;
echo ct\exemplo;
echo soma(3,4);

use function \TesteUse\soma as somaReal; //Acessando o NameSpace com a função soma
echo somaReal(3,4);

$classeUse = new ct\use_as_principal();

$classeUse->returnName();