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

/* require_once('models/classPrice.php');
$andres = new Price();
$andres -> selectedTime = 5; */

/* require_once('models/classVendor.php');
//$clase = new Vendor(23, 'andres', 'fernandez', 'rosales', 223334444, 'andres_','foto', 34344220, 'mdp');
$clase = new Vendor(23, 'andres', 'fernandez', 'rosales', 223334444, 'andres_','foto', 34344220, 'mdp');
echo $clase ->name; */

?>