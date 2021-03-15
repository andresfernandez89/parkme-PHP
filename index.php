<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ParkMe</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/CSS/Style.css">
</head>
<body>
    <td>
        <a href="index.php?controller=vendors&action=list"><input type="button" id='btn_list' class='btn btn-primary btn-md' value="Listar" /></a>
        <a href="Views/Vendors/add.php"><input type="button" id='btn_add' class='btn btn-primary btn-md' value="Agregar" /></a>
        <a href="index.php?controller=vendors&action=del"><input type="button" id='btn_del' class='btn btn-primary btn-md' value="Eliminar" /></a>
    </td>
<?php
require_once('autoload.php');
?>
</body>
</html>
