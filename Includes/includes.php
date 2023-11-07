<?php

//Importação de arquivos

echo 'Carregando arquivo';

$variavel = 'teste';

if (!function_exists('soma'))
//-> Serve para identificar se a função existe 
{
    function soma($a, $b)
    {
        return $a + $b;
    }
}

