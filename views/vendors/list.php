<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Proveedores</h1>
    <?php
    require_once('./models/classModelVendor.php');
    $temp = new ModelVendor(); // ver si se puede hacer sin aplicar un require y la instancia.
    $vendors = $temp-> getVendors();
    foreach($vendors as $vendor) {
        echo $vendor->name;
    }
    ?>
</body>
</html>