
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Listado de Proveedores</h1>
            <div class="card">
                <div class="card-body">
                    <div class="row mt-5">
                        <div class="form-group col-6 text-left">
                        <form action="index.php" name="search" method="get">
                            <input type="hidden" name="controller" value="vendors">
                            <input type="hidden" name="action" value="search">
                            <input type="text" class="form-control" name="keywords" placeholder="Ingrese las palabras clave (Nombre - Apellido - Ciudad)">
                            <input type="submit" class="btn btn-success mt-1" value="Buscar">
                        </form>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-info" href="Views/Vendors/add.php">Agregar</a>
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
                            </table>
                            <h4 class="text-center bold text-danger">No se encontraron resultados</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>