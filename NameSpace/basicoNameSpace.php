<?php namespace Financeiro; ?>

<?php

/*
 Contexto de Namespace:
 Serve para evitar conflitos de nomes de objetos em uma aplicação.
 Será utilizado como a primeira instância de uma estrutura de código em PHP
*/

echo __NAMESPACE__;

const TESTEVARIAVEL = 'Valor_Constante1';
define('Financeiro\CONSTANTEFINAN','Constante desse Namespace'); 
/*
Definiu a constante nesse Namespace caso não coloque
será declarado no Namespace raiz do PHP
*/

echo('Variavel: ' . TESTEVARIAVEL );

echo ('Variavel: ' . CONSTANTEFINAN);