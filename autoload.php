<?php
        function autoload($controller) {
            if (file_exists('Controllers/' . $controller . '.php')) {
                require_once('Controllers/' . $controller . '.php');
            }
        }

        spl_autoload_register('autoload');

        if(isset($_POST['controller'])) {
            $controller = $_POST['controller'] . 'Controller';
        }else if (isset($_GET['controller'])) {
            $controller = $_GET['controller'] . 'Controller';
        }else {
            $controller = "SesionController";
        }

        if(isset($_POST['action'])) {
            $action = $_POST['action'];
        }else if (isset($_GET['action'])) {
            $action = $_GET['action'];
        }else {
            $action = "login";
        }

        if(class_exists($controller)){
            $controller = new $controller();
            if(method_exists($controller, $action)) {
            $controller->$action();
            } else {
            echo "La acción ingresada no existe";
            }
        } else {
            echo "El modulo no existe";
        }
    ?>