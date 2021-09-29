<h1 class="title-panel">Usando $_GET</h1>

<?php
/*
  Passamos parâmetros para o método get, através da URL
  por exemplo:
  http://localhost/PhpstormProjects/Curso-PHP/array/get.php?nome=filipe
  nesse caso estamos enviando os parâmetros depois do sinal "?",
  ou denso nome como chave e filipe como valor.

  [nome] => filipe
*/

print_r($_GET);
echo '<br>' . $_GET['nome'];