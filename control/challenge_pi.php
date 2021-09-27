<h1 class="title-panel">Desafio PI</h1>

<?php

echo pi();
$pi = 3.14;

if(pi() - $pi <= 0.01) {
  echo "<br>Iguais";
} else {
  echo "<br>Diferentes";
}

echo "<br>" . pi() - $pi;