<?php

//-> Utilizando o método map:

$notasAlunos = [
  4.5,
  3.5,
  5.6,
  8.0,
  5.0

];

function arredondamento($roundNumbers)
{
  return round($roundNumbers);
} //-> Utilizando a função para passar como argunmeto no array_map

$notasFinais = array_map('arredondamento', $notasAlunos);

//print_r($notasFinais); //-> Novo array para notas dos alunos


//-> Utilizando o filter:
function filtroNotas($notasMaiores)
{
  return $notasMaiores > 5;
}

$arrayFiltrado = array_filter($notasAlunos, 'filtroNotas'); //-> Passando a condição 
print_r($arrayFiltrado);
