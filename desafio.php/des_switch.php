<p id="switch">Desafio Switch case</p>

<form action="#" method="post">

	<input type="text" name="conve" id="conve">
	<select name="conv" id="conv">
		<option value="km-milha">KM - MILHA</option>
		<option value="milha-km">MILHA > KM</option>
		<option value="metro-km">METROS > KM</option>
		<option value="km-metro">KM > METROS</option>
	</select>
	<button type="submit">Calcular</button>

</form>
<?php
//Desafio switch -> conversor de unidade

$milha = 0.621371;
echo $_POST['conve'] . '<br>';

switch ($_POST['conv']) {
	case 'km-milha':
		$convercao = $_POST['conve'] * $milha;
		echo "{$convercao} Milhas";
		break;
	case 'milha-km':
		$convercao = $_POST['conve'] * 1.60934;
		echo "{$convercao} KM";
		break;
	case 'metro-km"':
		$convercao = $_POST['conve'] / 1000;
		echo "{$convercao} KM";
		break;
	case 'km-metro"':
		$convercao = $_POST['conve'] * 1000;
		echo "{$convercao} Metros";
		break;

	default:
		# code...
		break;
}
//echo $_POST['conv'];
