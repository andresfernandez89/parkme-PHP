<?php

function autoload($controller) {
    if (file_exists('controllers/' . $controller . '.php')) {
        require_once('controllers/' . $controller . '.php');
    }
}

spl_autoload_register('autoload');

$controller = isset($_GET['controller']) ? $_GET['controller'].'Controller' : "";
$action = isset($_GET['action']) ? $_GET['action'] : "";

if(class_exists($controller)){
	$controller = new $controller();

	if(method_exists($controller, $action)) {
		$controller->$action();
    } else {
    echo "La acción ingresada no existe";
    }
} else {
    echo "El modulo que intentas acceder no existe, lo escribiste bien?";
}

require_once('models/classPrice.php');
$andres = new Price();
$andres -> timeCount = 4;
$andres -> usuario = 'andres';
echo $andres->usuario;
echo '<br>';
echo $andres->getPrecio('HOUR');


?>