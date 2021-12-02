<?php
session_start();
session_destroy(); // destrói as sessões

//O die() é importante para que nada seja executado após esse comando, assim
// evitando algum erro inesperado, poderia usar exit() também.

//modifica a url, navegando automaticamente
header('Location: basic_section.php'); die('Não ignore meu cabeçalho');