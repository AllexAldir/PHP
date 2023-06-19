<?php

define('TESTE_DE_CONSTANTES', 'Exercitando');
echo TESTE_DE_CONSTANTES; //-> aplicando constantes em PHP

/*
pode definir constantes com  a palavra "const" porém em expressões númericas com valores
literais

*/
echo '<br>';

const teste1 = 1.6  + 8; //-> valores com expressões númericas
echo teste1 . '<br>';
echo __FILE__; //-> verificando o local do arquivo.
echo __DIR__; //-> verificando o local da pasta.