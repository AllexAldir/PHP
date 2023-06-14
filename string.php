<?php
echo 'ydfaud';
echo '<br>';
var_dump('tets');
echo '<br>';

//concatenação:

echo "ndkjad" . ' TEtse';
echo '<br>';
echo strtoupper('tste'); //Deixa tudo maiusculo
echo '<br>';
echo strtolower('MINUSCULO'); //Deixa tudo maiusculo
echo '<br>';
echo ucfirst('primeira letra'); //Deixa tudo maiusculo
echo '<br>';
echo ucwords('todas as primeiras letras'); //Deixa todas as primeiras letras
echo '<br>';
echo strlen('todas às primeiras letras'); //conta a quantidade de strings
echo '<br>';
echo mb_strlen('todas às primeiras letras'); //conta a quantidade de strings porém ignora os caracteres especiais
echo '<br>';
echo substr('todas às primeiras letras', 5, 7); //Se comporta como o slice
$substituicao = 'Hello World';
echo '<br>';

echo str_replace('World', 'Teste', $substituicao); //Replace
