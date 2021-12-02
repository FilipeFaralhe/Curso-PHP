<?php
session_start(); // necessário colocar assim que começar a trabalhar com sessão
print_r($_SESSION);
?>

<?php
$_SESSION['email'] = 'gabirelfilho_alt312331232@emailaz.com.br';
?>

<p>
  <b>Nome:</b> <?= $_SESSION['nome'] ?>
  <br>
  <b>Email: </b> <?= $_SESSION['email'] ?>
</p>


<p>
  <a href="basic_section.php">Voltar na sessão anterior</a>
</p>

<p>
  <a href="basic_section_clear.php">Limpar Sessão</a>
</p>
