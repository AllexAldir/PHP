<div id="sorteio">Sorteio.php</div>
<?php

$arraySorteio = [
  "ok1",
  "ok2",
  "ok3"
];

echo $arraySorteio[array_rand($arraySorteio)];//-> sempre quando recarregar a página gera um index aleatorio
 