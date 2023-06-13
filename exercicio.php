<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="recursos/css/estilo.css">
  <link rel="stylesheet" href="recursos/css/exercicio.css">
  <title>Exercício</title>
</head>

<body class="exercicio">
  <header class="cabecalho">
    <h1>Exercicio Page</h1>
    <!-- <h2>Visualização do Exercício</h2> -->
  </header>
  <nav class="navegacao">
    <a href=<?= ($_GET['PHP'] . 'teste.php') ?> class="verde">Sem formatação</a>
    <a href="index.php" class="vermelho">Voltar</a>
  </nav>
  <main class="principal">
    <div class="conteudo">
      <?php
      include($_GET['basico'] . 'basico/html_php.php'); //Concatenando de forma dinâmica passando como parâmetro o 'dir';
      //include(__DIR__ . "/{$_GET['PHP']}/{$_GET['teste']}.php");
      ?>
    </div>
  </main>
  <footer class="rodape">
    CURSO PHP <?= date('Y'); ?>
  </footer>
</body>

</html>