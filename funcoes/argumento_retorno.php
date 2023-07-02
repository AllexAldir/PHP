<?php
//utilizando argumentos e retorno:

function stringReturn(): string
{
  return 'ok';
}

//var_dump(stringReturn());

function returnName($x): string
{
  return "Esse é o nome: {$x}";
}

$name = 'ko';

var_dump(returnName('teste'));

function some($x, $y)
{
  echo $x + $y;
}
some(4, 5);

//Modificando o valor no endereço na mémoria:

$valor = 5;

function trocaValor(&$valor) //indo no endereço na memoria
{
  $valor = 9;
}
trocaValor($valor);

var_dump($valor);
