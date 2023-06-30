<div class="funcoes">Conteudo no vscode</div>

<?php
//-> Utilização de escorpo PHP

$nome = 'nay';

function imprimir(): void
{
	global $nome; //-> poder acessar a variável no scorpo global
	echo 'teste ' . $nome;
};

imprimir();
