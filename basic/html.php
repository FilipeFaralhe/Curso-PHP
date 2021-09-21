<h1 class="title-panel">Integração HTML</h1>

<!--
  O html é uma marcação de texto e o código php em texto pode conter tags html,
  tornando-se assim o envio de texto ou tags html pelo php.
-->
<h2>
  <?php
    echo 'Olá';
    echo '<small>';
    echo ' Mundo';
    echo '</small>';
  ?>
</h2>

<?="<div>Outra forma de me 'expressar'!</div>"?>

<div>
  <button><?= "Botão" ?></button>
</div>
