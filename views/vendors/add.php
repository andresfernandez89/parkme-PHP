<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ParkMe</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Header Main Container -->
    <div class="header-main">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-4">
                    <div class="logo">
                    <a href="index.php"><img src="assets/images/logo.png" alt="Globant"></a>
                    </div>
                </div>
                <div class="col-6 col-md-8">
                    <nav>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Agregar Proveedor</h1>
            <div class="card">
                <div class="card-body">
                    <div class="row mt-5">
                        <div class="col-12 col-md-10 offset-md-1">
                            <form method="post" name="add" action="/Bootcamp-PHP/proyecto-final-parkme/index.php" enctype="multipart/form-data">
                                <input type="hidden" name="controller" value="vendors">
                                <input type="hidden" name="action" value="add">
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="id" class="col-form-label">Codigo</label>
                                        <input type="number" class="form-control" id="id" name="id" />
                                    </div>
                                    <div class="form-group offset-1 col-md-6">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
                                        <label for="picture" class="col-form-label">Imagen</label>
                                        <input type="file" class="form-control" id="picture" name="picture" />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="name" class="col-form-label">Nombre</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="nicolas" required />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="lastname" class="col-form-label">Apellido</label>
                                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="martinez" required />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="dni" class="col-form-label">DNI</label>
                                        <input type="number" class="form-control" id="dni" name="dni" placeholder="33445678" required />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="address" class="col-form-label">Direccion</label>
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Colon 2010" required />
                                    </div>
                                    <div>
                                        <label for="cel" class="col-form-label">Celular</label>
                                        <input type="number" class="form-control" id="cel" name="cel" placeholder="2236159080" required />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="city" class="col-form-label">Ciudad</label>
                                        <input type="text" class="form-control" id="city" name="city" placeholder="Mar del Plata" required />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="email" class="col-form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="jmdiaz@mail.com" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" />
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="parkingName" class="col-form-label">Nombre de Estacionamiento</label>
                                        <input type="text" class="form-control" id="parkingName" name="parkingName" placeholder="MDP Parking" required />
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="comision" class="col-form-label">comision</label>
                                        <input type="number" class="form-control" id="comision" name="comision" placeholder="10" readonly='readonly'/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <div class="col-12 col-sm-12">
                                            <a href="/Bootcamp-PHP/proyecto-final-parkme/index.php"><input type="button" id='btn_cancel' class='btn btn-danger btn-md' value="Cancelar" /></a> 
                                            <input type="submit" id='btn_add' class='btn btn-success btn-md' value="Enviar" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->
</div> <!-- container -->

</body>
</html>