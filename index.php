<?php

function autoload($controller) {
    if (file_exists('controllers/' . $controller . '.php')) {
        require_once('controllers/' . $controller . '.php');
    }
}

spl_autoload_register('autoload');
?>