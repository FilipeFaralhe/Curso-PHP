<h1 class="title-panel">Desafio Operadores Lógicos</h1>
<!--
  Dois trabalhos -> terça e quinta!
   -> Se os dois trabalhos derem certos, toma sorvete e compra tv 50 polegadas
   -> Se os um dos trabalhos derem certos, toma sorvete e compra tv 32 polegadas
   -> Se nenhum dos trabalhos derem certos, Fica em casa mais saudável!
-->
<form action="#" method="post">
  <div>
    <label for="t1">Trabalho 1 (Terça):</label>
    <select name="t1" id="t1">
      <option value="1">Executado</option>
      <option value="0">Não Executado</option>
    </select>
  </div>

  <div>
    <label for="t2">Trabalho 2 (Quinta):</label>
    <select name="t2" id="t2">
      <option value="1">Executado</option>
      <option value="0">Não Executado</option>
    </select>
  </div>
  <button>Executar</button>
</form>

<style>
  select {
    height: 40px;

    font-size: 1.5rem;
    font-weight: bold;

    border: 0;
    border-bottom: 2px solid #2980b9;
  }

  button {
    height: 50px;
    width: 200px;

    color: white;
    background: #2980b9;

    font-weight: bold;
    font-size: 2rem;

    border: 0;
    border-radius: 0.5rem;
  }
</style>

<?php

$job1 = $_POST['t1'];
$job2 = $_POST['t2'];

if($job1 && $job2) {
  echo 'toma sorvete e compra tv 50 polegadas';
} else if($job1 !== $job2) {
  echo 'toma sorvete e compra tv 32 polegadas';
} else {
  echo 'Fica em casa mais saudável!';
}
