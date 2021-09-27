<h1 class="title-panel">IF ELSE</h1>

<?php

if(true) { // escopo de bloco que será executado quando o if for igual a true
  echo "Serei impresso?<br>";
  echo "Serei impresso novamente?<br>";
}

if(false) {
  echo "Verdadeiro - 1<br>";
  echo "Verdadeiro - 2<br>";
} else {
  echo "Falso - 1<br>";
  echo "Falso - 2<br>";
}

echo "Fim<br>";

// Isso
if(false) {

} else {
  if(false) {

  } else {
    echo "Ultimo passo<br>";
  }
}

/*
  É a mesma coisa que isso, só que de uma forma mais simplificada,
  por isso utilizamos else if nessas situações
*/
if(false) {
  echo "Passo A<br>";
} else if(false) {
  echo "passo B<br>";
} else {
  echo "Ultimo Passo<br>";
}

// Outro exemplo
/*Assim que ele achar um condição que seja true, ele já sai do if e retorna o valor*/
if(false) {
  echo "Passo A<br>";
} else if (true) {
  echo "Passo B<br>";
} else if(true) {
  echo "Passo C<br>";
} else {
  echo "Passo D<br>";
}