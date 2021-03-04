<?php

function autoload($controller) {
    if (file_exists('controllers/' . $controller . '.php')) {
        require_once('controllers/' . $controller . '.php');
    }
}

spl_autoload_register('autoload');

require_once('models/classPrice.php');
$andres = new Price();
$andres -> timeCount = 4;
$andres -> usuario = 'andres';
echo $andres->usuario;
echo '<br>';
echo $andres->getPrecio('HOUR');


?>