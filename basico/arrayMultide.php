<?php
//Arrays multidemencionais:

$ArrayMulti = [
  [
    'nome' => 'Lucas',
    'idade' => 78

  ],

  [
    'nome' => 'Carla',
    'idade' => 65

  ]

];

$ArrayMulti["pessoa2"] = [
  "nome" => "jose",
  "idade" => 23,
  "nacionalidade" => "br"
];

$ArrayMulti[1]["teste"] = "Ok";
$ArrayMulti["pessoa2"]["teste2"] = "Ok2"; //-> aqui adicionando uma chave para esse array

//print_r($ArrayMulti);

unset($ArrayMulti[1]); //-> Irá excluir o da carla

unset($ArrayMulti["pessoa2"]["idade"]);//-> Forma de exclusão
  
