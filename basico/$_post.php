<form action="#" method="post">


	<input type="text" name="nome" id="">
	<button type="submit">Enviar</button>

</form>

<?php
//-> utilizando o $_post

print_r($_POST['nome']); //-> pega os parâmetros do submit que são passados pelo name(name são as chaves)