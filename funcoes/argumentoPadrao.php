<?php
//-> Argumentos com valores padões


function testeNome($nome = 'Teste', $nome2 = 'Teste2')//-> caso n passe nenhum valor ele terá esses valores como default
{
	echo "Esse nome é o default: {$nome} e esse é o secundário: {$nome2}";
}
testeNome();
