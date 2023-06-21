<div id="form">
	<form action="#" id="formPrincipal" method="post">
		<select name="t1" id="t1">
			<option value="0">teste1</option>
			<option value="1">teste2</option>
		</select>

		<button type="submit">Enviar</button>
	</form>
</div>

<?php

echo var_dump(!!$_POST['t1']); //-> converções de booleans utilizando a negação dupla