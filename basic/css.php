<h1 class="title-panel">Integração CSS</h1>

<!--
O html é uma marcação de texto e o código php em texto pode conter tags html,
tornando-se assim o envio de texto ou tags html pelo php.
-->
<h2 center>
  <?php
  echo 'Olá';
  echo '<small>';
  echo ' Mundo';
  echo '</small>';
  ?>
</h2>

<?="<div blue center>Outra forma de me 'expressar'!</div>"?>

<div>
  <button double><?= "Botão" ?></button>
</div>

<style>
  button {
    padding: 5px <?= 2 * 10 ?>px;
    background: #00a8ff;
    color: #FFFFFF;
    font-weight: bold;
    border-radius: 10px;
    border: none;
  }

  [center] {
    display: flex;
    justify-content: center;
  }

  [blue] {
    color: #00a8ff;
  }

  [double] {
    font-size: <?= 10 + 2 ?>rem;
  }
</style>