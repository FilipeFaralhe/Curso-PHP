<h1 class="title-panel">Desafio Tabela</h1>

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

</style>

<?php
$array = [
  ['01', '02', '03', '04', '05'],
  ['06', '07', '08', '09', '10'],
  ['11', '12', '13', '14', '15'],
  ['16', '17', '18', '19', '20']
];
?>

<!-- Exemplo 01 -->
<table>
  <?php
    foreach ($array as  $index => $linhas) {
      if ($index % 2 === 1) {
        echo "<tr class='impar'>";
        echo '<style> tr.impar { background: #00a8ff} </style>';
      } else {
        echo "<tr class='par'>";
      }
      foreach ($linhas as $colunas) {
        echo "<td>$colunas</td>";
      }
      echo '</tr>';
    }
  ?>
</table>

<br>

<!-- Exemplo 02 -->
<table>
  <?php
    foreach ($array as  $index => $linhas) {
      $style = $index % 2 === 1 ? $style = "background-color:  #00a8ff" : $style = '';
      echo "<tr style='$style'>";
      foreach ($linhas as $colunas) {
        echo "<td>$colunas</td>";
      }
      echo '</tr>';
    }
  ?>
</table>