<?php namespace App;  ?>
<h1 class="title-panel">Sub-Namespaces</h1>

<?php
echo __NAMESPACE__ . '<br>';
const constante = 123;

namespace App\Principal;
echo __NAMESPACE__ . '<br>';
const constante = 323;

namespace App\Principal\Especifico;
echo __NAMESPACE__ . '<br>';
const constante = 445;
echo constante . '<br>';
echo constant('\\' . __NAMESPACE__ . '\constante') . '<br>';

echo \App\constante . '<br>';
echo \App\Principal\constante . '<br>';
echo \App\Principal\Especifico\constante . '<br>';
