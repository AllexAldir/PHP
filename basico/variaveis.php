<link rel="stylesheet" href="../recursos/css/estilo.css">

<div id="variaveis" style="color: green;">Estudos de variáveis em php</div>

<?php
//Criação de variáveis coloca-se o $

$numAleatorio = 5;
echo $numAleatorio . '<br>';

//Verificando se a variável está setada:

echo isset($numAleatorio);
//echo unset($numAleatorio);

// if ($numAleatorio) {
//   echo 'Ok';
// };

// $array = ['teste','teste2'];
// var_dump($array);