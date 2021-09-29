<h1 class="title-panel">Usando $_POST</h1>

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

<form action="#" method="post">
  <input type="text" name="nome">
  <input type="text" name="sobrenome">
  <select name="estado">
    <option value="AC">Acre</option>
    <option value="BA">Bahia</option>
  </select>
  <button>Enviar</button>
</form>

<?php

print_r($_POST);

echo '<br>' . count($_POST);
