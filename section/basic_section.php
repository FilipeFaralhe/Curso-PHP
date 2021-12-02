<h1 class="title-panel">Básico de sessões</h1>

<?php
session_start();

print_r($_SESSION);
echo "<br>";

if(!$_SESSION['nome']) {
  $_SESSION['nome'] = 'Gabriel';
}

if(!$_SESSION['email']) {
  $_SESSION['email'] = 'gabriel@azmail.com';
}

?>

<p>
  <a href="basic_section_change.php">Alterar Sessão</a>
</p>
