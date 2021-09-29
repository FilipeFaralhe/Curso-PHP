<h1 class="title-panel">Desafio Sorteio</h1>

<style>
  h1#personagem {
    text-align: center;
  }
</style>

<?php
$nomes = ["Elza", "Rapunzel", "Branca de neve", "Cinderela"];

$sorteio = array_rand($nomes);

echo "<h1 id='personagem'>$nomes[$sorteio]</h1>";