<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/exercises.css">
  <title>Exercícios</title>
</head>
  <body class="exercises">
     <header class="header">
       <h1 id="title">Curso PHP</h1>
       <h2 id="description">Visualização do Exercício</h2>
     </header>
      <main class="main">
        <nav class="navigation">
          <a href=<?="/{$_GET['dir']}/{$_GET['file']}.php"?> class="green">Sem formatação</a>
          <a href="./index.php" class="red">Voltar</a>
        </nav>
        <div class="content">
          <?php
          //include(./teste/teste.php);
          //include($_GET['dir']."/".$_GET['file'].".php");
          //include(__DIR__."/{$_GET['file']}.php");
          include("{$_GET['dir']}/{$_GET['file']}.php")
          ?>
        </div>
      </main>
      <footer class="footer">
          <p id="copy">Filipe Freitas Faralhe © <?= date('Y'); ?><p>
      </footer>
  </body>
</html>
