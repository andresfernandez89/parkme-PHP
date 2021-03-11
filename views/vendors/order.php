
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Listado de Empleados</h1>
            <div class="card">
                <div class="card-body">
                    <div class="row mt-5">
                        <div class="form-group col-6 text-left">
                        <form action="process.php" name="search" method="get">
                            <input type="hidden" name="action" value="search">
                            <input type="text" class="form-control" name="keywords" placeholder="Ingrese las palabras clave (Nombre - Apellido)">
                            <input type="submit" class="btn btn-success mt-1" value="Buscar">
                        </form>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-info" href="add_form.php">Agregar</a>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12">
                            <table class="table table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Foto</th>
                                        <th>Legajo</th>
                                        <th>Nombre y Apellido</th>
                                        <th>DNI</th>
                                        <th>Dirección</th>
                                        <th>Celular</th>
                                        <th>Email</th>
                                        <th><a href="index.php?controller=vendors&action=order&order=city">City</a></th>
                                        <th>Comision</th>
                                        <th>Nombre Estacionamiento</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($object as $key => $vendor) {
                                    ?>
                                    <tr>
                                        <td><img id="img_user" src="<?=$vendor->picture?>"></td>
                                        <td><?=$vendor->id?></td>
                                        <td><?=$vendor->name . ' ' . $vendor->lastname?></td>
                                        <td><?=$vendor->dni?></td>
                                        <td><?=$vendor->address?></td>
                                        <td><?=$vendor->cel?></td>
                                        <td><?=$vendor->email?></td>
                                        <td><?=$vendor->city?></td>
                                        <td><?=$vendor->comision?></td>
                                        <td><?=$vendor->parkingName?></td>
                                        <td>
                                            <a href="index.php?controller=vendors&action=edit&id=<?=$key?>">Editar</a>
                                            <a href="index.php?controller=vendors&action=delete&id=<?=$key?>">Eliminar</a>
                                        </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>