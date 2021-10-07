<h1 class="title-panel">Desafio tabela 2</h1>

<style>
  table {
    border: 1px solid #444;
    border-collapse: collapse;
    margin: 0 auto;
  }

  table tr {
    border: 1px solid #444;
  }

  table td {
    padding: 10px 20px;
  }

  button {
    font-weight: bold;

    padding: 5px;
    border: none;

    background: #2980b9;
    color: white;
  }
</style>

<form action="#" method="post">
  <label for="">Linhas</label>
  <input type="number" name="linhas">
  <label for="">Colunas</label>
  <input type="number" name="colunas">
  <button type="submit">Submit</button>
</form>

<br>

<table>
  <?php
    $linhas = $_POST['linhas'];
    $colunas = $_POST['colunas'];
    $num = 0;

    for ($contLinhas = 0; $contLinhas <= $linhas; $contLinhas++) {
      $style = $contLinhas % 2 === 1 ? $style = "background-color:  #00a8ff" : $style = '';
      echo "<tr style='$style'>";

      for ($contColunas = 0; $contColunas <= $colunas; $contColunas++) {
        echo "<td>$num</td>";
        $num++;
      }
    }
  ?>
</table>
