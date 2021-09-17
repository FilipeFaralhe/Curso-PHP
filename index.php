<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>Curso PHP</title>
</head>
  <body>
     <header class="header">
       <h1 id="title">Curso PHP</h1>
       <h2 id="description">Índice dos Exercícios</h2>
     </header>
      <main class="main">
        <div class="content">
          <nav class="modules">
            <div class="module green">
              <h3>Módulo 01</h3>
              <ul class="green">
                <li><a href="exercises.php?dir=teste&file=teste">Exercício A</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </main>
      <footer class="footer">
          <p id="copy">Filipe Freitas Faralhe © <?= date('Y'); ?><p>
      </footer>
  </body>
</html>