<?php


$array1 = [
  'nome' => 'teste',
  'idade' => 51
];


//print_r(count($array1)); //-> count serve como um length:

//Interpolação: 
echo "{$array1['idade']}";


//Para remover um item de um array:
unset($array1['idade']);
print_r($array1);

$array2 = [1,2,3,4,5];
$array3 = [6,7,8,9,10];

$somaArray = $array2 + $array3; //-> irá dar prioridade sempre ao array do lado esquerdo da soma

print_r($somaArray);

//para ordenar os arrays:
print_r(array_merge($array2,$array3));//-> faz um merge nos dois arrays
$total = array_merge($array3,$array2);//-> faz um merge nos dois arrays

//Para ordenar o array porém ele é modificado a sua estrutura:7
$ok = sort($total);//-> faz um merge nos dois arrays
echo $ok;

//Adicionando elementos em um array:
$testeArray = [
  'teste' => 'ok'
];

$testeArray['teste2'] = 'ok2';

print_r($testeArray);